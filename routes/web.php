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

Route::get('/addnew', function () {
    return view('addnew');
});

Route::post('store','UserController@store');
Route::get('/list',"UserController@getData");

Route::get('/list/{id}',"UserController@edit");
Route::get('/list_destroy/{id}',"UserController@destroy");
Route::get('/show/{id}',"UserController@show");
Route::post('/list_update/{id}',"UserController@update");
Route::get('/list_paginate',"UserController@index");
Route::get('/search',"UserController@search");
Route::get('export', 'UserController@export');
Route::get('sort', 'UserController@sort');