<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index')->name('index');

Route::get('/items', 'ItemController@index')->name('items.index');
Route::post('/items', 'ItemController@store')->name('items.store');
Route::get('/items/{item}', 'ItemController@show')->name('items.show');
Route::patch('/items/{item}', 'ItemController@update')->name('items.update');
Route::delete('/items/{item}', 'ItemController@destroy')->name('items.destroy');
