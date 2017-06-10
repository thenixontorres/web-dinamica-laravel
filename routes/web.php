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

Route::get('/noticias', [
        'uses'  =>  'landingController@noticias',
        'as'    =>  'noticias',
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

Route::get('/blog/article/{slug}', [
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

	Route::resource('pages', 'pageController', ['only' =>['index']]);

	Route::resource('sections', 'sectionController', ['only' =>['index','edit','update']]);

	//Route::resource('contents', 'contentController');

	Route::resource('imgs', 'imgController', ['except' =>['show']]);

	Route::resource('services', 'serviceController',['except' =>['show']]);

	Route::resource('constants', 'constantController',['only' =>['index','edit','update']]);

	Route::resource('icons', 'iconController',['except' =>['destroy','edit','update']]);

	Route::resource('articles', 'articleController',['except' =>['show']]);

	//Route::resource('thumbs', 'thumbController');

	Route::resource('tags', 'tagController',['except' =>['show']]);

	Route::resource('sectionConfigs', 'sectionConfigController');
});




