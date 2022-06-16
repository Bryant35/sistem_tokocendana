<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CendanaController;

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

// TAB TOKO
Route::get('/transaksijual', 'App\Http\Controllers\CendanaController@transaksi_penjualan');

Route::get('/konversi', function () {
    return view('konversi');
});

Route::get('/insertcustbeli', 'App\Http\Controllers\CendanaController@view_insert_transaksi_penjualan');
// Route::get('/insertpembeli', function () {
//     return view('insertcustbeli');
// });

Route::POST('/inserttransaksijual', 'App\Http\Controllers\CendanaController@data_insert_transaksi_penjualan');

// Route::get('/updatetransaksijual', function () {
//     return view('updatetransjual');
// });

Route::POST('/insert_mirror', 'App\Http\Controllers\CendanaController@insert_mirror');
Route::GET('/deletelistpenjualan', 'App\Http\Controllers\CendanaController@delete_list_penjualan');
Route::GET('/insertlistpenjualan', 'App\Http\Controllers\CendanaController@insert_list_penjualan');
Route::POST('/updatetransaksijual', 'App\Http\Controllers\CendanaController@update_transaksi_penjualan');
Route::POST('/delrow', 'App\Http\Controllers\CendanaController@delete_mirror_detailjual');

Route::get('/deletetransaksijual', function () {
    return view('deletetransjual');
});

Route::get('/updatepembeli', function () {
    return view('updatecustbeli');
});

Route::get('/deletepembeli', function () {
    return view('deletecustbeli');
});

Route::POST('/detailpenjualan', 'App\Http\Controllers\CendanaController@view_detail_transaksi');

Route::get('/penyesuaistok', function () {
    return view('penyesuaistok');
});

Route::get('/updatepenyesuaistok', 'App\Http\Controllers\CendanaController@tampilan_list_produk_mentah');
Route::POST('/penyesuaianprodukmentah', 'App\Http\Controllers\CendanaController@update_stock_produk_mentah');
Route::get('/updatepenyesuaistokjadi', 'App\Http\Controllers\CendanaController@tampilan_list_produk_jadi');


//PEGAWAI
Route::get('/pegawai', 'App\Http\Controllers\CendanaController@view_pegawai');

Route::get('/insertpegawai', function () {
    return view('insertpegawai');
});
Route::POST('/pegawaiinsert', 'App\Http\Controllers\CendanaController@data_insert_pegawai');
Route::POST('/updatepegawai', 'App\Http\Controllers\CendanaController@view_update_pegawai');
Route::post('/updatedatapegawai', 'App\Http\Controllers\CendanaController@update_pegawai');
Route::get('/deletepegawai', function () {
    return view('deletepegawai');
});

// Route::get('/transaksijual', function () {
//     return view('transaksipenjualan');
// });

// Route::get('/transaksijual2', function () {
//     return view('transaksipenjualan2');
// });





Route::get('/retur', 'App\Http\Controllers\CendanaController@view_retur');
Route::POST('/insertretur', 'App\Http\Controllers\CendanaController@insert_retur');

Route::get('/customerretur', function () {
    return view('updatecustretur');
});

Route::get('/transaksiretur', function () {
    return view('updatetransretur');
});

Route::get('/deletetransaksiretur', function () {
    return view('deletetransretur');
});

Route::POST('/detailretur', 'App\Http\Controllers\CendanaController@view_detail_retur');

Route::get('/produkmentah', 'App\Http\Controllers\CendanaController@view_produk_mentah');
Route::POST('/detailmentah', 'App\Http\Controllers\CendanaController@detail_produk_mentah');
Route::POST('/runupdatementah', 'App\Http\Controllers\CendanaController@update_produkmentah');

Route::get('/insertprodukmentah', 'App\Http\Controllers\CendanaController@view_insert_produk_mentah');
Route::POST('/insertmentah', 'App\Http\Controllers\CendanaController@insert_produk_mentah');
Route::POST('/viewdetailjadi', 'App\Http\Controllers\CendanaController@view_detail_produk_jadi');
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
    return view('laporan_returproduk');
});

Route::get('/laporanpenjualan', function () {
    return view('laporan_penjualan');
});

Route::get('/insertcustomerretur', 'App\Http\Controllers\CendanaController@view_insert_customer_retur');

Route::POST('/inserttransaksiretur', 'App\Http\Controllers\CendanaController@view_insert_transaksi_retur');

Route::get('/produkjadi', 'App\Http\Controllers\CendanaController@view_produk_jadi');

Route::get('/insertprodukjadi', 'App\Http\Controllers\CendanaController@view_insert_produk_jadi');

Route::get('/deleteprodukjadi', function () {
    return view('deletejadi');
});

Route::POST('/updateprodukjadi', 'App\Http\Controllers\CendanaController@update_produk_jadi');
Route::POST('/insertjadi', 'App\Http\Controllers\CendanaController@insert_produk_jadi');

Route::get('/customer', 'App\Http\Controllers\CendanaController@view_customer');
Route::POST('/detail-customer', 'App\Http\Controllers\CendanaController@view_update_customer');


Route::get('/insertcustomer', function () {
    return view('insertcust');
});
Route::POST('/insert-customer', 'App\Http\Controllers\CendanaController@insert_customer');
Route::POST('/update-customer', 'App\Http\Controllers\CendanaController@update_customer');
Route::POST('/deletecust', 'App\Http\Controllers\CendanaController@delete_customer');
// Route::get('/updatecustomer', function () {
//     return view('updatecust');
// });






//POST
Route::post('/checklogin','App\Http\Controllers\CendanaController@Login_Page');


//GET data
Route::get('/home','App\Http\Controllers\CendanaController@data_home');

