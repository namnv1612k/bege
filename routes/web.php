<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

/* Language */
Route::get('/language/{language}', 'LangController@setLanguage');

/* Frontend */
Route::group(['namespace' => 'Frontend'], function () {

    /* User */
    Route::group(['middleware' => 'auth'], function () {
        Route::get('my-account', 'UserController@info')->name('my-account');

    });

    /* Shop */
    Route::group([], function() {
        Route::get('shop', 'ProductController@shop')->name('shop');
    });

    /* Payment */
    Route::get('cart', 'PaymentController@cart')->name('cart');
    Route::get('checkout', 'PaymentController@checkout')->name('checkout');

    /* Blog */
    Route::group([], function () {
        Route::get('blog', 'BlogController@index')->name('blog');
    });

    /* About Us */
    Route::get('about-us', function () {
        return view('about-us/index');
    })->name('about-us');

    /* Contact */
    Route::get('contact', 'ContactController@index')->name('contact');

    /* Cart */
    Route::get('cart', 'CartController@index')->name('cart');

    /* Faq */
    Route::get('faq', 'FaqController@index')->name('faq');
});

Route::group(['middleware' => 'admin', 'prefix' => 'admin', 'namespace' => 'Backend'], function () {
    Route::get('/', 'DashboardController@index')->name('admin');
});

/* Fallback */
Route::fallback(function () {
    return view('errors/404');
});
