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
    public function get_data_pegawai(){
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
        $cmd = "SELECT format(SUM(TOTAL_RETUR),'.') as `count_retur` FROM `TRANSAKSI_RETUR`;";
        $res = DB::select($cmd);
        if(isset($res) && count($res) > 0){
            return $res;
        }
        return null;
    }

    //GET_DATA_PENJUALAN
    public function get_data_penjualan(){
        $cmd = "SELECT T.CUST_ID as `ID_Customer`, P.NAMA_PRODUK as `Nama_Produk`, P.HARGA_PRODUK as `Harga_Jual`, T.JML_PRODUK as `Jumlah_Produk`, T.TOTAL_JUAL as `Total_Jual` ".
                "FROM TRANSAKSI_JUAL T, PRODUK P, DETAIL_JUAL DJ ".
                "WHERE T.JUAL_ID = DJ.JUAL_ID AND DJ.PRODUK_ID = P.PRODUK_ID;";
        $res = DB::select($cmd);
        if(isset($res) && count($res) > 0){
            return $res;
        }
        return null;
    }
}
