<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\CendanaModel;
use Session;
use Alert;
use Mail;
use Cookie;
use DB;
use Hash;
use Carbon\Carbon;
use App\Providers\AppServiceProvider;

class CendanaController extends Controller
{

    //Login
    public function Login_Page(Request $req){
        $idpegawai = $_POST['idpegawai'];
        $password = $req->input('password');

        $user = new CendanaModel;
        $ceklogin = $user->isExist($idpegawai, $password);
        // die;
        if ($ceklogin == true){
            //2.a. Jika KETEMU, maka session LOGIN dibuat
            Session::flush();
            Session::put('login', $idpegawai);
            Session::put('pass', $password);
            Session::flash('success', 'Login Success!');
            return redirect('/home');
        }else {
            //2.b. Jika TIDKA KETEMU, maka kembali ke LOGIN dan tampilkan PESAN
            Session::flash('error', 'Email or Password is Incorrect!');
            return redirect('/');
        }
    }

    //Home
    public function data_home(){
        $user = new CendanaModel;
        $count_pegawai = $user->get_count_pegawai();
        $count_penjualan = $user->get_jumlah_penjualan();
        $count_retur = $user->get_jumlah_retur();
        return view('landing_page', compact('count_pegawai', 'count_penjualan', 'count_retur'));
    }

    //Penjualan
    public function transaksi_penjualan(){
        $user = new CendanaModel;
        $data_penjualan = $user->get_data_penjualan();
        // dd($data_penjualan);
        return view('transaksipenjualan', compact(['data_penjualan']));
    }

    public function view_detail_transaksi(Request $req){
        $idjual = $req->input('updateitem');
        $user = new CendanaModel;
        $detail_penjualan = $user->get_detail_penjualan($idjual);
        return view('detailpenjualan', compact(['detail_penjualan']));
    }


    public function view_insert_transaksi_penjualan(){
        $user = new CendanaModel;
        $data_newid = $user->view_insert_transaksi_penjualan();
        $get_custid = $user->id_cust_view();
        return view('insertcustbeli', compact('data_newid', 'get_custid'));
    }

    public function data_insert_transaksi_penjualan(Request $req){
        $TR_JUAL = $req->input('tj_baru');
        $TR_RETUR = $req->input('tr_baru');
        $cust = $req->input('id_customer');
        $user = new CendanaModel;
        $data_newid = $user->data_produk_jadi();
        $id_pembelian = $user->get_id_pembelian($TR_JUAL, $TR_RETUR, $cust);
        // $id_cust = $id_pembelian[0]->CUST_ID;
        Session::put('id_cust', $id_pembelian[0]->CUST_ID);
        Session::put('nama_cust', $id_pembelian[0]->NAMA_CUST);
        Session::put('tj_baru', $id_pembelian[0]->TR_JUAL);
        Session::put('tr_baru', $id_pembelian[0]->TR_RETUR);

        $data_table = $user->get_data_table_penjualan2($TR_JUAL);
        // Session::put('id_tjbaru', $TR_JUAL);
        // Session::put('id_trbaru', $TR_RETUR);
        // Session::put('id_cust', $id_pembelian[0][0]);
        // Session::put('nama_cust', $id_pembelian[0][1]);
        return view('inserttransjual', compact(['data_newid'], ['data_table']));
    }

