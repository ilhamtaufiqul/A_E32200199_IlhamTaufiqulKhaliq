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

Route::get('/', function () {
    return view('welcome');
});
//minggu 3
Route::get('/hello', function () {
    return 'Hello World';
});
Route::get('/belajar', function () {
    echo '<h1>Hello World</h1>';
    echo '<p>Sedang Belajar Laravel</p>';
});
Route::get('page/{nomor}', function ($nomor) {
    return 'Ini Halaman Ke-' . $nomor;
});
Route::get('/gambar', function () {
    return view('gambar');
});
//minggu 4
Route::get('/user', 'DetailProfileController@index');
Route::resource('user', 'DetailProfileController');
Route::get("/home", function(){
    return view("homepage");
});