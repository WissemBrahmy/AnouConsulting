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

Route::get('/admin/login', 'Auth\LoginController@showLoginForm');

Route::get('/admin/register', 'Auth\RegisterController@showRegistrationForm')->name('reg_admin');
Route::resource('messages','MessageController');

Route::resource('news','NewsController');
Route::resource('candidature','CandidatureController');
Route::get('/', 'HomeController@index')->name('index');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/apropos', 'HomeController@apropos')->name('apropos');
Route::get('/services', 'HomeController@services')->name('services');

Route::get('/actualites_home', 'NewsController@actualites_home')->name('actualites');
Route::get('/offres', 'OffreController@offres_home')->name('offres');
Route::get('/offres/postule/{id}', 'OffreController@postule_offres')->name('postule_offres');


Route::post('contact', 'MessageController@store')->name('messages.store');
Route::post('candidatures', 'CandidatureController@store')->name('candidatures.store');
Route::post('postulation', 'PostulationController@store')->name('postulation.store');
Route::get("offre/recherche","HomeController@Listeoffres")->name('search');


Auth::routes();

Route::get('/admin',['middleware'=>'auth','uses'=>'HomeController@home_admin'] )->name('admin');
Route::get('admin/home_admin',['middleware'=>'auth','uses'=>'HomeController@home_admin'] )->name('home_admin');
Route::get('admin/offres_admin',['middleware'=>'auth','uses'=>'HomeController@offres_admin'] )->name('offres_admin');
Route::get('admin/news_admin',['middleware'=>'auth','uses'=>'HomeController@news_admin'] )->name('news_admin');
Route::get('admin/candidatures_admin',['middleware'=>'auth','uses'=>'HomeController@candidatures_admin'] )->name('candidatures_admin');
Route::get('admin/messages_admin',['middleware'=>'auth','uses'=>'HomeController@messages_admin'] )->name('messages_admin');
Route::post('admin/news_admin/create',['middleware'=>'auth','uses'=>'NewsController@store'] )->name('news_store');
Route::get('admin/index_news',['middleware'=>'auth','uses'=>'NewsController@index_news'] )->name('index_news');
Route::post('admin/offres_admin/create',['middleware'=>'auth','uses'=>'OffreController@store'] )->name('offres_store');
Route::get('admin/index_offres',['middleware'=>'auth','uses'=>'OffreController@index_offres'] )->name('index_offres');
Route::delete('admin/offre/{id}',['middleware'=>'auth','uses'=>'OffreController@destroy'])->name('offres_destroy');
Route::delete('admin/news/{id}',['middleware'=>'auth','uses'=>'NewsController@destroy'])->name('news_destroy');
Route::put('admin/news/update/{id}',['middleware'=>'auth','uses'=>'NewsController@update'])->name('news_update');
Route::get('admin/news/edit/{id}',['middleware'=>'auth','uses'=> 'NewsController@edit_news'])->name('edit_news');

Route::put('admin/offre/update/{id}',['middleware'=>'auth','uses'=>'OffreController@update'])->name('offres_update');
Route::get('admin/offres/edit/{id}',['middleware'=>'auth','uses'=> 'OffreController@edit_offre'])->name('edit_offre');
Route::get('admin/offres/candidatures/{id}',['middleware'=>'auth','uses'=> 'PostulationController@show_candidatures'])->name('show_candidatures');
Route::get('admin/index_candidatures',['middleware'=>'auth','uses'=>'CandidatureController@index_candidatures'] )->name('index_candidatures');
Route::delete('admin/candidature/{id}',['middleware'=>'auth','uses'=>'CandidatureController@destroy'])->name('candidatures_destroy');
Route::get('admin/index_messages',['middleware'=>'auth','uses'=>'MessageController@index_messages'] )->name('index_messages');
Route::delete('admin/messages/{id}',['middleware'=>'auth','uses'=>'MessageController@destroy'])->name('messages_destroy');
Route::delete('admin/postulation/retirer/{id}',['middleware'=>'auth','uses'=>'PostulationController@destroy'])->name('postulation_destroy');
Route::get('admin/liste_admins',['middleware'=>'auth','uses'=>'AdminController@getallAdmin'] )->name('liste_admins');
Route::delete('admin/admins/{id}',['middleware'=>'auth','uses'=>'AdminController@destroy'])->name('admin_destroy');