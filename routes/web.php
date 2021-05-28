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

Route::get('/', function () {return view('welcome');});
Route::get('/pages/home', 'MainController@home')->name('home');
Route::get('/description/{id}', 'MainController@description')->name('description');
Route::get('/add', 'MainController@add')->name('add');
Route::post('/add_function', 'MainController@add_function')->name('add_function');
Route::get('/edit/{id}', 'MainController@edit')->name('edit');
Route::post('/edit_function/{id}', 'MainController@edit_function')->name('edit_function');
Route::get('/delete/{id}', 'MainController@delete')->name('delete');
