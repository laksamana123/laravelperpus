<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', 'user_controller@register');
Route::post('login', 'user_controller@login');
Route::get('user', 'user_controller@getAuthenticatedUser')->middleware('jwt.verify');

Route::post('/simpan_anggota', 'anggota_controller@store');
Route::put('/ubah_anggota/{id}', 'anggota_controller@update');
Route::delete('/hapus_anggota/{id}', 'anggota_controller@destroy');
Route::get('/tampil_anggota', 'anggota_controller@tampil_anggota');

Route::post('/simpan_buku', 'buku_controller@store');
Route::put('/ubah_buku/{id}', 'buku_controller@update');
Route::delete('/hapus_buku/{id}', 'buku_controller@destroy');
Route::get('/tampil_buku', 'buku_controller@tampil_buku');
