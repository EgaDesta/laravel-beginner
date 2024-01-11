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
    return view('utama', [
        "nama" => "Ega Destaviano",
        "email" => "egadestavian@gmail.com",
        "gambar" => "ryan gosling(gweh bgt).jpg"
    ]);
});
Route::get('/blog', function () {
    return view('home1');
});
Route::get('/net', function () {
    return view('home2');
});
Route::get('/com', function () {
    return view('home3');
});
