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
        $cmd = "SELECT format(SUM(TOTAL_RETUR),'.') as `count_retur` FROM `TRANSAKSI_RETUR`;";
        $res = DB::select($cmd);
        if(isset($res) && count($res) > 0){
            return $res;
        }
        return null;
    }

    //GET_DATA_PENJUALAN
    public function get_data_penjualan(){
        $cmd = "SELECT T.CUST_ID as `ID_Customer`, T.JUAL_ID as `ID_Jual`, P.NAMA_PRODUK as `Nama_Produk`, P.HARGA_PRODUK as `Harga_Jual`, T.JML_PRODUK as `Jumlah_Produk`, T.TOTAL_JUAL as `Total_Jual` ".
                "FROM TRANSAKSI_JUAL T, PRODUK P, DETAIL_JUAL DJ ".
                "WHERE T.JUAL_ID = DJ.JUAL_ID AND DJ.PRODUK_ID = P.PRODUK_ID;";
        $res = DB::select($cmd);
        if(isset($res) && count($res) > 0){
            return $res;
        }
        return null;
    }
    public function get_detail_penjualan(){
        $cmd = "SELECT * FROM DETAIL_JUAL;";
        $res = DB::select($cmd);
        if(isset($res) && count($res) > 0){
            return $res;
        }
        return null;
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

    //produk jadi
    public function get_data_produkjadi(){
        $cmd = "SELECT * FROM PRODUK;";
        $res = DB::select($cmd);
        if(isset($res) && count($res) > 0){
            return $res;
        }
        return null;
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
        $cmd = "SELECT * FROM PEGAWAI;";
        $res = DB::select($cmd);
        if(isset($res) && count($res) > 0){
            return $res;
        }
        return null;
    }

    //CUSTOMER
    public function get_data_customer(){
        $cmd = "SELECT * FROM CUSTOMER;";
        $res = DB::select($cmd);
        if(isset($res) && count($res) > 0){
            return $res;
        }
        return null;
    }
}
