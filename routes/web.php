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

Route::group(
    ['prefix' => 'admin',
        'as'     => 'admin.',
        'middleware' => 'admin'] , function () {
    Route::get('adminHome', 'Admin\AdminController@index')->name('adminHome');

});

Route::group(
    ['prefix' => 'member',
        'as' => 'member.',
        'middleware' => 'auth'], function (){
    Route::get('profile', 'User\UserController@profile')->name('profile');
    Route::get('list_cart', 'User\PageController@showListCart')->name('list_cart');

});

Route::get('admin_home', 'Admin\AdminController@home')->name('admin_home');

Route::get('login', 'User\UserController@login')->name('login');

Route::get('/', 'User\PageController@index')->name('home');

Route::get('/search', 'User\PageController@search')->name('search');

Route::post('login', 'Auth\LoginController@login');

Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('loginAdmin', 'Auth\LoginController@loginAdminForm')->name('login_admin');

Route::post('loginAdmin', 'Auth\LoginController@loginAdmin');

Route::get('logout_admin', 'Auth\LoginController@logoutAdmin')->name('logout_admin');

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

// admin home
Route::get('/admin1', function () {
    return view('admin/index');
});
// product
Route::get('/admin1/product', function () {
    return view('admin/product/index');
});

Route::get('/admin1/product/add', function () {
    return view('admin/product/add');
});

Route::get('/admin1/product/edit', function () {
    return view('admin/product/edit');
});

// category
Route::get('/admin1/category', function () {
    return view('admin/category/index');
});

Route::get('/admin1/category/add', function () {
    return view('admin/category/add');
});

Route::get('/admin1/category/edit', function () {
    return view('admin/category/edit');
});

// comment
Route::get('/admin1/comment', function () {
    return view('admin/comment/index');
});

// cart
Route::get('/admin1/cart', function () {
    return view('admin/cart/index');
});

Route::get('/admin1/cart/detail', function () {
    return view('admin/cart/detailcart');
});

// discount
Route::get('/admin1/discount', function () {
    return view('admin/discount/index');
});

Route::get('/admin1/discount/add', function () {
    return view('admin/discount/add');
});

Route::get('/admin1/discount/edit', function () {
    return view('admin/discount/edit');
});

// contact
Route::get('/admin1/contact', function () {
    return view('admin/contact/index');
});

// brand
Route::get('/admin1/brand', function () {
    return view('admin/brand/index');
});

Route::get('/admin1/brand/add', function () {
    return view('admin/brand/add');
});

Route::get('/admin1/brand/edit', function () {
    return view('admin/brand/edit');
});

// customer
Route::get('/admin1/customer', function () {
    return view('admin/customer/index');
});

// slideshow
Route::get('/admin1/slideshow', function () {
    return view('admin/slideshow/index');
});

Route::get('/admin1/slideshow/add', function () {
    return view('admin/slideshow/add');
});

Route::get('/admin1/slideshow/edit', function () {
    return view('admin/slideshow/edit');
});

// websetting
Route::get('/admin1/websetting', function () {
    return view('admin/websetting/index');
});

Route::get('/admin1/websetting/edit', function () {
    return view('admin/websetting/edit');
});
