<?php

use App\User;
use App\Profile;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});

Route::resource('/signup','UserController@displaySignUpView');

/*
|--------------------------------------------------------------------------
| Database Application Testing Routes
|--------------------------------------------------------------------------
|
| All routes related with database testing,
| will be deleted, it's just for testing purposes
|
|
*/

Route::get('/insert-user',function(){

  DB::insert('insert into users(username,email,password) values(?, ?, ?)',['kbandala','k.rbandala@gmail.com','123test']);

});

Route::get('/insert-profile',function(){
  DB::insert('insert into profiles(user_id,name,lastname,sex,birth) values(?,?,?,?,?)',[1,'karla','robledo',1,'2018-01-01']);
});

Route::get('/get-user/{id}',function($id){

  $results = DB::select('select * from users where id = ?',[$id]);
  return $results;

});

//  One to One relationship

//  Get the profile that belongs to that user
Route::get('/user/{id}/profile',function($id){

  return User::find($id)->profile;

});

//  Get the user that belongs to that profile
Route::get('/profile/{id}/user',function($id){
  return Profile::find($id)->user;
});
