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
Route::get('/home', function () {
    return view('landing_page');
});

Route::get('/pegawai', function () {
    return view('master_pegawai');
});

Route::get('/transaksijual', function () {
    return view('transaksipenjualan');
});

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
