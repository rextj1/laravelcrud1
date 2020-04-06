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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// custom route
// Route::get('/Home', function () {
//     return view('messages.homee');
// });
Route::get('/Home','PageRouteController@getHome');
Route::get('/about','PageRouteController@getAbout');
Route::get('/contact','PageRouteController@getContact');
Route::get('/showcase','PageRouteController@getContact');
Route::get('/message','MessagesController@show');
// post to database, used to submit form in laravel
Route::post('/contact','MessagesController@submit');

// pages
Route::get('/page','PageRouteController@getPageContact');
// post to database, used to submit form in laravel
Route::post('/contact/form','PagesController@submit');
Route::get('/page/pagemessage', 'PagesController@show');

// todo controller
route::get('/todos','TodoController@index');
Route::resource('/todo', 'TodoController');

// listing controller
Route::get('/listings', 'ListingController@index');
Route::resource('/listing', 'ListingController');

// Album controller
Route::get('albums', 'AlbumsController@index');
Route::resource('album', 'AlbumsController');

// photo controller
Route::get('photos', 'PhotosController@index');
Route::get('photo/create/{id}', 'PhotosController@create');
Route::resource('photo', 'PhotosController');