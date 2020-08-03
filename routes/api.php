<?php

use Illuminate\Http\Request;
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, PATCH, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization');
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

Route::get('mahasiswa','MahasiswaController@index');
Route::post('mahasiswa','MahasiswaController@create');
Route::put('/mahasiswa/{id}','MahasiswaController@update');
Route::delete('/mahasiswa/{id}','MahasiswaController@delete');
Route::get('get-mahasiswa','apicontroller@getMahasiswa');
Route::delete('delete/{id}','apicontroller@destroy');
Route::post('create','apicontroller@postMahasiswa');
Route::put('update/{id}','apicontroller@updateSiswa');