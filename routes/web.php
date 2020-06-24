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
        Route::get('product/{slug}', 'ProductController@detail')->name('product');
        Route::get('product/quickview/{id}', 'ProductController@quickview')->name('quickview');

    });

    /* Payment */
    Route::get('cart', 'PaymentController@cart')->name('cart');
    Route::get('checkout', 'PaymentController@show')->name('checkout');

    /* Blog */
    Route::group(['prefix' => 'blog'], function () {
        Route::get('/', 'BlogController@index')->name('blog');
        Route::get('/{slug}', 'BlogController@detail')->name('blog-detail');
    });

    /* About Us */
    Route::get('about-us', function () {
        return view('about-us/index');
    })->name('about-us');

    /* Contact */
    Route::get('contact', 'ContactController@index')->name('contact');
    Route::post('contact/sendMail', 'ContactController@sendMail')->name('contact-mail');

    /* Cart */
    Route::get('cart', 'CartController@index')->name('cart');

    /* Faq */
    Route::get('faq', 'FaqController@index')->name('faq');
});

/* Backend */
Route::group(['middleware' => 'employee', 'prefix' => 'admin', 'namespace' => 'Backend', 'name' => 'admin'], function () {
    Route::get('/', function () {
        return redirect(route('admin-analytic'));
    })->name('admin');
    // Dashboard
    Route::get('/analytics', 'DashboardController@index')->name('admin-analytic');
    Route::get('/sales', 'DashboardController@index')->name('admin-sales');

    Route::group(['prefix' => 'product'], function () {
        Route::get('/', 'ProductController@list')->name('admin-product-list');
        Route::get('/create', 'ProductController@create')->name('admin-product-create');
        Route::get('/{id}', 'ProductController@show')->name('admin-product-show');
        Route::get('/{id}/edit', 'ProductController@edit')->name('admin-product-edit');
        Route::post('/update', 'ProductController@update')->name('admin-product-update');
        Route::post('/store', 'ProductController@store')->name('admin-product-store');
    });
});

/* Fallback */
Route::fallback(function () {
    return view('errors/404');
});
