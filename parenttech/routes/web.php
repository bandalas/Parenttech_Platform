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
Route::get('/event/{id}','Event\EventController@show')->name('ev.show');

Route::prefix('admin')->group(function (){
    Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
});


Route::get('/truncate', 'Event\EventController@truncate');

Route::group(['middleware' =>['\App\Http\Middleware\AdminMiddleware']], function (){
    Route::resource('/admin/events','Event\EventController');
    Route::resource('/admin/events-media','Event\EventMediaController');
});



