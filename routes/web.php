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

/*user*/

Route::get('/adminAnou', function () {
    return view('auth.login');
});
Route::resource('messages','MessageController');
Route::resource('news','NewsController');
Route::get('/', 'HomeController@index')->name('index');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/apropos', 'HomeController@apropos')->name('apropos');
Route::get('/services', 'HomeController@services')->name('services');

Route::get('/actualites_home', 'NewsController@actualites_home')->name('actualites');
Route::get('/offres', 'HomeController@offres')->name('offres');
Route::post('contact', 'MessageController@store')->name('messages.store');
Route::post('candidatures', 'CandidatureController@store')->name('candidatures.store');




Auth::routes();

Route::get('/admin',['middleware'=>'auth','uses'=>'HomeController@admin'] )->name('admin');
Route::get('admin/home_admin',['middleware'=>'auth','uses'=>'HomeController@home_admin'] )->name('home_admin');
Route::get('admin/offres_admin',['middleware'=>'auth','uses'=>'HomeController@offres_admin'] )->name('offres_admin');
Route::get('admin/news_admin',['middleware'=>'auth','uses'=>'HomeController@news_admin'] )->name('news_admin');
Route::get('admin/candidatures_admin',['middleware'=>'auth','uses'=>'HomeController@candidatures_admin'] )->name('candidatures_admin');
Route::get('admin/messages_admin',['middleware'=>'auth','uses'=>'HomeController@messages_admin'] )->name('messages_admin');
Route::post('admin/news_admin/create',['middleware'=>'auth','uses'=>'NewsController@store'] )->name('news_store');
Route::get('admin/index_news',['middleware'=>'auth','uses'=>'NewsController@index_news'] )->name('index_news');
Route::post('admin/offres_admin/create',['middleware'=>'auth','uses'=>'NewsController@store'] )->name('news_store');