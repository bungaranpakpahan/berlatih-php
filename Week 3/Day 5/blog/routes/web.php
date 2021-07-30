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

    // Route::get('/',function(){
    //     view('index');
    // });


    Route::get('/','CastController@index');
    Route::get('/cast/create','CastController@create')->name('create');
    Route::post('/cast','CastController@store');
    Route::get('/cast/delete/{id}','CastController@delete')->name('delete');
    Route::get('/cast/edit/{id}','CastController@edit');
    Route::put('/cast/{id}','CastController@update');

    


    // Route::get('/cast/show','CastController@show');