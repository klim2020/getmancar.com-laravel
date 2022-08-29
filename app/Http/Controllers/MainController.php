<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function loadBatumiPage(Request $request)
    {
        return view('pages.batumi-page');
    }

    public function loadContactsPage(Request $request)
    {
        return view('pages.contacts');
    }

    public function loadFaqPage(Request $request){
        return view('pages.faq');
    }

    public function loadBlogsPage(Request $request){
        return view('pages.blog');
    }

}