    public function insert_mirror(Request $req){
        $id_produk = $req->input('id_produk');
        $qty = $req->input('qty');
        $id_tr_jual = Session::get('tj_baru');
        $id_tr_retur = Session::get('tr_baru');
        if($req->input('diskon') == null){
            $diskon = 0;
        }
        else{
            $diskon = $req->input('diskon');
        }

        $user = new CendanaModel;
        $get_name_id_product = $user->get_name_id_product($id_produk);
        $id_produk = $get_name_id_product[0]->ID_PRODUK;
        $nama_produk = $get_name_id_product[0]->NAMA_PRODUK;
        $get_price = $user->get_price($id_produk);
        $get_price = $get_price[0]->HARGA_PRODUK;
        $cek_equal = $user->cek_equal($id_tr_jual, $id_produk);
        if($cek_equal == True){
            $req->session()->flash('duplicate', 'Product already exist!');
        }
        else{
            if(Session::has('duplicate')){
                $req->session()->forget('duplicate');
            }
            $data_insert_mirror = $user->insert_mirror($id_produk, $qty, $id_tr_jual, $get_price, $diskon);
        }
        $data_newid = $user->data_produk_jadi();
        $data_table = $user->get_data_table_penjualan($id_tr_jual);
        return view('inserttransjual', compact(['data_table'], ['data_newid']));
    }
    public function delete_mirror_detailjual(Request $req){
        $id_produk = $req->input('id_produk');
        $id_tr_jual = $req->input('id_jual');
        $user = new CendanaModel;
        $data_delete_mirror = $user->delete_mirror_detailjual($id_produk, $id_tr_jual);
        $data_newid = $user->data_produk_jadi();
        $data_table = $user->get_data_table_penjualan($id_tr_jual);
        return view('inserttransjual', compact(['data_table'], ['data_newid']));
    }
    public function insert_detailpenjualan(){
        $user = new CendanaModel;
        $data_insert_penjualan = $user->insert_detailpenjualan();
        return redirect('/detailpenjualan');
    }
    public function delete_list_penjualan(){
        $id_tr_jual = Session::get('tj_baru');
        $delete_list_penjualan = DB::delete('DELETE FROM `MIRROR_DETAILJUAL` WHERE JUAL_ID = ?', [$id_tr_jual]);
        return redirect('/insertcustbeli');
    }
    public function insert_list_penjualan(){
        $user = new CendanaModel;
        $id_tr_retur = Session::get('tr_baru');
        $id_cust = Session::get('id_cust');
        $id_tr_jual = Session::get('tj_baru');
        $count_sum_produk = $user->count_sum_produk($id_tr_jual);
        $count_sum_produk = $count_sum_produk[0]->count_sum_produk;
        $sum_total_harga = $user->sum_total_harga($id_tr_jual);
        $sum_total_harga = $sum_total_harga[0]->sum_total_harga;
        $insert_transaksi_jual = $user->insert_transaksi_jual($id_tr_jual, $id_tr_retur, $id_cust, $count_sum_produk, $sum_total_harga);
        $data_insert_penjualan = $user->insert_list_penjualan($id_tr_jual);
        return redirect('/insertcustbeli');
    }

    //view produk mentah
    public function view_produk_mentah(){
        $user = new CendanaModel;
        $data_produkmentah = $user->get_data_produkmentah();
        return view('produkmentah', compact(['data_produkmentah']));
    }
    public function detail_produk_mentah(Request $req){
        $id_mentah = $req->input('mentahid');
        $user = new CendanaModel;
        $detail_produkmentah = $user->get_detail_produkmentah($id_mentah);
        return view('updatementah', compact(['detail_produkmentah']));
    }
    public function update_produkmentah(Request $req){
        $id_mentah = $req->input('idmentah');
        $idkonversi = $req->input('idkonversi');
        $namamentah = $req->input('namamentah');
        $jenismentah = $req->input('jenismentah');
        $jumlah = $req->input('jumlah');
        $expproduk = $req->input('expproduk');
        $user = new CendanaModel;
        $update_produkmentah = $user->update_produkmentah($id_mentah, $idkonversi, $namamentah, $jenismentah, $jumlah, $expproduk);
        return redirect('/produkmentah');
    }
    public function view_insert_produk_mentah(){
        $user = new CendanaModel;
        $viewprodukmentah = $user->get_data_jenisprodukmentah();
        return view('insertmentah', compact(['viewprodukmentah']));
    }
    public function insert_produk_mentah(Request $Req){
        $nama_produk = $Req->input('namamentah');
        $jenis_produk = $Req->input('jenismentah');
        $jumlah = $Req->input('jumlah');

        $exp_produk = $Req->input('expproduk');
        $user = new CendanaModel;
        $insert_produkmentah = $user->insert_produkmentah($nama_produk, $jenis_produk, $jumlah, $exp_produk);
        return redirect('/produkmentah');
    }
    public function delete_produk_mentah(Request $req){
        $id_mentah = $req->input('idmentah_delete');
        $user = new CendanaModel;
        $delete_produkmentah = $user->delete_produkmentah($id_mentah);
        return redirect('/produkmentah');
    }

