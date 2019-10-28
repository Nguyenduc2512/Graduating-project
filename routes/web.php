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



Route::get('/', 'IndexController@index')->name('index');

Route::get('/search', 'SearchController@index')->name('search');

Route::get('/contact', function () {
    return view('client/contact');
});
Route::get('/about', function () {
    return view('client/about');
});
Route::get('/cate', function () {
    return view('client/cate');
});
Route::get('editcustomer', function () {
    return view('client/editcustomer');
});
Route::get('/listcart', function () {
    return view('client/listcart');
});
Route::get('/hiscart', function () {
    return view('client/hiscart');
});

Route::get('/detail-product', function () {
    return view('client/detail-product');
});

Route::get('/admin1', function () {
    return view('admin/layouts/main');
});
