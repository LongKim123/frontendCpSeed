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
    return view('mainlayout.mainlayout');
});
Route::get('chi-tiet-san-pham/{id}','ProductController@detail_product');
Route::get('trang-chu','HomeController@index');
Route::get('gioi-thieu','HomeController@introduction')->name('gioi-thieu');
