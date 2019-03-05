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

Route::get('/', 'HomeController@index');
//Route::get('/', "AdsController@index");

Auth::routes();
Route::resource('ad','AdsController');
Route::get('home', 'AdsController@index')->name('home');

Route::get('userAds','AdsController@getUserAds')->middleware('auth');
Route::get('dashBoard','AdminController@index')->middleware('admin');

Route::get('unpublished','AdsController@getUnpublishedAds')->middleware('admin');
Route::post('publish{id}','AdsController@publishAds')->name('publish')->middleware('admin');
//Route::get('ads/destroyadmin', 'AdsController@destroyadmin');

Route::resource('ads', 'AdsController')->only([
    'create','store','edit','update', 'destroy'
]);

Route::resource('/posts','PostController');

Route::get('{id}/{slug}','AdsController@getAdsByCategory');
Route::get('/mostviewed','AdsController@getMostViewed');
Route::get('/mostfav','AdsController@getMostFav');
Route::get('/newest','AdsController@getNewest');
Route::get('ad/{id}/{slug}','AdsController@show');
Route::post('search','AdsController@search');

Route::post('ads/{id}/favorite','FavoriteController@store');
Route::post('ads/{id}/unfavorite','FavoriteController@destroy');
Route::get('userFav','FavoriteController@index')->middleware('auth');
Route::post('comments/store','CommentController@store')->name('comments.store');
Route::post('comment/reply', 'CommentController@reply');
Route::post('sendMail','SendMailController@sendMail');




//Route::get('/posts/create','PostController@create' );
Route::post('posts/{id}/favorite','PostFavController@store');
Route::post('posts/{id}/unfavorite','PostFavController@destroy');
Route::post('posts/search','PostController@search');
Route::get('/posts','PostController@index' )->name('posts.home');
Route::get('/posts/most/viewed','PostController@getMostViewed')->name('posts.mostviewed');;
Route::get('/posts/most/fav','PostController@getMostFav')->name('posts.mostfav');;
Route::get('/posts/most/new','PostController@getNewest')->name('posts.newest');;
Route::get('/posts/{year}/{month}','PostController@archive')->name('posts.archives');
Route::get('/posts/show/{id}/{slug}','PostController@show')->name('post.show');
//Route::get('/posts/{year}/posts/show/{id}/{slug}','PostController@show')->name('post.show');