    //view produk jadi
    public function view_produk_jadi(){
        $user = new CendanaModel;
        $data_produkjadi = $user->get_data_produkjadi();
        return view('produkjadi', compact(['data_produkjadi']));
    }
    public function view_detail_produk_jadi(Request $req){
        $id_jadi = $req->input('jadiid');
        $user = new CendanaModel;
        $detail_produkjadi = $user->get_detail_produkjadi($id_jadi);
        $status_produkjadi = $user->get_status_produkjadi($id_jadi);
        return view('updatejadi', compact(['detail_produkjadi', 'status_produkjadi']));
    }
    //update
    public function update_produk_jadi(Request $req){
        $id_pjadi = $req->input('id_pjadi');
        $namaproduk = $req->input('namaproduk');
        $jenis_pjadi = $req->input('jenis_pjadi');
        $harga_produk = $req->input('harga_produk');
        $jumlah_produk = $req->input('jumlah_produk');
        $status_produk = $req->input('status_produk');
        $expproduk = $req->input('expproduk');
        $tgl_terima = $req->input('tgl_terima');
        $user = new CendanaModel;
        $update_produkjadi = $user->update_produkjadi($id_pjadi, $namaproduk, $jenis_pjadi, $harga_produk, $jumlah_produk, $status_produk, $expproduk, $tgl_terima);
        return redirect('/produkjadi');
    }
    //insert
    public function view_insert_produk_jadi(){
        $user = new CendanaModel;
        $viewprodukjadi = $user->get_data_statusprodukjadi();
        $viewjenisprodukjadi = $user->get_data_jenisproduk();
        return view('insertjadi', compact(['viewprodukjadi', 'viewjenisprodukjadi']));
    }
    public function insert_produk_jadi(Request $req){
        $namaproduk = $req->input('namapjadi');
        $jenis_produk = $req->input('jenis_produk');
        $harga_produk = $req->input('harga_produk');
        $jumlah = $req->input('jumlah');
        $status_produk = $req->input('status_produk');
        $expproduk = $req->input('expproduk');
        $tgl_terima = $req->input('tgl_terima');
        $user = new CendanaModel;
        $insert_produkjadi = $user->insert_produkjadi($namaproduk, $jenis_produk, $harga_produk, $jumlah, $status_produk, $expproduk, $tgl_terima);
        return redirect('/produkjadi');
    }
    //delete
    public function delete_produk_jadi(Request $req){
        $id_jadi = $req->input('idjadi_delete');
        $user = new CendanaModel;
        $delete_produkjadi = $user->delete_produkjadi($id_jadi);
        return redirect('/produkjadi');
    }

