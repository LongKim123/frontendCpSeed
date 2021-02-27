<?php

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

Route::get('/', function () {
    return view('layoutLogin.login');
});




	Route::prefix('dang-ky')->group(function () {
    Route::post('/store',[	
    	'as'=>'dang-ky.store',
    	'uses'=>'LoginController@store'
      
      ]);
    Route::get('/',[	
    	'as'=>'dang-ky',
    	'uses'=>'LoginController@index'
      
      ]);
     Route::post('/login',[	
    	'as'=>'dang-nhap',
    	'uses'=>'LoginController@success'
      
      ]);
   
});
//Route::get('/show-cart','CartController@show_cart');
Route::post('/add-to-cart','CartController@add_to_cart');
Route::post('/update-cart','CartController@update_cart');
Route::get('cart-shopping','CartController@show_cart');
Route::get('delete-item-cart/{id}','CartController@delete_item_cart')->name('delete-item-cart');
//Route::post('/dang-nhap','LoginController@success');
Route::get('chi-tiet-san-pham/{id}','ProductController@detail_product');
Route::get('trang-chu','HomeController@index');
Route::get('gioi-thieu','HomeController@introduction')->name('gioi-thieu');


//sort
Route::get('product-listing','ProductController@product_listing');
Route::get('/sort-di','ProductController@sort_di');
Route::get('/sort-cc','ProductController@sort_cc');