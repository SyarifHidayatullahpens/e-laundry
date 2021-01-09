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

Route::get('/dashboard', function () {
    return view('adminDashboard.v_index');
});

Route::get('/dashboard/karyawan', function () {
    return view('adminDashboard.v_karyawan');
});

Route::get('/', 'PagesController@home');
Route::get('/login', 'PagesController@login');
Route::get('/', 'CommentController@index');
Route::post('/', 'CommentController@store');

Route::get('/dashboard/absensi', function () {
    return view('adminDashboard.v_absensi');
});
Route::get('/dashboard/konsumen', function () {
    return view('adminDashboard.v_konsumen');
});
Route::get('/dashboard/transaksi', function () {
    return view('adminDashboard.v_transaksi');
});
Route::get('/dashboard/riwayat-transaksi', function () {
    return view('adminDashboard.v_riwayatTransaksi');
});
Route::get('/dashboard/pengeluaran', function () {
    return view('adminDashboard.v_pengeluaran');
});
Route::get('/dashboard/master', function () {
    return view('adminDashboard.v_master');
});



