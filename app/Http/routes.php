<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => ['web']], function () {

    // static pages
    Route::get('/',function(){return view('pages.index',['pageTitle'=>'Homie Page']);});
    Route::get('/about',function(){return view('pages.about',['pageTitle'=>'About Us']);});
    Route::get('/contact',function(){return view('pages.contact',['pageTitle'=>'Contact Us']);});
    Route::get('/services',function(){return view('pages.services',['pageTitle'=>'Services']);});
    Route::get('/products',function(){return view('pages.products',['pageTitle'=>'Products']);});

    //login routes
    Route::get('auth/login','Auth\AuthController@getLogin');
    Route::post('auth/login','Auth\AuthController@postLogin');
    Route::get('auth/logout','Auth\AuthController@getLogout');

    //registration routes
    Route::get('auth/register','Auth\AuthController@getRegister');
    Route::post('auth/register','Auth\AuthController@postRegister');

});


