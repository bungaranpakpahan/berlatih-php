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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/hello-laravel', function () {
//     echo "Ini adalah halaman baru <br>";
//     return 'Hello laravel';
// });

Route::get('/', function () {
	return view('index');
});

Route::get('form', function () {
	return view('form');
});

Route::post('welcome-back',function(){
    return view('welcome-back');
});