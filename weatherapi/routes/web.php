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
    return view('/pages/home');
});

Auth::routes();
Route::get('/about', 'PagesController@about');
Route::get('/home','PagesController@home');
Route::get('/document','PagesController@document');
Route::get('/blog','PagesController@blog');
Route::get('/demo','PagesController@demo');
Route::get('/loggeduser','PagesController@loggeduser');
