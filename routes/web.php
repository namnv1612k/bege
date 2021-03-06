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
        Route::group(['prefix' => 'wishlist'], function () {
            Route::get('/', 'UserController@wishlist')->name('wishlist');
            Route::get('remove/{id}', 'UserController@removeWish')->name('remove-wish');
        });
    });

    /* Shop */
    Route::group([], function() {
        Route::get('shop', 'ProductController@shop')->name('shop');
        Route::group(['prefix' => 'product'], function () {
            Route::get('{slug}', 'ProductController@detail')->name('product');
            Route::get('quickview/{id}', 'ProductController@quickview')->name('quickview');
            Route::post('addWish', 'ProductController@addWish')->name('add-wish');
        });
    });

    /* Cart */
    Route::group(['prefix' => 'cart'], function () {
        Route::get('/', 'CartController@index')->name('cart');
        Route::post('add', 'CartController@add')->name('add-cart');
        Route::post('remove', 'CartController@remove')->name('cart-remove');
        Route::post('update', 'CartController@update')->name('cart-update');
    });

    /* Payment */
    Route::group(['prefix' => 'checkout', 'middleware' => 'payment'], function () {
        Route::get('/', 'PaymentController@show')->name('checkout');
        Route::post('apply-coupon', 'PaymentController@applyCoupon')->name('apply-coupon');
        Route::post('payment', 'PaymentController@payment')->name('payment');
    });

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
    Route::group(['prefix' => 'contact'], function () {
        Route::get('/', 'ContactController@index')->name('contact');
        Route::post('sendMail', 'ContactController@sendMail')->name('contact-mail');
    });

    /* Faq */
    Route::get('faq', 'FaqController@index')->name('faq');

    /* Service */
    Route::get('service', 'ServiceController@index')->name('service');

    /* Portfolio */
    Route::get('portfolio', 'PortfolioController@index')->name('portfolio');
});

/* Backend */
Route::group(['middleware' => 'employee', 'prefix' => 'admin', 'namespace' => 'Backend', 'name' => 'admin'], function () {
    Route::get('/', function () {
        return redirect(route('admin-analytic'));
    })->name('admin');
    // Dashboard
    Route::get('analytics', 'DashboardController@index')->name('admin-analytic');
    Route::get('sales', 'DashboardController@sale')->name('admin-sales');

    Route::group(['prefix' => 'product'], function () {
        Route::get('/', 'ProductController@list')->name('admin-product-list');
        Route::get('create', 'ProductController@create')->name('admin-product-create');
        Route::get('/{id}', 'ProductController@show')->name('admin-product-show');
        Route::get('/{id}/edit', 'ProductController@edit')->name('admin-product-edit');
        Route::post('update', 'ProductController@update')->name('admin-product-update');
        Route::post('store', 'ProductController@store')->name('admin-product-store');
        Route::get('delete/{id}', 'ProductController@delete')->name('admin-product-delete');
    });

    Route::group(['prefix' => 'user'], function () {
        Route::get('/', 'UserController@list')->name('admin-user-list');
        Route::get('create', 'UserController@create')->name('admin-user-create');
        Route::get('/{id}', 'UserController@show')->name('admin-user-show');
        Route::get('/{id}/edit', 'UserController@edit')->name('admin-user-edit');
        Route::post('update', 'UserController@update')->name('admin-user-update');
        Route::post('store', 'UserController@store')->name('admin-user-store');
        Route::get('delete/{id}', 'UserController@delete')->name('admin-user-delete');
    });
});

/* Fallback */
Route::fallback(function () {
    return view('errors/404');
});

Route::get('xem-san-pham.{id}.html', 'Frontend\ProductController@xem')->name('xem-san-pham');
