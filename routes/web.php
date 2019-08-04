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



Route::get('/', 'HomeController@index')->name('index');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/apropos', 'HomeController@apropos')->name('apropos');
Route::get('/services', 'HomeController@services')->name('services');
Route::get('/equipes', 'HomeController@equipes')->name('equipes');
Route::get('/actualites', 'HomeController@actualites')->name('actualites');
Route::get('/offres', 'HomeController@offres')->name('offres');