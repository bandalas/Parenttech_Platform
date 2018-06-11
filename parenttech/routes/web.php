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

Route::group(['middleware' => 'user_guest'],function(){

    Route::get('register', 'UserAuth\RegisterController@showRegistrationForm');
    Route::post('register', 'UserAuth\RegisterController@register');
    Route::get('login','UserAuth\LoginController@showLoginForm');
    Route::post('login','UserAuth\LoginController@login');

});

Route::group(['middleware' => 'user_auth'], function (){

    Route::get('/home',function(){
        //'Event\EventController@displayAllEvents'
        $event = DB::table('events')->get();
        return view('user.home',['event' => $event]);
    });
    Route::post('logout','UserAuth\LoginController@logout');

});


