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

Route::get('/landing', function () {
    return view('layouts-landingPage.master');
});
// Route::get('/dashboard-admin', function () {
//     return view('layouts-adminPage.master');
// });
Route::get('/signin','AuthController@login')->name('signin');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');

Route::group(['middleware' => ['auth','revalidate','CekLoginMiddleware']],function(){
Route::get('/dashboard-admin','DashboardController@dashboard')->name('dashboard-admin');

    //Route Guru
Route::get('/guru', 'GuruController@index')->name('guru');
Route::get('/guru/create', 'GuruController@create');
Route::post('/guru/store', 'GuruController@store');
Route::get('/guru/detail/{id}', 'GuruController@show');
Route::get('/guru/edit/{id}', 'GuruController@edit');
Route::put('/guru/update/{id}', 'GuruController@update');
Route::get('/guru/hapus/{id}', 'GuruController@destroy');

//Route Siswa
Route::get('/siswa', 'SiswaController@index')->name('siswa');
Route::get('/siswa/create', 'SiswaController@create');
Route::post('/siswa/store', 'SiswaController@store');
Route::get('/siswa/detail/{id}', 'SiswaController@show');
Route::get('/siswa/edit/{id}', 'SiswaController@edit');
Route::put('/siswa/update/{id}', 'SiswaController@update');
Route::get('/siswa/hapus/{id}', 'SiswaController@destroy');
Route::get('/siswa/cari','SiswaController@cari');

//Route walimurid
Route::get('/walimurid', 'WaliMuridController@index')->name('guru');
Route::get('/walimurid/create', 'WaliMuridController@create');
Route::post('/walimurid/store', 'WaliMuridController@store');
Route::get('/walimurid/detail/{id}', 'WaliMuridController@show');
Route::get('/walimurid/edit/{id}', 'WaliMuridController@edit');
Route::put('/walimurid/update/{id}', 'WaliMuridController@update');
Route::get('/walimurid/hapus/{id}', 'WaliMuridController@destroy');

//Route Kelas
Route::get('/kelas', 'KelasController@index')->name('kelas');
Route::get('/walimurid/create', 'walimuridController@create');
Route::post('/walimurid/store', 'walimuridController@store');
Route::get('/walimurid/edit/{id}', 'walimuridController@edit');
Route::put('/walimurid/update/{id}', 'walimuridController@update');
Route::get('/walimurid/hapus/{id}', 'walimuridController@destroy');

//tentang
Route::get('/tentang', 'TentangController@index')->name('tentang');
Route::get('/walimurid/create', 'walimuridController@create');
Route::post('/walimurid/store', 'walimuridController@store');
Route::get('/walimurid/edit/{id}', 'walimuridController@edit');
Route::put('/walimurid/update/{id}', 'walimuridController@update');
Route::get('/walimurid/hapus/{id}', 'walimuridController@destroy');

//prestasi
Route::get('/prestasi', 'PrestasiController@index')->name('prestasi');
Route::get('/walimurid/create', 'walimuridController@create');
Route::post('/walimurid/store', 'walimuridController@store');
Route::get('/walimurid/edit/{id}', 'walimuridController@edit');
Route::put('/walimurid/update/{id}', 'walimuridController@update');
Route::get('/walimurid/hapus/{id}', 'walimuridController@destroy');

//program
Route::get('/program', 'ProgramController@index')->name('program');
Route::get('/walimurid/create', 'walimuridController@create');
Route::post('/walimurid/store', 'walimuridController@store');
Route::get('/walimurid/edit/{id}', 'walimuridController@edit');
Route::put('/walimurid/update/{id}', 'walimuridController@update');
Route::get('/walimurid/hapus/{id}', 'walimuridController@destroy');

});
