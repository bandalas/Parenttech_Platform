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


/*
 *
 *              Admin and Users Authentication
 *
 */
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function (){
    Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
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




