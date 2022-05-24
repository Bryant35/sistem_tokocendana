<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

// Route::get('/home', function () {
//     return view('landing_page');
// });

Route::get('/pegawai', function () {
    return view('master_pegawai');
});

Route::get('/insertpegawai', function () {
    return view('insertpegawai');
});

Route::get('/updatepegawai', function () {
    return view('updatepegawai');
});

Route::get('/deletepegawai', function () {
    return view('deletepegawai');
});

// Route::get('/transaksijual', function () {
//     return view('transaksipenjualan');
// });

Route::get('/konversi', function () {
    return view('konversi');
});

Route::get('/detailpenjualan', function () {
    return view('detail_penjualan');
});

Route::get('/penyesuaistok', function () {
    return view('penyesuaistok');
});

Route::get('/updatepenyesuaistok', function () {
    return view('update_penyesuaianstok');
});

Route::get('/updatepenyesuaistokjadi', function () {
    return view('update_penyesuaianstokjadi');
});

Route::get('/retur', function () {
    return view('retur');
});

Route::get('/customerretur', function () {
    return view('updatecustretur');
});

Route::get('/transaksiretur', function () {
    return view('updatetransretur');
});

Route::get('/deletetransaksiretur', function () {
    return view('deletetransretur');
});

Route::get('/detailretur', function () {
    return view('detailretur');
});

Route::get('/produkmentah', function () {
    return view('produkmentah');
});

Route::get('/updateprodukmentah', function () {
    return view('updatementah');
});

Route::get('/insertprodukmentah', function () {
    return view('insertmentah');
});

Route::get('/deleteprodukmentah', function () {
    return view('deletementah');
});

Route::get('/laporankonversistok', function () {
    return view('laporankonversistok');
});

Route::get('/laporanmasukproduk', function () {
    return view('laporan_masukproduk');
});

Route::get('/laporankeluarproduk', function () {
    return view('laporan_keluarproduk');
});

Route::get('/laporanreturproduk', function () {
    return view('laporanreturproduk');
});

Route::get('/laporanpenjualan', function () {
    return view('laporanpenjualan');
});

Route::get('/insertcustomerretur', function () {
    return view('insertcustretur');
});

Route::get('/inserttransaksiretur', function () {
    return view('inserttransretur');
});

Route::get('/produkjadi', function () {
    return view('produkjadi');
});

Route::get('/insertprodukjadi', function () {
    return view('insertjadi');
});

Route::get('/deleteprodukjadi', function () {
    return view('deletejadi');
});

Route::get('/updateprodukjadi', function () {
    return view('updatejadi');
});

Route::get('/customer', function () {
    return view('customer');
});

Route::get('/customer', function () {
    return view('customer');
});

Route::get('/insertcustomer', function () {
    return view('insertcust');
});

Route::get('/updatecustomer', function () {
    return view('updatecust');
});

Route::get('/insertpembeli', function () {
    return view('insertcustbeli');
});

Route::get('/inserttransaksijual', function () {
    return view('inserttransjual');
});

Route::get('/updatepembeli', function () {
    return view('updatecustbeli');
});

Route::get('/updatetransaksijual', function () {
    return view('updatetransjual');
});

Route::get('/deletepembeli', function () {
    return view('deletecustbeli');
});

Route::get('/deletetransaksijual', function () {
    return view('deletetransjual');
});

//POST
Route::post('/checklogin','App\Http\Controllers\CendanaController@Login_Page');


//GET data
Route::get('/home','App\Http\Controllers\CendanaController@data_home');
Route::get('/transaksijual', 'App\Http\Controllers\CendanaController@transaksi_penjualan');
