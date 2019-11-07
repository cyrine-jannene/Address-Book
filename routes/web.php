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

Route::view('/', 'home');

Route::get('contact_us', 'ContactFormController@create');
Route::post('contact_us', 'ContactFormController@store');
Route::view('about', 'about');
Route::get('contacts','ContactsController@list')->middleware('auth');
Route::post('contacts','ContactsController@store')->middleware('auth');
Route::get('contacts/create','ContactsController@create')->middleware('auth');
Route::get('contacts/{contact}','ContactsController@show')->middleware('auth');
Route::get('contacts/{contact}/edit','ContactsController@edit')->middleware('auth');
Route::patch('contacts/{contact}','ContactsController@update')->middleware('auth');
Route::delete('contacts/{contact}','ContactsController@destroy')->middleware('auth');


//Route::get('contacts/search','ContactsController@search');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/search', 'ContactsController@search');