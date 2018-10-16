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

Route::get('/', 'PagesController@getHome');

Route::get('/mindjuse', 'PagesController@getMindjuse');

Route::get('/narukvice', 'PagesController@getNarukvice');

Route::get('/ogrlice', 'PagesController@getOgrlice');

Route::get('/aksesoari', 'PagesController@getAksesoari');

Route::get('/contact', 'PagesController@getContact');

Route::get('/messages', 'MessagesController@getMessages');

Route::post('/contact/submit', 'MessagesController@submit');

Route::get('/main', 'MainController@index');

Route::post('/main/checklogin', 'MainController@checklogin');

Route::get('/main/successlogin', 'MainController@successlogin');

Route::get('/main/logout', 'MainController@logout');