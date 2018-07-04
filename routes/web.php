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


Route::get('/insert', 'InstruController@insert');
Route::post('/insert', 'InstruController@insertOne');

Route::get('/update', 'InstruController@update');
Route::post('/update', 'InstruController@updateOne');

Route::get('/stock', 'InstruController@stock');
Route::post('/stock', 'InstruController@stockAction');

Route::post('/delete', 'InstruController@deleteOne');


Route::get('/', 'InstruController@showAll');
