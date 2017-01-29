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
use App\offer;
use App\order_detai;

//use App\Http\Requests;

Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        return view('welcome');
    });
});

//Route::get('/register','RegisterController@create');
Route::post('/registers', function (Request $request) {
    dd($request->username);
    $username = $request['username'];
    $password = $request['password'];
    $firstName = $request ['firstName'];
    $lastName = $request ['lastName'];
    $city = $request ['city'];
    $users = new Users();
    $users->user_id = $username;
    $users->password = $password;
    $users->firstName = $firstName;
    $users->lastName = $lastName;
    $users->city = $city;
    $users->save();

    dd("ok");
    return redirect("/");

});

Auth::routes();
Route::post('/loginn', function (Request $request) {
    $username = $request->username;
    $password = $request->password;
    if (!(Users::where('firstName', '=', $username)->exists())) {
        dd("Not Found");
    } else {
        $user = Users::where('firstName', '=', $username)->firstOrFail();
        if ($user->password == $password) {
            $token_key = str_random(40);
            $user->remember_token = $token_key;
            $user->city = "yazd";
            $user->user_id = 1;
            $user->save();
            return $token_key;
        }
    }
});
Route::post('/purchases', function (Request $request) {
    $token = $request -> token;
    $offer_id = $request ->offer_id;
    $count = $request -> count ;
    $username = $request -> username;
    $user = Users::where('username','=' , $username);
    $offer = offer::where('offer_id' , '=' , $offer_id);
    dd($offer );
    $order_detail = new order_detail();
    $order_detail -> offer_id = (string)$offer -> offer_id;
    $order_detail -> count = $count ;
    $order_detail -> item_price = $offer -> priceReal;
    $order_detail -> totalPriceReal = $count * $order_detail -> item_price;
    $order_detail -> save();
    dd($order_detail -> totalPriceReal);
});
Route::post('/home', 'HomeController@index');
Route::post('/showAllPost', function (Request $request) {
    return offer::all();
});
