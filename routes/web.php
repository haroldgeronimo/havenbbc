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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::get('/services', 'PagesController@services');

Route::get('/contact', 'PagesController@contact');

//user defined methods
Route::put('/galleries/photos/{gallery}', 'GalleriesController@updateMany')->name('galleries.updatemany');

//resources

Route::resource('events','EventsController');
Route::resource('ministries','MinistriesController');
Route::resource('galleries','GalleriesController');
Route::resource('photos','PhotosController');
Route::resource('feedbacks','FeedbacksController');
Route::resource('blog','BlogPostsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
