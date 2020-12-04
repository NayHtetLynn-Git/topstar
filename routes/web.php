<?php

use Illuminate\Support\Facades\Auth;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/township', 'TownshipController@index')->name('township.index');

Route::get('/township/create', 'TownshipController@create')->name('township.create');

Route::post('/township/store', 'TownshipController@store')->name('township.store');

Route::get('/township/edit/{id}', 'TownshipController@edit')->name('township.edit');

Route::post('/township/update/{id}','TownshipController@update')->name('township.update');

Route::get('/township/delete/{id}','TownshipController@destroy')->name('township.delete');

Route::get('/shop/create', 'ShopController@create')->name('shop.create');

Route::post('/shop/store', 'ShopController@store')->name('shop.store');

Route::get('/shop', 'ShopController@index')->name('shop.index');

Route::get('/getRegNumber','ShopController@shopRegNumber');

Route::get('/print', 'PrintController@index')->name('print.index');
