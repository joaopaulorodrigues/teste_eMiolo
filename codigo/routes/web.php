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

Route::get('/', ['uses' => 'HomeController@index']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cadastrados', ['uses' => 'HomeController@cadastrados']);

Route::get('/navesSW', ['uses' => 'HomeController@navesSW']);