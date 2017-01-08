<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use Illuminate\Http\Request;
use App\DB;
use App\Users;
use App\Http\Controllers\Auth\RegisterController;
//use App\Http\Requests;

Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        return view('welcome');
    });
});

//Route::get('/register','RegisterController@create');
//Route::get('/register', function (Request $request) {
//    $username = $request['username'];
//    $password = $request['password'];
//    $firstName = $request ['firstName'];
//    $lastName = $request ['lastName'];
//    $city = $request ['city'];
//    $users = new Users();
//    $users -> user_id = $username;
//    $users -> password = $password;
//    $users -> firstName = $firstName;
//    $users -> lastName = $lastName;
//    $users -> city = $city;
//    $users -> save();
//    return redirect("/");
//
//});

Auth::routes();

Route::get('/home', 'HomeController@index');