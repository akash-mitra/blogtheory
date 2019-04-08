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

Auth::routes(['register' => false]);
Route::get('/', 'HomeController@welcome')->name('welcome');
Route::get('/signup', 'SignupController@showSignUp')->name('signup');
Route::post('/charge', 'SignupController@onBoard')->name('onboard');
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('/repository/templates', 'RepositoryController@templates')->name('repo.templates.index');
