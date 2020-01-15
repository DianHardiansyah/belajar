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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/belajar', function () {
    echo"Belajar PHP.Tulisan ini di tampilkan oleh DIAN ";
});


Route::get('/belajar1', function () {
    echo" HELLO WORD " ;
});


Route::get('/belajar2', function () {
    echo" HELLO WORD DIAN ";
});

Route::get('/about', function () {
    return view('about');
});
