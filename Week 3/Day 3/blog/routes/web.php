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
	return view('adminlte.master');
});

Route::get('/items', function () {
	return view('items.create');
});

Route::get('/items', function () {
	return view('items.data.tables');
});

Route::get('/items', function () {
	return view('items.table');
});