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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'PagesController@getHome');
Route::get('/about', 'PagesController@getAbout');
Route::get('/contact', 'PagesController@getContact');

Route::post('/contact/submit', 'MessagesController@submit');
Route::get('/messages', 'MessagesController@getMessages');
Route::get('/todos', 'TodosController@index');
Route::resource('todo', 'TodosController');
Route::get('/todos/create', 'TodosController@create');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');