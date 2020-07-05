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

// Menampilkan halaman index
Route::get('/', function () {
    return view('index');
});

Route::get('/artikel', 'ArticleController@index'); // Menampilkan daftar artikel
Route::get('/artikel/create', 'ArticleController@create'); // Menampilkan form
Route::post('/artikel', 'ArticleController@store'); // Menyimpan artikel baru
Route::get('/artikel/{id}', 'ArticleController@show'); // Menampilkan detail artikel
Route::get('/artikel/edit/{id}', 'ArticleController@edit'); // Menampilkan form edit artikel
Route::put('/artikel/{id}', 'Articlecontroller@update'); // Menyimpan artikel (update)
Route::delete('/artikel/{id}', 'ArticleController@destroy'); // Menghapus artikel dgn id tertentu
