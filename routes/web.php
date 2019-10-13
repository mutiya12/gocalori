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

// Route::namespace('rumahmakan')->group(function () {

    

// });

Route::get('rumahmakan/tambahmenu', 'rumahmakan\tambahmenuController@index')->name('rumahMakan.index');
Route::post('rumahmakan/tambahmenu/store', 'rumahmakan\tambahmenuController@store')->name('rumahMakan.store');
Route::get('rumahmakan/tambahmenu/create', 'rumahmakan\tambahmenuController@create')->name('rumahMakan.create');
Route::get('rumahmakan/tambahmenu/edit/{id}', 'rumahmakan\tambahmenuController@edit')->name('rumahMakan.edit');
Route::post('rumahmakan/tambahmenu/{id}', 'rumahmakan\tambahmenuController@update')->name('rumahMakan.update');
Route::post('rumahmakan/tambahmenu/delete/{id}', 'rumahmakan\tambahmenuController@destroy')->name('rumahMakan.delete');

Route::get('loginlama', function () {
    return view('loginlama');
});
Route::get('home1', function () {
    return view('home');
});

Route::get('rumahmakan/melihatmenu', function () {
    return view('rumahmakan.melihatmenu');
});

// Route::resource('login','LoginController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
