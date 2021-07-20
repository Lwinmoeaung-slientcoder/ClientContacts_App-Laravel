<?php

use Illuminate\Support\Facades\Mail;

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

Route::get('/home', 'HomeController@dashboardtable')->name('home');
Route::get('logout', 'Auth\LoginController@logout');


/*
|--------------------------------------------------------------------------
| For Dashboard
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', 'HomeController@dashboardtable') ;
/*
|--------------------------------------------------------------------------
| For Contacts
|--------------------------------------------------------------------------
*/
Route::get('/contacts', 'ContactsController@index');
Route::get('/create/contacts', 'ContactsController@create');
Route::get('/contact/profile/{id}', 'ContactsController@show');
// Route::get('/create/projects', 'ContactsController@create');
Route::get('/contact/mail/{id}', 'ContactsController@contactmail');
Route::post('/contact/profile/{id}', 'ContactsController@update');
Route::post('/create/contacts', 'ContactsController@store');

/*
|--------------------------------------------------------------------------
| For Search
|--------------------------------------------------------------------------
*/
Route::get('/search/contacts', 'HomeController@search');


/*
|--------------------------------------------------------------------------
| For User Accounts Show
|--------------------------------------------------------------------------
*/
Route::get('/user/accounts', 'HomeController@allusersview');
Route::get('/user/delete/', 'HomeController@userdelete');
Route::get('/user/update/{id}', 'HomeController@usereditview');
Route::post('/user/update/{id}', 'HomeController@userupdate');

/*
|--------------------------------------------------------------------------
| For Contact's Project
|--------------------------------------------------------------------------
*/
Route::get('projects', 'ProjectController@index');
Route::get('/create/projects', 'ProjectController@createview');
Route::post('/create/projects', 'ProjectController@create');
Route::get('/projects/detail/{id}', 'ProjectController@show');
Route::post('/projects/detail/{id}', 'ProjectController@update');
Route::get('/projects/pdf/{id}', 'ProjectController@pdf');
/*
|--------------------------------------------------------------------------
| For Send Mail
|--------------------------------------------------------------------------
*/

Route::get('/mail', 'MailController@index')->name('mail');
Route::post('/mail', 'MailController@sendmail');
