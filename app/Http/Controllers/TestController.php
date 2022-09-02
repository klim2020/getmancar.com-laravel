<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;

class TestController extends Controller
{
    //
    public function test(Request $request)
    {
        return view('pages/mainpage');
    }

    public function clearCache()
    {
        Artisan::call('route:clear');

        Artisan::call('route:clear');

        Artisan::call('route:clear');
        return 'cc';
    }

    public function typography(Request $request)
    {
        return view('pages.typography');
    }
}
