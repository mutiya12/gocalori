<?php

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

// Route::get('home', function () {
//     return view('home');
// });
Route::namespace('customer')->group(function () {

    Route::get('customer/home','homeController@index')->name('customer.home');

    Route::group(['prefix' => 'perhitungan','as' => 'perhitungan.'], function(){
        Route::get('/', 'perhitunganController@index')->name('index');
        Route::post('/store', 'perhitunganController@store')->name('store');
        Route::post('/delete', 'perhitunganController@delete')->name('delete');
    });

});

Route::get('loginlama', function () {
    return view('loginlama');
});
Route::get('home1', function () {
    return view('home');
});

// Route::resource('login','LoginController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
