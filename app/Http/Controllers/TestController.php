<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class TestController extends Controller
{
    //
    function test(Request $request){

        Cache::flush();
        return view('pages/mainpage');
    }
}
