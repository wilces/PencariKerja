<?php

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

Route::get('/', 'HomeController@index');
Route::match(['get','post'], '/daftar', 'DaftarController@index');
Route::get('/pendaftarkerja', 'PendaftarController@index');
Route::get('/pendaftarkerja/detail/{id}', 'PendaftarController@detail');
Route::get('/tentang', 'TentangController@index');
Route::get('/contact', 'ContactController@index');