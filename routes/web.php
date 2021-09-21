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

// route bawaan default laravel
Route::get('/', function () {
    return view('welcome');
});

Route::get('index', function () {
    return view('index');
});

Route::get('dashboard', function () {
    return view('dashboard');
});

Route::get('login', function () {
    return view('login');
});
//----------tes tamppilan budget---
Route::get('/budget','BudgetController@index');
Route::get('/budget/table','BudgetController@table');
Route::get('/budget/profile','BudgetController@profile');
Route::post('/budget/tambah','BudgetController@tambah');
Route::put('/budget/edit/{id}','BudgetController@edit');
Route::post('/budget/update','BudgetController@update');
Route::get('/budget/hapus/{id}','BudgetController@hapus');

//route CRUD
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');

//route master tipe
Route::get('/master/tipe','TipeController@index');
Route::get('/master/tipe/tambah','TipeController@tambah');
Route::post('/master/tipe/store','TipeController@store');
Route::get('/master/tipe/edit/{id}','TipeController@edit');
Route::post('/master/tipe/update','TipeController@update');
Route::get('/master/tipe/hapus/{id}','TipeController@hapus');

//route master klasifikasi
Route::get('/master/klas','KlasifController@index');
Route::get('/master/klas/tambah','KlasifController@tambah');
Route::post('/master/klas/store','KlasifController@store');
Route::get('/master/klas/edit/{id}','KlasifController@edit');
Route::post('/master/klas/update','KlasifController@update');
Route::get('/master/klas/hapus/{id}','KlasifController@hapus');

//route master klasifikasi
Route::get('/transaksi/rencana','RencanaController@index');
Route::get('/transaksi/rencana/tambah','RencanaController@tambah');
Route::post('/transaksi/rencana/store','RencanaController@store');
Route::get('/transaksi/rencana/edit/{id}','RencanaController@edit');
Route::post('transaksi/rencana/update','RencanaController@update');
Route::get('/transaksi/rencana/hapus/{id}','RencanaController@hapus');

// Route::get('/transaksi/rencana/tambah','RencanaController@mtipe');
// Route::get('/transaksi/rencana/tambah','RencanaController@mklas');