    //retur
    public function view_retur(){
        $user = new CendanaModel;
        $data_retur = $user->get_data_retur();
        return view('retur', compact(['data_retur']));
    }
    public function view_detail_retur(Request $req){
        $idretur = $req->input('idretur');
        $user = new CendanaModel;
        $detail_retur = $user->get_detail_retur($idretur);
        return view('detailretur', compact(['detail_retur']));
    }
    public function view_insert_customer_retur(){
        $user = new CendanaModel;
        $data_customer = $user->get_data_customer();
        $data_transaksi = $user->get_data_transaksi();
        return view('insertcustretur', compact(['data_customer'], ['data_transaksi']));
    }
    public function view_insert_transaksi_retur(Request $req){
        $id_cust = $req->input('id_transaksi');
        $split_id = explode(' - ', $id_cust); //pisah id_transaksi dan id_customer
        $user = new CendanaModel;
        // $data_transaksi = $user->get_data_transaksi();
        $data_customer = $user->get_data_customer_retur($split_id);
        $detail_penjualan = $user->get_detail_penjualan($split_id[0]);
        return view('inserttransretur', compact(['split_id'],['data_customer'], ['detail_penjualan']));
    }
    public function insert_retur(Request $req){
        $id_produk = $req->input('id_produk', []);
        $id_retur = $req->input('id_retur');
        dd($id_produk, $id_retur);
    }
    //pegawai
    public function view_pegawai(){
        $user = new CendanaModel;
        $data_pegawai = $user->get_data_pegawai();
        return view('master_pegawai', compact(['data_pegawai']));
    }
    public function view_insert_pegawai(){
        $user = new CendanaModel;
        $list_job = $user->get_list_job();
        return view('insertpegawai', compact(['list_job']));
    }
    public function view_update_pegawai(Request $req){
        $id_pegawai = $req->input('id_pegawai');
        $user = new CendanaModel;
        $data_pegawai = $user->get_data_pegawai_byid($id_pegawai);
        return view('updatepegawai', compact(['data_pegawai']));
    }
    public function update_pegawai(Request $req){
        $id_pegawai = $req->input('id_pegawai');
        $nama_pegawai = $req->input('namapegawai');
        $jobpegawai = $req->input('jobpegawai');
        $passpegawai = $req->input('passpegawai');
        $passbarupegawai = $req->input('passbarupegawai');
        $passkonbarupegawai = $req->input('passkonbarupegawai');
        $user = new CendanaModel;
        if($passbarupegawai == null && $passkonbarupegawai == null){
            $update_pegawai = $user->update_pegawai($id_pegawai, $nama_pegawai, $jobpegawai, $passpegawai);
        }else{
            if($passbarupegawai != $passkonbarupegawai){
                return redirect('/pegawai')->with('message', 'Password baru tidak sama');
            }
            $update_pegawai = $user->update_passpegawai($id_pegawai, $nama_pegawai, $jobpegawai, $passpegawai, $passkonbarupegawai, $passbarupegawai);
        }
        // dd(update_pegawai);
        return redirect('/pegawai');
    }
    public function data_insert_pegawai(Request $req){
        $nama_pegawai = $req->input('namapegawai');
        $jobpegawai = $req->input('jobpegawai');
        $passpegawai = $req->input('passpegawai');
        if($passpegawai == null){
            $passpegawai = '12345678';
        }
        $user = new CendanaModel;
        $insert_pegawai = $user->insert_pegawai($nama_pegawai, $jobpegawai, $passpegawai);
        return redirect('/pegawai');
    }
    public function delete_pegawai(Request $req){
        $id_pegawai = $req->input('id_pegawai_delete');
        $user = new CendanaModel;
        $delete_pegawai = $user->delete_pegawai($id_pegawai);
        return redirect('/pegawai');
    }

    //CUSTOMER
    public function view_customer(){
        $user = new CendanaModel;
        $data_customer = $user->get_data_customer();
        return view('customer', compact(['data_customer']));
    }
    public function view_update_customer(Request $req){
        $idcust = $req->input('idcust');
        $user = new CendanaModel;
        $data_customer = $user->get_data_customer_update($idcust);
        return view('updatecust', compact(['data_customer']));
    }
    public function insert_customer(Request $req){
        $nama_customer = $req->input('namacustomer');
        $status = $req->input('status_customer');
        $alamat_customer = $req->input('alamat_customer');
        $no_telp_customer = $req->input('telepon_customer');
        $user = new CendanaModel;
        $insert_customer = $user->insert_customer($nama_customer, $status, $alamat_customer, $no_telp_customer);
        return redirect('/customer');
    }
    public function update_customer(Request $req){
        $idcust = $req->input('id_customer');
        $nama_cust = $req->input('namacustomer');
        $status_customer = $req->input('status_customer');
        $alamat_cust = $req->input('alamat_customer');
        $no_telp_cust = $req->input('telepon_customer');
        $user = new CendanaModel;
        $update_customer = $user->update_customer($idcust, $nama_cust,$status_customer, $alamat_cust, $no_telp_cust);
        return redirect('/customer');
    }
    public function delete_customer(Request $req){
        $idcust = $req->input('id_customer_delete');
        $user = new CendanaModel;
        $delete_customer = $user->delete_customer($idcust);
        return redirect('/customer');
    }

