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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'MahasiswaController@index');
//Mahasiswa (Route dengan detail satu persatu)
Route::get('/mhs', 'MahasiswaController@index')->name('mhs.index');
Route::get('/mhs/list', 'MahasiswaController@mhs_list')->name('mhs_list');
Route::get('/mhs/create', 'MahasiswaController@create');
Route::post('/mhs/store', 'MahasiswaController@store');
Route::get('/mhs/edit/{nim}', 'MahasiswaController@edit');
Route::put('/mhs/update/{mahasiswa:nim}', 'MahasiswaController@update')->name('mhs.update');
Route::get('/mhs/delete/{mahasiswa:nim}', 'MahasiswaController@destroy')->name('mhs.delete');
//Prodi (Route Framework)
//Prodi (Route Framework)
Route::get('/prodi', 'ProdiController@index')->name('prodi.index');
Route::get('/prodi/list', 'ProdiController@prodi_list')->name('prodi.list');
Route::get('/prodi/create', 'ProdiController@create');
Route::post('/prodi/store', 'ProdiController@store');
Route::get('/prodi/edit/{kode_prodi}', 'ProdiController@edit');
Route::put('/prodi/update/{prodi:kode_prodi}', 'ProdiController@update')->name('prodi.update');
Route::get('/prodi/delete/{prodi:kode_prodi}', 'ProdiController@destroy')->name('prodi.delete');

