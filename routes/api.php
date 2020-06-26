<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/* namespace Api */
Route::group(['namespace' => 'Api'], function () {
    Route::get('category/megacategory', 'CategoryController@megacategory')->name('megacategory');
    Route::post('helper/CheckExistData', 'CheckExistDataHelper@common')->name('check-exist-data');

    Route::group(['prefix' => 'product'], function () {
        Route::get('load-infinity', 'ProductApi@loadInfinity')->name('product-infinity');
    });

    Route::post('post-comment', 'CommentApi@postComment')->name('api-comment');

});

Route::post('subscribe/sendMail', 'Frontend\ContactController@subscribe')->name('subscribe');

Route::group(['prefix' => 'checkout'], function () {

});
