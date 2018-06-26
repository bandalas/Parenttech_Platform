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

Route::get('/', 'Event\EventController@getFutureAndPastEvents');

Route::get('/event/{id}','Event\EventController@getEventById');

Route::group(['prefix' => 'user','as' => 'user.','middleware' => 'user_guest'],function(){

    Route::get('register', ['as' => 'signup', 'uses' => 'UserAuth\RegisterController@showRegistrationForm']);
    Route::post('register', 'UserAuth\RegisterController@register');
    Route::get('login',['as' => 'login', 'uses' =>'UserAuth\LoginController@showLoginForm']);
    Route::post('login','UserAuth\LoginController@login');

});



Route::group(['prefix' => 'user','as' => 'user.','middleware' => 'user_auth'], function (){

    Route::get('home',['as'=>'home', 'uses' => 'User\UserController@homeEvents']);

    Route::post('logout','UserAuth\LoginController@logout');

});

/*      Inserting data for testing purposes         */
Route::get('/basicinsert',function(){
    $random_date = Carbon\Carbon::today()->subDays(2)->toDateString();
    $event = new \App\Event();
    $event->name = 'Test Past Event';
    $event->date = $random_date;
    $event->hour = '20:00';
    $event->location = 'CDMX';
    $event->price = '800';
    $event->description = 'This is an example description';
    $event->save();
});

Route::get('/truncate', 'Event\EventController@truncate');

Route::get('/iadmin', function (){
    $adm = new \App\Admin();
    $adm->email ='a01334885@itesm.mx';
    $adm->password ='1234test';
    $adm->save();
});

