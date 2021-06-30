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



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => 'locale'], function () {
    Route::get('change/{lang}', 'FrontController@changeLang')->name('all.change');
    Route::get('/', function () {
        return view('welcome');
    });
});

Route::get('ajax', 'FrontController@index');
Route::get('all-data', 'FrontController@showAll')->name('cus.index');


//list post//bin
Route::prefix('posts')->group(function () {
    Route::get('/', 'PostController@index')->name('post.index');
    Route::get('/create', 'PostController@create')->name('post.create');
    Route::post('/store', 'PostController@store')->name('post.store');
    Route::get('/edit/{id}', 'PostController@edit')->name('post.edit');
    Route::post('/update/{id}', 'PostController@update')->name('post.update');
    Route::get('/destroy/{id}', 'PostController@destroy')->name('post.destroy');
});
