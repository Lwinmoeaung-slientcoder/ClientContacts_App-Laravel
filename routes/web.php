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
Route::get('logout', 'Auth\LoginController@logout');

/*
|--------------------------------------------------------------------------
| For Contacts
|--------------------------------------------------------------------------
*/
Route::get('/contacts', 'ContactsController@index');
Route::get('/create/contacts', 'ContactsController@create');
Route::post('/create/contacts', 'ContactsController@store');