    //PENYESUAIAN STOK
    public function penyesuaian_stok(){
        $user = new CendanaModel;
        $data_penyesuaian_stok = $user->get_data_penyesuaian_stok();
        return view('penyesuaistok', compact(['data_penyesuaian_stok']));
    }
    public function tampilan_list_produk_mentah(){
        $user = new CendanaModel;
        $produk_show = $user->data_produk_mentah();
        return view('update_penyesuaianstok', compact(['produk_show']));
    }
    public function tampilan_list_produk_jadi(){
        $user = new CendanaModel;
        $produk_show = $user->data_produk_jadi();
        return view('update_penyesuaianstokjadi', compact(['produk_show']));
    }
    public function update_stock_produk_mentah(Request $req){
        $update_stock_produk_mentah = "";
        $user = new CendanaModel;
        if($req->input('id_produk_mentah') != null && $req->input('qty') != null){
            $id_produk = $req->input('id_produk_mentah');
            $split_id = explode(' - ', $id_produk);
            $qty = $req->input('qty');
            $update_stock_produk_mentah = $user->update_stock_produk_mentah($split_id[0], $qty);
        }
        $produk_show = $user->data_produk_mentah();

        if($update_stock_produk_mentah != null){
            $req->session()->flash('success', 'Update stock success!');
        }
        else{
            if(Session::has('success')){
                $req->session()->forget('success');
                $req->session()->flash('error', 'Update stock failed!');
            }
        }
        // return view('penyesuaianstok', compact(['produk_show']));
        return redirect('/penyesuaistok');
    }

    public function update_stock_produk_jadi(Request $req){
        $update_stock_produk_jadi = "";
        $user = new CendanaModel;
        if($req->input('id_produk_jadi') == null && $req->input('qty') == null){
            $id_produk = $req->input('id_produk_jadi');
            $split_id = explode(' - ', $id_produk);
            $qty = $req->input('qty');
            dd($split_id);
            $update_stock_produk_jadi = $user->update_stock_produk_jadi($split_id[0], $qty);
        }
        $produk_show = $user->data_produk_jadi();

        if($update_stock_produk_jadi != null){
            $req->session()->flash('success', 'Update stock success!');
        }
        else{
            if(Session::has('success')){
                $req->session()->forget('success');
                $req->session()->flash('error', 'Update stock failed!');
            }
        }
        // return view('penyesuaistok', compact(['produk_show']));
        return redirect('/penyesuaistok');
    }

    //Konversi
    public function konversi(){
        $user = new CendanaModel;
        $produkmentah_show = $user->data_produk_mentah();
        $konversi = $user->data_konversi();
        return view('konversi', compact(['produkmentah_show', 'konversi']));
    }
    public function insert_konversi(Request $req){
        $id_peg = Session::get('login');
        $id_produk_mentah = $req->input('idprodukmentah');
        $qtymentah = $req->input('qtymentah');
        $id_produk_konversi = $req->input('idprodukkonversi');
        $qtyjadi = $req->input('qtyjadi');
        $user = new CendanaModel;
        $insert_konversi = $user->insert_konversi($id_produk_mentah, $qtymentah, $id_peg, $id_produk_konversi, $qtyjadi);
        return redirect('/konversi');
    }



    //LAPORRAN
    public function laporan_konversi_stok(){
        $user = new CendanaModel;
        $konversi = $user->data_konversi2();
        return view('laporankonversistok', compact(['konversi']));
    }
    public function laporan_retur_produk(){
        $user = new CendanaModel;
        $retur = $user->data_retur();
        return view('laporan_returproduk', compact(['retur']));
    }
    public function laporan_penjualan(){
        $user = new CendanaModel;
        $penjualan = $user->data_penjualan();
        return view('laporan_penjualan', compact(['penjualan']));
    }
    public function laporan_masuk_produk(){
        $user = new CendanaModel;
        $masuk = $user->data_masuk();
        return view('laporan_masukproduk', compact(['masuk']));
    }
    public function laporan_keluar_produk(){
        $user = new CendanaModel;
        $keluar = $user->data_keluar();
        return view('laporan_keluarproduk', compact(['keluar']));
    }

}
