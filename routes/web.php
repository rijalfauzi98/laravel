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


//route latihan
Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

// Route::get('blog', function () {
// 	return view('blog');
// });

Route::get('dosen', 'DosenController@index');

// Route::get('/pegawai/{nama}', 'PegawaiController@index');
// Route::get('/formulir', 'PegawaiController@formulir');
// Route::post('/formulir/proses', 'PegawaiController@proses');

// route blog
Route::get('/blog', 'BlogController@home');
Route::get('/blog/tentang', 'BlogController@tentang');
Route::get('/blog/kontak', 'BlogController@kontak');

//route CRUD
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');

//route LATIHAN 
Route::get('/user','UserController@index');
Route::get('/user/tambah','UserController@tambah');
Route::post('/user/store','UserController@store');
Route::get('/user/edit/{id}','UserController@edit');
Route::post('/user/update','UserController@update');
Route::get('/user/hapus/{id}','UserController@hapus');