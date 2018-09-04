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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// categories
Route::get('/categories', 'CategoryController@index');
Route::get('categories/{id}/objects', 'CategoryController@ShowObjects');

// objects
Route::get('/objects', 'ObjectController@index');
Route::get('objects/{id}/details', 'ObjectController@view');

// koffer
Route::get('objects/{id}', 'suitcaseController@getobject');
Route::get('/addobject', 'suitcaseController@addobject');
Route::get('suitcase', 'suitcaseController@getsuitcase');
