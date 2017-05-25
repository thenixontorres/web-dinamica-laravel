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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('pages', 'pageController');

Route::resource('sections', 'sectionController');

Route::resource('contents', 'contentController');

Route::resource('configs', 'configController');

Route::resource('imgs', 'imgController');

Route::resource('services', 'serviceController');

Route::resource('socials', 'socialController');

Route::resource('vars', 'varController');