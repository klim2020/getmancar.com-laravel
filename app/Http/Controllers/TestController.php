<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;

class TestController extends Controller
{
    //
    function test(Request $request){

        return view('pages/mainpage');
    }

    function clearCache(){

        Artisan::call('route:clear');

        Artisan::call('route:clear');

        Artisan::call('route:clear');
        return 'cc';

    }
}
