<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class CendanaModel extends Model
{
    use HasFactory;

    //Login page
    public function isExist($idpegawai, $password){
        $cmd = "SELECT count(*) is_exist ".
                "FROM PEGAWAI ".
                "WHERE PEGAWAI_ID= :idpegawai AND PASS_PEG= :password;";
        $data = [
            'idpegawai'=> $idpegawai,
            'password'=> $password
        ];
        $res = DB::select($cmd,$data);

        if($res[0]->is_exist == 1){
            return true;
        }
        return false;

        if(isset($res) && count($res) > 0){
            return $res;
        }
        return null;
    }

    //GET_DATA_HOME
    public function get_count_pegawai(){
        $cmd = "SELECT count(*) as `count_pegawai` ".
                "FROM PEGAWAI;";
        $res = DB::select($cmd);
        if(isset($res) && count($res) > 0){
            return $res;
        }
        return null;
    }

    public function get_jumlah_penjualan(){
        $cmd = "SELECT format(SUM(TOTAL_JUAL),'.') as `count_penjualan`, format(SUM(JML_PRODUK),'.') as `count_unit_terjual`" .
                "FROM TRANSAKSI_JUAL;";
        $res = DB::select($cmd);
        if(isset($res) && count($res) > 0){
            return $res;
        }
        return null;
    }

    public function get_jumlah_retur(){
        $cmd = "SELECT format(SUM(JML_PRODUK),'.') as `count_retur` FROM `TRANSAKSI_RETUR`;";
        $res = DB::select($cmd);
        if(isset($res) && count($res) > 0){
            return $res;
        }
        return null;
    }
    public function get_detail_retur($idretur){
        $cmd = "SELECT R.PRODUK_ID as `PRODUK_ID`, P.NAMA_PRODUK as `NAMA_PRODUK`, RETUR_ID, QTY_RETUR, HARGA_RETUR, (QTY_RETUR * HARGA_RETUR) as `HARGA_TOTAL` FROM DETAIL_RETUR R, PRODUK P WHERE RETUR_ID = '".$idretur."' AND R.PRODUK_ID = P.PRODUK_ID;";
        $res = DB::select($cmd);
        if(isset($res) && count($res) > 0){
            return $res;
        }
        return null;
    }

    //GET_DATA_PENJUALAN
    public function get_data_penjualan(){
        $cmd = "SELECT T.JUAL_ID as `ID_Jual`, T.CUST_ID as `ID_Customer`, T.JML_PRODUK as `Jumlah_Produk`, T.TOTAL_JUAL as `Total_Jual` ".
                "FROM TRANSAKSI_JUAL T;";
        $res = DB::select($cmd);
        if(isset($res) && count($res) > 0){
            return $res;
        }
        return null;
    }
    public function get_detail_penjualan($idjual){
        $cmd = "SELECT C.NAMA_CUST as `Nama_Cust`, J.JUAL_ID as `JUAL_ID`, P.PRODUK_ID as `PRODUK_ID`, P.NAMA_PRODUK as `NAMA_PRODUK`, J.QTY_JUAL as `QTY_JUAL`, J.HARGA_JUAL as `HARGA_JUAL`, J.DISKON_JUAL as `DISKON_JUAL`, (J.QTY_JUAL * (HARGA_JUAL - J.DISKON_JUAL)) as `HARGA_TOTAL` FROM DETAIL_JUAL J, PRODUK P, CUSTOMER C, TRANSAKSI_JUAL TJ WHERE J.JUAL_ID ='".$idjual."' AND J.PRODUK_ID = P.PRODUK_ID AND C.CUST_ID = TJ.CUST_ID AND TJ.JUAL_ID = J.JUAL_ID;";
        $res = DB::select($cmd);
        if(isset($res) && count($res) > 0){
            return $res;
        }
        return null;
    }
    public function data_produk_jadi(){
        $cmd = "SELECT * FROM PRODUK;";
        $res = DB::select($cmd);
        if(isset($res) && count($res) > 0){
            return $res;
        }
        return null;
    }
    public function data_produk_mentah(){
        $cmd = "SELECT * FROM PRODUK_MENTAH;";
        $res = DB::select($cmd);
        if(isset($res) && count($res) > 0){
            return $res;
        }
        return null;
    }
    public function get_id_pembelian($TR_JUAL, $TR_RETUR, $cust){
        $cmd = "SELECT SUBSTRING('".$cust."', 1, 7) as `CUST_ID`, SUBSTRING('".$cust."', 10, 100) as `NAMA_CUST`, '".$TR_JUAL."' as `TR_JUAL`, '".$TR_RETUR."' as `TR_RETUR`;";
        $res = DB::select($cmd);
        if(isset($res) && count($res) > 0){
            return $res;
        }
        return null;
    }
    public function get_name_id_product($id_produk){
        $cmd = "SELECT SUBSTRING('".$id_produk."', 1, 6) as `ID_PRODUK`, SUBSTRING('".$id_produk."', 9, 100) as `NAMA_PRODUK`;";
        $res = DB::select($cmd);
        if(isset($res) && count($res) > 0){
            return $res;
        }
        return null;
    }
    public function get_price($id_produk){
        $cmd = "SELECT HARGA_PRODUK FROM PRODUK WHERE PRODUK_ID = '".$id_produk."';";
        $res = DB::select($cmd);
        if(isset($res) && count($res) > 0){
            return $res;
        }
        return null;
    }
    public function get_data_transaksi(){
        $cmd = "SELECT T.JUAL_ID as `JUAL_ID`, T.CUST_ID as `CUST_ID`, C.NAMA_CUST as `NAMA_CUST` FROM TRANSAKSI_JUAL T, CUSTOMER C WHERE T.CUST_ID = C.CUST_ID ORDER BY `JUAL_ID` DESC;";
        $res = DB::select($cmd);
        if(isset($res) && count($res) > 0){
            return $res;
        }
        return null;
    }
    //cek yang sama di MIRROR_DETAILJUAL
    public function cek_equal($id_tr_jual, $id_produk){
        $cmd = "SELECT count(*) is_exist FROM MIRROR_DETAILJUAL WHERE JUAL_ID = '".$id_tr_jual."' AND PRODUK_ID = '".$id_produk."';";
        $res = DB::select($cmd);
        if($res[0]->is_exist == 1){
            return true;
        }
        return false;
    }
    //insert into table MIRROR_DETAILJUAL
    public function insert_mirror($id_produk, $qty, $id_tr_jual, $get_price, $diskon){
        $cmd = "INSERT INTO `MIRROR_DETAILJUAL` (`PRODUK_ID`, `JUAL_ID`, `QTY_JUAL`, `HARGA_JUAL`, `DISKON_JUAL`) VALUES ('".$id_produk."', '".$id_tr_jual."', '".$qty."', '".$get_price."', '".$diskon."');";
        $res = DB::insert($cmd);
        return $res;
    }
    //delete selected row from table MIRROR_DETAILJUAL
    public function delete_mirror_detailjual($id_produk, $id_tr_jual){
        $cmd = "DELETE FROM `MIRROR_DETAILJUAL` WHERE `PRODUK_ID` = '".$id_produk."' AND `JUAL_ID` = '".$id_tr_jual."';";
        $res = DB::delete($cmd);
        return $res;
    }
    //count sum produk
    public function count_sum_produk($id_tr_jual){
        $cmd = "SELECT SUM(QTY_JUAL) as `count_sum_produk` FROM `MIRROR_DETAILJUAL` WHERE JUAL_ID = '".$id_tr_jual."';";
        $res = DB::select($cmd);
        if(isset($res) && count($res) > 0){
            return $res;
        }
        return null;
    }
    //sum total harga
    public function sum_total_harga($id_tr_jual){
        $cmd = "SELECT SUM(((HARGA_JUAL - DISKON_JUAL) * QTY_JUAL)) as `sum_total_harga` FROM `MIRROR_DETAILJUAL` WHERE JUAL_ID = '".$id_tr_jual."';";
        $res = DB::select($cmd);
        if(isset($res) && count($res) > 0){
            return $res;
        }
        return null;
    }
    //insert to transaksi jual
    public function insert_transaksi_jual($id_tr_jual, $id_tr_retur, $id_cust, $count_sum_produk, $sum_total_harga){
        $cmd = "INSERT INTO `TRANSAKSI_JUAL` (`JUAL_ID`, `RETUR_ID`, `CUST_ID`, `TGL_BELi`, `JML_PRODUK`, `TOTAL_JUAL`, `JUAL_DELETE`) VALUES ('".$id_tr_jual."', '".$id_tr_retur."', '".$id_cust."', SUBSTRING(now(), 1, 10), '".$count_sum_produk."', '".$sum_total_harga."', '0');";
        $res = DB::insert($cmd);
        return $res;
    }
    //insert into table DETAIL_JUAL
    public function insert_list_penjualan($id_tr_jual){
        $cmd = "INSERT INTO `DETAIL_JUAL` ".
                "SELECT PRODUK_ID, JUAL_ID, QTY_JUAL, HARGA_JUAL, DISKON_JUAL FROM `MIRROR_DETAILJUAL` ".
                "WHERE JUAL_ID = '".$id_tr_jual."' ;";
        $res = DB::insert($cmd);
        $del_value = "DELETE FROM `MIRROR_DETAILJUAL` WHERE JUAL_ID = '".$id_tr_jual."';";
        $res = DB::delete($del_value);
        return $res;
    }
    public function get_data_table_penjualan($id_tr_jual){
        $cmd = "SELECT P.PRODUK_ID as `PRODUK_ID`, M.JUAL_ID as `JUAL_ID`, P.NAMA_PRODUK as `NAMA_PRODUK`, M.QTY_JUAL as `QTY_JUAL`, M.HARGA_JUAL as `HARGA_JUAL`, M.DISKON_JUAL as `DISKON_JUAL`, (M.QTY_JUAL * (M.HARGA_JUAL - M.DISKON_JUAL)) as `HARGA_TOTAL` FROM `MIRROR_DETAILJUAL` M, PRODUK P WHERE M.JUAL_ID = '".$id_tr_jual."' AND M.PRODUK_ID = P.PRODUK_ID;";
        $res = DB::select($cmd);
        if(isset($res) && count($res) > 0){
            return $res;
        }
        return null;
    }
    public function get_data_table_penjualan2($TR_JUAL){
        $cmd = "SELECT P.PRODUK_ID as `PRODUK_ID`, M.JUAL_ID as `JUAL_ID`, P.NAMA_PRODUK as `NAMA_PRODUK`, M.QTY_JUAL as `QTY_JUAL`, M.HARGA_JUAL as `HARGA_JUAL`, M.DISKON_JUAL as `DISKON_JUAL`, (M.QTY_JUAL * (M.HARGA_JUAL - M.DISKON_JUAL)) as `HARGA_TOTAL` FROM `MIRROR_DETAILJUAL` M, PRODUK P WHERE M.JUAL_ID = '".$TR_JUAL."' AND M.PRODUK_ID = P.PRODUK_ID;";
        $res = DB::select($cmd);
        if(isset($res) && count($res) > 0){
            return $res;
        }
    }


    public function view_insert_transaksi_penjualan(){
        $cmd = "SELECT * FROM `viewIDJualRetur`";
        $res = DB::select($cmd);
        if(isset($res) && count($res) > 0){
            return $res;
        }
        return null;
    }

    public function id_cust_view(){
        $cmd = "SELECT * FROM CUSTOMER;";
        $res = DB::select($cmd);
        if(isset($res) && count($res) > 0){
            return $res;
        }
        return null;
    }




    //produk mentah
    public function get_data_produkmentah(){
        $cmd = "SELECT * FROM PRODUK_MENTAH;";
        $res = DB::select($cmd);
        if(isset($res) && count($res) > 0){
            return $res;
        }
        return null;
    }
    public function get_data_jenisprodukmentah(){
        $cmd = "SELECT JENIS_PRODUK FROM PRODUK_MENTAH GROUP BY JENIS_PRODUK;";
        $res = DB::select($cmd);
        if(isset($res) && count($res) > 0){
            return $res;
        }
        return null;
    }
    public function get_detail_produkmentah($id_mentah){
        $cmd = "SELECT * FROM PRODUK_MENTAH WHERE MENTAH_ID = '".$id_mentah."';";
        $res = DB::select($cmd);
        if(isset($res) && count($res) > 0){
            return $res;
        }
        return null;
    }
    public function update_produkmentah($id_mentah, $idkonversi, $namamentah, $jenismentah, $jumlah, $expproduk){
        $cmd = "UPDATE `PRODUK_MENTAH` SET `NAMA_PRODUK`='".$namamentah."',`JENIS_PRODUK`='".$jenismentah."',`JML_PRODUK`=".$jumlah.",`EXPIRED_PRODUK`='".$expproduk."' WHERE MENTAH_ID = '".$id_mentah."';";
        // dd($cmd);
        $res = DB::update($cmd);
        return $res;
    }
    public function insert_produkmentah($nama_produk, $jenis_produk, $jumlah, $exp_produk){
        $cmd = "INSERT INTO `PRODUK_MENTAH`(`MENTAH_ID`, `KONVERSI_ID`, `NAMA_PRODUK`, `JENIS_PRODUK`, `JML_PRODUK`, `EXPIRED_PRODUK`, `MENTAH_DELETE`) VALUES ('','','".$nama_produk."','".$jenis_produk."',".$jumlah.",date('".$exp_produk."') ,'0')";
        $res = DB::insert($cmd);
        return $res;
    }

    //produk jadi
    public function get_data_produkjadi(){
        $cmd = "SELECT * FROM PRODUK;";
        $res = DB::select($cmd);
        if(isset($res) && count($res) > 0){
            return $res;
        }
        return null;
    }
    public function get_detail_produkjadi($id_jadi){
        $cmd = "SELECT * FROM PRODUK WHERE PRODUK_ID = '".$id_jadi."';";
        $res = DB::select($cmd);
        if(isset($res) && count($res) > 0){
            return $res;
        }
        return null;
    }
    public function get_status_produkjadi($id_jadi){
        $cmd = "SELECT STATUS_PRODUK FROM PRODUK GROUP BY STATUS_PRODUK;";
        $res = DB::select($cmd);
        if(isset($res) && count($res) > 0){
            return $res;
        }
        return null;
    }
    public function update_produkjadi($id_pjadi, $namaproduk, $jenis_pjadi, $harga_produk, $jumlah_produk, $status_produk, $expproduk, $tgl_terima){
        $cmd = "UPDATE `PRODUK` SET `NAMA_PRODUK`='".$namaproduk."',`JENIS_PRODUK`='".$jenis_pjadi."',`HARGA_PRODUK`=".$harga_produk.",`QUANTITY_PRODUK`=".$jumlah_produk.",`STATUS_PRODUK`='".$status_produk."',`EXPIRED_PRODUK`='".$expproduk."',`TGL_TERIMA`='".$tgl_terima."' WHERE PRODUK_ID = '".$id_pjadi."';";
        $res = DB::update($cmd);
        return $res;
    }
    public function get_data_statusprodukjadi(){
        $cmd = "SELECT STATUS_PRODUK FROM PRODUK GROUP BY STATUS_PRODUK;";
        $res = DB::select($cmd);
        if(isset($res) && count($res) > 0){
            return $res;
        }
        return null;
    }
    public function get_data_jenisproduk(){
        $cmd = "SELECT JENIS_PRODUK FROM PRODUK GROUP BY JENIS_PRODUK;";
        $res = DB::select($cmd);
        if(isset($res) && count($res) > 0){
            return $res;
        }
        return null;
    }
    //insert produk jadi
    public function insert_produkjadi($namaproduk, $jenis_produk, $harga_produk, $jumlah, $status_produk, $expproduk, $tgl_terima){
        $cmd = "INSERT INTO `PRODUK`(`PRODUK_ID`, `NAMA_PRODUK`, `JENIS_PRODUK`, `HARGA_PRODUK`, `QUANTITY_PRODUK`, `STATUS_PRODUK`, `EXPIRED_PRODUK`, `TGL_TERIMA`) VALUES ('','".$namaproduk."','".$jenis_produk."',".$harga_produk.",".$jumlah.",'".$status_produk."',date('".$expproduk."') ,'".$tgl_terima."')";
        $res = DB::insert($cmd);
        return $res;
    }
    //retur
    public function get_data_retur(){
        $cmd = "SELECT * FROM TRANSAKSI_RETUR;";
        $res = DB::select($cmd);
        if(isset($res) && count($res) > 0){
            return $res;
        }
        return null;
    }

    //pegawai
    public function get_data_pegawai(){
        $cmd = "SELECT * FROM PEGAWAI WHERE PEGAWAI_DELETE = 0;";
        $res = DB::select($cmd);
        if(isset($res) && count($res) > 0){
            return $res;
        }
        return null;
    }
    public function get_data_pegawai_byid($id_pegawai){
        $cmd = "SELECT * FROM PEGAWAI WHERE PEGAWAI_ID = '".$id_pegawai."' AND PEGAWAI_DELETE = 0;";
        $res = DB::select($cmd);
        if(isset($res) && count($res) > 0){
            return $res;
        }
        return null;
    }
    public function update_pegawai($id_pegawai, $nama_pegawai, $jobpegawai, $passpegawai){
        $check = DB::select("SELECT * FROM PEGAWAI WHERE PEGAWAI_ID = '".$id_pegawai."' AND PEGAWAI_DELETE = 0 AND PASSWORD_PEGAWAI = '".$passpegawai."';");
        $res = DB::select($check);
        if(isset($res) && count($res) > 0){
            $cmd = "UPDATE `PEGAWAI` SET `NAMA_PEGAWAI`='".$nama_pegawai."',`JOB_PEGAWAI`='".$jobpegawai."' WHERE PEGAWAI_ID = '".$id_pegawai."' AND `PASSWORD_PEGAWAI`='".$passpegawai."';";
            $res = DB::update($cmd);
            return $res;
        }
        return null;
    }
    public function update_passpegawai($id_pegawai, $nama_pegawai, $jobpegawai, $passpegawai, $passkonbarupegawai, $passbarupegawai){
        $check = DB::select("SELECT * FROM PEGAWAI WHERE PEGAWAI_ID = '".$id_pegawai."' AND PEGAWAI_DELETE = 0 AND PASSWORD_PEGAWAI = '".$passpegawai."';");
        $res = DB::select($check);
        if(isset($res) && count($res) > 0){
            if($passkonbarupegawai == $passkonbarupegawai){
                $cmd = "UPDATE `PEGAWAI` SET `NAMA_PEGAWAI`='".$nama_pegawai."',`JOB_PEGAWAI`='".$jobpegawai."',`PASSWORD_PEGAWAI`='".$passbarupegawai."' WHERE PEGAWAI_ID = '".$id_pegawai."' AND `PASSWORD_PEGAWAI`='".$passpegawai."';";
                $res = DB::update($cmd);
                return $res;
            }
        }
        return null;
    }
    public function insert_pegawai($nama_pegawai, $jobpegawai, $passpegawai){
        $cmd = "INSERT INTO `PEGAWAI`(`PEGAWAI_ID`, `NAMA_PEGAWAI`, `JOB_PEGAWAI`, `PASSWORD_PEGAWAI`) VALUES ('','".$nama_pegawai."','".$jobpegawai."','".$passpegawai."')";
        $res = DB::insert($cmd);
        return $res;
    }

    //CUSTOMER
    public function get_data_customer(){
        $cmd = "SELECT * FROM CUSTOMER WHERE CUST_DELETE = 0;";
        $res = DB::select($cmd);
        if(isset($res) && count($res) > 0){
            return $res;
        }
        return null;
    }
    public function get_data_customer_retur($split_id){
        $cmd = "SELECT T.JUAL_ID as `JUAL_ID`, T.RETUR_ID as `RETUR_ID`, T.CUST_ID as `CUST_ID`, C.NAMA_CUST as `NAMA_CUST` FROM CUSTOMER C, TRANSAKSI_JUAL T WHERE C.CUST_ID = '".$split_id[1]."' AND T.JUAL_ID = '".$split_id[0]."';";
        $res = DB::select($cmd);
        if(isset($res) && count($res) > 0){
            return $res;
        }
        return null;
    }
    public function get_data_customer_update($idcust){
        $cmd = "SELECT * FROM CUSTOMER WHERE CUST_ID = '".$idcust."';";
        $res = DB::select($cmd);
        if(isset($res) && count($res) > 0){
            return $res;
        }
        return null;
    }
    public function insert_customer($nama_customer, $status, $alamat_customer, $no_telp_customer){
        $cmd = "INSERT INTO `CUSTOMER`(`CUST_ID`, `NAMA_CUST`, `STATUS_CUST`, `ALAMAT_CUST`, `TELP_CUST`) VALUES ('','".$nama_customer."','".$status."','".$alamat_customer."','".$no_telp_customer."');";
        $res = DB::insert($cmd);
        return $res;
    }
    public function update_customer($idcust, $nama_cust,$status_customer, $alamat_cust, $no_telp_cust){
        $cmd = "UPDATE `CUSTOMER` SET `NAMA_CUST`='".$nama_cust."',`STATUS_CUST`='".$status_customer."',`ALAMAT_CUST`='".$alamat_cust."',`TELP_CUST`='".$no_telp_cust."' WHERE CUST_ID = '".$idcust."';";
        $res = DB::update($cmd);
        return $res;
    }
    public function delete_customer($idcust){
        $cmd = "UPDATE CUSTOMER SET CUST_DELETE = 1 WHERE CUST_ID = '".$idcust."';";
        $res = DB::update($cmd);
        return $res;
    }

    //PENYESUAIAN
    public function update_stock_produk_mentah($id_produk, $qty){
        $cmd = "UPDATE PRODUK_MENTAH SET JML_PRODUK = JML_PRODUK - ".$qty." WHERE MENTAH_ID = '".$id_produk."';";
        $res = DB::update($cmd);
        return $res;
    }

    public function update_stock_produk_jadi($id_produk, $qty){
        $cmd = "UPDATE PRODUK SET JML_PRODUK = JML_PRODUK - ".$qty." WHERE PRODUK_ID = '".$id_produk."';";
    }
}
