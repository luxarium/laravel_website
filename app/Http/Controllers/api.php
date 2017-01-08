<?php
/**
 * Created by PhpStorm.
 * User: hkafi
 * Date: 1/8/2017
 * Time: 2:08 AM
 */

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Request;
//use App\Http\Requests;
class api extends Controller
{
    public function register(Request $request)
    {
            dd($request);
            return redirect("/");

    }
}