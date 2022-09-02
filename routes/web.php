<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect']
], function () {
    Route::get('/', [TestController::class, 'test']);

    Route::get('batumi.html', [MainController::class, 'loadBatumiPage']);

    Route::get('contacts.html', [MainController::class, 'loadContactsPage']);

    Route::get('faq.html', [MainController::class, 'loadFaqPage']);

    Route::get('blogs.html', [MainController::class, 'loadBlogsPage']);

    Route::get('/cc', [TestController::class, 'clearCache']);

    Route::get('/typography', [TestController::class, 'typography']);
});
