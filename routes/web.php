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

    $offer_id = Session::get('offer_id');


    if (!(Users::where('user_id', '=', $username)->exists())) {
        //dd("Not Found");
        if (isset($offer_id))
            return redirect()->route('item',['id' => $offer_id]);
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

//                dd("OK");


            Session::put('token', $token_key);

            if (isset($offer_id))
            return redirect()->route('item',['id' => $offer_id]);

            return redirect()->back();

        }

        else{
//            dd("Wrong Password");
            if (isset($offer_id))
                return redirect()->route('item',['id' => $offer_id]);
            return redirect()->back();
        }
    }
});
Route::get('/loggingOut', function () {

    Session::forget('token');
    return view('indexPage');
});

Route::get('/SellAdmin', function () {
    $detail=order_detail::all();

//    return $detail;
    return view('SellerAdmin',['detail'=>$detail]);
});

Route::get('/Sections', function () {
    return view('Sections');
});

Route::get('/About', function () {
    return view('About_Page');
});

Route::get('/Contact', function () {
    return view('Contact');
});

Route::get('/Privacy-Policy', function () {
    return view('Privacy-Policy');
});

Route::get('/sign-complaints', function () {
    return view('sign-complaints');
});

Route::get('/Item/{id}', function ($id) {
//    dd($id);
    Session::flash('item_id', $id);
//    return Redirect::to('/Item_single.php', array('1'));

    return view('Item_single');
})->name('item');


Route::post('/purchases', function (Request $request) {
//    $token = $request -> token;
    $token = Session::get('token');
    $offer_id = $request ->offer_id;
    $count = $request -> count ;
    $token_key = str_random(10);
//    dd($token, $count, $offer_id);
//    $username = $request -> username;
    if (isset($token))
    $user = users::where('remember_token', $token)->first();
//    dd($user);
    $offer = offer::where('offer_id','=' , $offer_id)->first();
    $order_detail = new order_detail();
    $order_detail -> order_detail_id = $token_key;
    $order_detail -> order_id = NULL;
//    $order_detail -> offer_id = $offer_id;
    $order_detail -> offer_id = 11;
    $order_detail -> count = $count ;
//    $order_detail -> item_price = $offer -> priceReal;
    $order_detail -> item_price = 1;
    $order_detail -> totalPriceReal = $count * $order_detail -> item_price;
    $order_detail -> totalPriceDiscounted = $count * $order_detail -> item_price;
    $order_detail -> purches_token = $token_key;
    $order_detail -> save();
    Session::flash('p_token', $token_key);
    return view('purchased');
    //dd($order_detail -> purches_token);
});

Route::post('/pre-purchase', function (Request $request) {
//    $token = $request -> token;
    $token = Session::get('token');

    $offer_id = $request ->offer_id;
    $count = $request -> count ;
    //$token_key = str_random(10);
//    dd($token, $count, $offer_id);
//    $username = $request -> username;
    if (isset($token))
        $user = users::where('remember_token', $token)->first();
//    dd($user);

    if(!isset($user))
    {
//        dd('here');
        Session::flash('offer_id', $offer_id);

        return view('SignIn_First');
    }


    $offer = offer::where('offer_id','=' , $offer_id)->first();
//    $order_detail = new order_detail();
//    $order_detail -> order_detail_id = $token_key;
//    $order_detail -> order_id = NULL;
////    $order_detail -> offer_id = $offer_id;
//    $order_detail -> offer_id = 11;
//    $order_detail -> count = $count ;
////    $order_detail -> item_price = $offer -> priceReal;
//    $order_detail -> item_price = 1;
//    $order_detail -> totalPriceReal = $count * $order_detail -> item_price;
//    $order_detail -> totalPriceDiscounted = $count * $order_detail -> item_price;
//    $order_detail -> purches_token = $token_key;
//    $order_detail -> save();
//    Session::flash('p_token', $token_key);
    Session::flash('offer_id', $offer_id);
//    Session::flash('token', $token);
    Session::flash('count', $count);
    return view('pre-purchase');
    //dd($order_detail -> purches_token);
});
Route::post('/home', 'HomeController@index');
Route::post('/showAllPost', function (Request $request) {
    return offer::all();
});
