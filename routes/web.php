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

Route::get('/location/{location}', 'locationController@index');

Route::get('/location/{location}/categories/{categories}', 'locationController@categories');

Route::get('/location/{location}/rolls', 'locationController@rolls');

Route::get('/location/{location}/rolls/{type}', 'locationController@rollsType');
