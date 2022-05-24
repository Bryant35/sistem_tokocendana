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

class CendanaController extends Controller
{
    public function Login_Page(Request $req){
        $idpegawai = $_POST['idpegawai'];
        $password = $req->input('password');
        // $req->input([
        //     'RememberMe' => 'accepted'
        // ]);

        $data = [
            'idpegawai' => $idpegawai,
            'password' => $password
        ];
        $user = new CendanaModel;
        $ceklogin = $user->isExist($idpegawai, $password);
        // die;
        if ($ceklogin == true){
            //2.a. Jika KETEMU, maka session LOGIN dibuat
            Session::flush();
            Session::put('login', $idpegawai);
            Session::put('pass', $password);

            // if($req->has('RememberMe')){
            //     $cekSession = Session::put('RememberMe', 'Yes');
            // }
            // else{
            //     // session_set_cookie_params(0);
            //     // session_start();
            //     $cekSession = Session::put('RememberMe', 'No');
            // }
            Session::flash('success', 'Login Success!');
            return redirect('/home');
        }else {
            //2.b. Jika TIDKA KETEMU, maka kembali ke LOGIN dan tampilkan PESAN
            Session::flash('error', 'Email or Password is Incorrect!');
            return redirect('/');
        }
    }

    public function data_home(){
        $user = new CendanaModel;
        $count_pegawai = $user->get_data_pegawai();
        $count_penjualan = $user->get_jumlah_penjualan();
        $count_retur = $user->get_jumlah_retur();
        return view('landing_page', compact('count_pegawai', 'count_penjualan', 'count_retur'));
    }

    public function transaksi_penjualan(){
        $user = new CendanaModel;
        $data_penjualan = $user->get_data_penjualan();
        // dd($data_penjualan);
        return view('transaksipenjualan', compact(['data_penjualan']));
    }
}
