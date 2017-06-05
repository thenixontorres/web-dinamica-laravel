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

Route::get('/', [
        'uses'  =>  'landingController@landing',
        'as'    =>  'landing',
]);

Route::get('/servicios/{id}', [
        'uses'  =>  'landingController@servicios',
        'as'    =>  'servicios',
]);

Route::get('/perfil', [
        'uses'  =>  'landingController@perfil',
        'as'    =>  'perfil',
]);

Route::post('/contacto', [
        'uses'  =>  'landingController@contacto',
        'as'    =>  'contacto',
]);

Route::get('/acerca', [
        'uses'  =>  'landingController@acerca',
        'as'    =>  'acerca',
]);

Route::get('/blog', [
        'uses'  =>  'blogController@index',
        'as'    =>  'blog',
]);

Route::get('/blog/article/{id}', [
        'uses'  =>  'blogController@article',
        'as'    =>  'blog.article',
]);

Route::get('/blog/category/{id}', [
        'uses'  =>  'blogController@category',
        'as'    =>  'blog.category',
]);

$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

Route::group(['middleware'=>'auth'], function(){ 

	Route::get('/panel', 'HomeController@index');

	Route::resource('pages', 'pageController');

	Route::resource('sections', 'sectionController');

	Route::resource('contents', 'contentController');

	Route::resource('configs', 'configController');

	Route::resource('imgs', 'imgController');

	Route::resource('services', 'serviceController');

	Route::resource('socials', 'socialController');

	Route::resource('vars', 'varController');

	Route::resource('globals', 'globalController');

	Route::resource('constants', 'constantController');

	Route::resource('icons', 'iconController');

	Route::resource('articles', 'articleController');

	Route::resource('thumbs', 'thumbController');

	Route::resource('tags', 'tagController');

	Route::resource('sectionConfigs', 'sectionConfigController');
});




