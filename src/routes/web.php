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

use Inertia\Inertia;


Route::get('/' , 'TestController@list');

Route::get('/about' , 'TestController@about');

Route::get('/register' , 'TestController@register');

Route::post('/register' , 'TestController@store');