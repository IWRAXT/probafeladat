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

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/vue', function () {
    return view('gyakVUE');
});

Route::resource('/people/index', 'PersonController');

//Route::get('/people/index','PersonController@index');


Route::post('/people','PersonController@store');
Route::get('/people/create','PersonController@create');

Route::get('/people/{id}/edit','PersonController@edit');
Route::post('/people/{id}/update','PersonController@update');
Route::post('/people/{id}','PersonController@destroy');


