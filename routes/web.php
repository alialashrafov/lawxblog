<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'IndexController@index')->name('index');
Route::get('/ajax', 'IndexController@ajax');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact', 'ContactController@send')->name('contact-send');
Route::post('/subscriber' ,'SubscriberController@form')->name('subscriber');

Route::get('/categories', 'CategoryController@allindex')->name('categories');
Route::get('/category/{cslug}', 'CategoryController@oneindex')->name('category');

Route::get('/post/{nslug}', 'PostController@index')
->where('type', 'simple')
->where('type', '!=','video')->where('type','!=','audio')
->name('post');

Route::get('/videos', 'VideoController@video')->name('video');
Route::get('/videos/{vslug}', 'VideoController@videosingle')
->where('type', 'video')->where('type', '!=','simple')->where('type','!=','audio')
->name('video.single');

Route::get('/audios', 'AudioController@audio')
->where('type','audio')->where('type', '!=','video')->where('type','!=','simple')
->name('audio');
Route::get('/audios/{aslug}', 'AudioController@audiosingle')->where('type', 'audio')->name('audio.single');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();


Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin', 'namespace' => 'Admin'], function () {

    Route::get('/', 'IndexController@index')->name('admin.index');

    Route::group(['prefix' => 'posts'], function () {
        Route::get('/', 'PostController@index')->name('admin.news');


        Route::get('/update/{id}', 'PostController@showUpdateForm')
            ->name('admin.news.update')->where('id', '[0-9]+');
        Route::post('/update/{id}', 'PostController@update')
            ->where('id', '[0-9]+');

        Route::get('/create', 'PostController@showCreateForm')->name('admin.news.create');
        Route::post('/create', 'PostController@create');

        Route::get('/delete/{id}', 'PostController@delete')->name('admin.news.delete');

        Route::post('/ckeditor/upload', 'PostController@upload')->name('ckeditor.upload');

    });
    Route::group(['prefix' => 'category'], function(){
        Route::get('/', 'CategoryController@index')->name('admin.category');

        Route::get('/update/{id}', 'CategoryController@showUpdateForm')
            ->name('admin.category.update')->where('id', '[0-9]+');
        Route::post('/update/{id}', 'CategoryController@update')
            ->where('id', '[0-9]+');

        Route::get('/create', 'CategoryController@showCreateForm')->name('admin.category.create');
        Route::post('/create', 'CategoryController@create');

        Route::get('/delete/{id}', 'CategoryController@delete')->name('admin.category.delete');



    });

    Route::group(['prefix' => 'category_news'], function () {
        Route::get('/', 'CategoryNewsController@index')->name('admin.nc');
        Route::get('/new', 'CategoryNewsController@form')->name('admin.nc.new');
        Route::get('/edit/{id}', 'CategoryNewsController@form')->name('admin.nc.edit');
        Route::post('/save/{id?}', 'CategoryNewsController@save')->name('admin.nc.save');
        Route::get('/delete/{id}', 'CategoryNewsController@delete')->name('admin.nc.delete');
    });
    Route::group(['prefix' => 'subscribe'], function () {
        Route::get('/', 'SubscribeController@index')->name('admin.subscribe');
        Route::get('/delete/{id}', 'SubscribeController@delete')->name('admin.subscribe.delete');
    });
    Route::group(['prefix' => 'contacts'], function () {
        Route::get('/', 'ContactController@index')->name('admin.contacts');
        Route::get('/delete/{id}', 'ContactController@delete')->name('admin.contacts.delete');
    });
    Route::group(['prefix' => 'settings'], function () {
        Route::get('/update', 'SettingController@showUpdateForm')
            ->name('admin.settings.update');
        Route::post('/update/{id}', 'SettingController@update')->name('admin.settings.updateform')
            ->where('id', '[0-9]+');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
