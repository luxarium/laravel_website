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
use App\order_detail;

//use App\Http\Requests;

Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        return view('indexPage');
    });
});

//Route::get('/register','RegisterController@create');
Route::post('/registers', function (Request $request) {
    //dd($request->username);
    /*dd($request['firstName']);
    dd($request->password);
    dd($request->city);*/
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
    //dd($users);
    $users->save();

    //dd("ok");
    return view('indexPage'/*,['token' => $token_key]*/);

});

Auth::routes();
Route::post('/loggingIn', function (Request $request) {
    $username = $request->username;
    $password = $request->password;

    Session::forget('token');

    if (!(Users::where('user_id', '=', $username)->exists())) {
        //dd("Not Found");
        return redirect()->back();
    } else {
        $user = Users::where('user_id', '=', $username)->firstOrFail();
        if ($user->password == $password) {

                $token_key = str_random(40);
                /*$user->remember_token = $token_key;
                $user->city = "yazd";
                $user->user_id = 1;
                $user->save();*/

                Users::where('user_id', '=', $username)
                    ->update(array('remember_token' => $token_key));
                //Sessions::put('hdfh',$token_key);

                //dd("OK");


            Session::put('token', $token_key);
            return redirect()->back();
        }

        else{
//            dd("Wrong Password");
            return redirect()->back();
        }
    }
});
Route::get('/loggingOut', function () {

    Session::forget('token');
    return view('indexPage');
});

Route::get('/Sections', function () {
    return view('Sections');
});

Route::get('/Item/{id}', function ($id) {
//    dd($id);
    Session::flash('item_id', $id);
//    return Redirect::to('/Item_single.php', array('1'));

    return view('Item_single');
});


Route::post('/purchases', function (Request $request) {
    $token = $request -> token;
    $offer_id = $request ->offer_id;
    $count = $request -> count ;
//    dd($token, $count, $offer_id);
//    $username = $request -> username;
    $user = Users::where('remember_token', $token)->first();
//    dd($user);
    $offer = offer::where('offer_id','=' , $offer_id)->first();
    $order_detail = new order_detail();
    $order_detail -> offer_id = $offer_id;
    $order_detail -> count = $count ;
    $order_detail -> item_price = $offer -> priceReal;
    $order_detail -> totalPriceReal = $count * $order_detail -> item_price;
    $token_key = str_random(40);
    $order_detail -> purches_token = $token_key;
    $order_detail -> save();
    return view('gghfh',["hghf"=>$token]);
    dd($order_detail -> purches_token);
});
Route::post('/home', 'HomeController@index');
Route::post('/showAllPost', function (Request $request) {
    return offer::all();
});
