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
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('post/create', 'StandardController@create')->middleware('auth');
Route::post('post/create', 'StandardController@store')->middleware('auth');

Route::get('post/view_blog', 'StandardController@view');
//For the hyper Hyperlinks
Route::get('post/title', 'StandardController@title');
Route::get('post/details/{id}', 'StandardController@detail')->name('details');
// for update
Route::get('post/edit/{id}', 'StandardController@edit')->name('edit');
Route::post('post/edit/{id}', 'StandardController@update')->name('update');
Route::get('post/view_blog/{id}', 'StandardController@delete')->name('delete');
//code for faker random blog
Route::get('/blog', 'BlogController@index');
//for index blade
Route::get('pages/index', 'StandardController@index');
//code for comments
Route::post('post/details', 'CommentController@store')->name('mycomments');
// Code for facebook login
Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');
Route::post('user/profile/post', 'StandardController@uploadprofile')->name('upload.profile')->middleware('auth');
Route::get('user/profile/post', function(){
    return view('post.profile');
})->middleware('auth');