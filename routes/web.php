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

Route::get('/', 'Pendaftaran@index');
Route::post('/pendaftaran/storependaftarannpwpd', 'Pendaftaran@storependaftarannpwpd');
Route::post('/pendaftaran/getDataKelurahan', 'Kecamatan@getDataKelurahan');
Route::post('/pendaftaran/getDataKecamatan', 'Kecamatan@getDataKecamatan');
Route::post('/pendaftaran/getDataKota', 'Kecamatan@getDataKota');
Route::post('/pendaftaran/getDataKodePos', 'Kecamatan@getDataKodePos');
Route::post('/pendaftaran/ceknik', 'Pendaftaran@ceknik');
Route::post('/pendaftaran/getcomborekening', 'Pendaftaran@getComboRekening');
