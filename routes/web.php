<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'GuestController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/entries/create', 'EntryController@create')->name('crearEntrada');
Route::post('/entries', 'EntryController@store')->name('entries');
Route::get('/entries/{entryBySlug}', 'GuestController@show')->name('entry');
//->middleware('can:update,entry');
Route::get('/entries/{entry}/edit', 'EntryController@edit')->name('editEntry');
Route::put('/entries/{entry}', 'EntryController@update')->name('updateEntry');
Route::get('/users/{user}', 'UserController@show')->name('showUser');

