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

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/careerPortfolio', 'LoadController@index')->name('careerPortfolio');

Route::post('/dousersignup','SiteUsersController@usersignup')->name('dousersignup');

Route::post('/userLogin','SiteUsersController@doLogin')->name('userLogin');

// social login
Route::get('/redirect', 'SocialAuthController@redirect')->name('redirect');
Route::get('/callback', 'SocialAuthController@callback')->name('callback');

//google +
Route::get('/redirectt', 'SocialAuthController@redirectt')->name('redirectt');
Route::get('/goolecallback', 'SocialAuthController@goolecallback')->name('goolecallback');


// after login user routes

Route::get('/user', 'HomeController@index')->name('user');
