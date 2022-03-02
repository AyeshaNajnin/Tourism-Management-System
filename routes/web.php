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


	Route::get('/', 'Frontend\frontendController@home')->name('home');
	Route::get('/package', 'Frontend\frontendController@pack')->name('packages');
	Route::get('/gallery', 'Frontend\frontendController@gallery')->name('gallery');
	Route::get('/transpotations', 'Frontend\frontendController@transpotations')->name('transpotations');
	Route::get('/accommodation', 'Frontend\frontendController@accommodation')->name('accommodation');
	Route::get('/blog', 'Frontend\frontendController@blog')->name('blog');
	Route::get('/contact', 'Frontend\frontendController@contact')->name('contact');