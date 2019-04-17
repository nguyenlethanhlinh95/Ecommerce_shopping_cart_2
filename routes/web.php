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

Route::get('/', 'PagesController@index')->name('homePage');
Route::get('/home', 'PagesController@index')->name('homePage');
Route::get('/shop', 'PagesController@index')->name('shop');
Route::get('/products', 'PagesController@index');
Route::get('/contact', 'PagesController@contact')->name('contact');

//Route::get('/admin', function (){
//    return view('admin.pages.index');
//});

Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/product_details/{id}', 'HomeController@product_details');

Route::get('/cart', 'CartController@index');
Route::get('/cart/addItem/{id}', 'CartController@addItem');



// admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function (){
    Route::get('/', function (){ return view('admin.pages.index'); })->name('admin');

    Route::resource('product','ProductsController');
});

//Route::group(['prefix'=>'admin', 'middleware'=>'adminLogin'], function (){
//    Route::get('/', function (){ return view('admin.pages.index'); });
//});
