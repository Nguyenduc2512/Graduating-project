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
    Route::get('admin_home', 'Admin\AdminController@index')->name('adminHome');
    Route::get('add_new_product', 'Admin\ProductController@newProduct')->name('add_product');
    Route::post('add_new_product', 'Admin\ProductController@addNewProduct');

    Route::get('category', 'Admin\CategoryController@listCategory')->name('list_category');

    Route::get('category/add', 'Admin\CategoryController@newCategory')->name('add_category');

    Route::post('category/add', 'Admin\CategoryController@addNewCategory');

    Route::get('category/edit/{id}', 'Admin\CategoryController@editFormCategory')->name('edit_category');

    Route::post('category/edit/{id}',  'Admin\CategoryController@editCategory');

    Route::get('contact', 'Admin\AdminController@contact')->name('contact');
    Route::get('remove_contact/{id}', 'Admin\AdminController@removeContact')->name('remove_contact');

    Route::get('show_list_product', 'Admin\ProductController@showListProduct')->name('show_product');

    //brand
    Route::get('brand', 'Admin\BrandController@listBrand')->name('list_brand');

    Route::get('brand/add', 'Admin\BrandController@newBrand')->name('add_brand');

    Route::post('brand/add', 'Admin\BrandController@addNewBrand');

    Route::get('brand/edit/{id}', 'Admin\BrandController@editFormBrand')->name('edit_brand');

    Route::post('brand/edit/{id}', 'Admin\BrandController@editBrand');
    //delivery_brand

        Route::get('delivery_brand', 'Admin\DeliveryBrandController@listDeliveryBrand')->name('list_deliverybrand');

        Route::get('delivery_brand/add', 'Admin\DeliveryBrandController@newDeliveryBrand')->name('add_deliverybrand');

        Route::post('delivery_brand/add', 'Admin\DeliveryBrandController@addNewDeliveryBrand');

        Route::get('delivery_brand/edit/{id}', 'Admin\DeliveryBrandController@editFormDeliveryBrand')->name('edit_deliverybrand');

        Route::post('delivery_brand/edit/{id}', 'Admin\DeliveryBrandController@editDeliveryBrand');

    //slideshow
        Route::get('slideshow', 'Admin\SlideShowController@listSlideShow')->name('list_slideshow');

        Route::get('slideshow/add', 'Admin\SlideShowController@newSlideShow')->name('add_slideshow');

        Route::post('slideshow/add', 'Admin\SlideShowController@addNewSlideShow');

        Route::get('slideshow/edit/{id}', 'Admin\SlideShowController@editFormSlideShow')->name('edit_slideshow');

        Route::post('slideshow/edit/{id}', 'Admin\SlideShowController@editSlideShow');

    Route::get('admin', 'Admin\AdminController@listAdmin')->name('list_admin');

    Route::get('admin/edit/{id}', 'Admin\AdminController@editFormAdmin')->name('edit_admin');

    Route::post('admin/edit/{id}', 'Admin\AdminController@editAdmin');

    Route::get('web', 'Admin\AdminController@listWeb')->name('list_web');

    Route::get('web/edit/{id}', 'Admin\AdminController@editFormWeb')->name('edit_web');

    Route::post('web/edit/{id}', 'Admin\AdminController@editWeb');

    Route::get('user', 'Admin\AdminController@listUser')->name('list_member');

    Route::get('comment', 'Admin\CommentController@listComment')->name('list_comment');

    Route::get('comment/{id}', 'Admin\CommentController@removeComment')->name('remove_comment');

    Route::get('comment/reply/{id}', 'Admin\CommentController@replyComment')->name('reply_comment');

    Route::post('comment/reply/{id}', 'Admin\CommentController@addReplyComment');

    Route::get('comment/reply/remove/{id}', 'Admin\CommentController@removeReplyComment')->name('removereply_comment');
    //promo
    Route::get('promo', 'Admin\PromoController@listPromo')->name('list_promo');

    Route::get('promo/add', 'Admin\PromoController@newPromo')->name('add_promo');

    Route::post('promo/add', 'Admin\PromoController@addNewPromo');

    //cart
    Route::get('list_cart', 'Admin\CartController@index')->name('list_cart');

    Route::get('decline/{id}', 'Admin\CartController@decline')->name('decline');

    Route::get('accept/{id}', 'Admin\CartController@accept')->name('accept');

    Route::get('delivery_cart/{id}', 'Admin\CartController@delivery')->name('delivery');

    Route::post('delivery_cart/{id}', 'Admin\CartController@addDelivery');

    //product
    Route::get('edit_product', 'Admin\CartController@editProduct')->name('edit_product');
});

Route::group(
    ['prefix' => 'member',
        'as' => 'member.',
        'middleware' => 'auth'], function (){
    Route::get('profile', 'User\UserController@profile')->name('profile');
    Route::post('profile', 'User\UserController@editProfile');
    Route::get('list_cart', 'User\PageController@showListCart')->name('list_cart');
    Route::post('/comment', 'User\PageController@comment')->name('comment');
    Route::post('comment/reply', 'User\PageController@replyComment')->name('replycomment');
    Route::post('promo', 'User\PageController@promo')->name('promo');
    Route::post('add_item_to_cart', 'User\CartController@addItem')->name('add_item');
    Route::get('remove_item_to_cart/{id}', 'User\CartController@removeItem')->name('remove_item');
    Route::get('remove_order/{id}', 'User\CartController@removeOrder')->name('remove_order');
    Route::post('list_cart', 'User\PageController@promo')->name('promo');
    Route::post('order', 'User\CartController@order')->name('order');
    Route::post('show_form_order', 'User\CartController@showFormOrder')->name('show_form_order');
    Route::post('new_order', 'User\CartController@newOrder')->name('new_order');
    Route::get('history', 'User\UserController@history')->name('history');
    Route::get('favorite', 'User\UserController@favorite')->name('favorite');
    Route::get('add_to_favorite/{id}', 'User\UserController@addToFavorite')->name('add_to_favorite');
});

Auth::routes();
// brand
Route::get('/proDetail', 'User\PageController@proDetail');

Route::post('new_account', 'User\UserController@newAccount')->name('new_account');

Route::get('sign_up_false', 'User\UserController@signUpFalse')->name('sign_up_false');

Route::get('admin_home', 'Admin\AdminController@home')->name('admin_home');

Route::get('login', 'User\UserController@login')->name('login');

Route::get('/', 'User\PageController@index')->name('home');

Route::get('/search', 'User\PageController@search')->name('search');

Route::get('/detail/{id}', 'User\PageController@detail')->name('detail');

Route::get('/cate/{id}', 'User\PageController@cate')->name('cate');

Route::get('/about', 'User\PageController@about')->name('about');

Route::get('/contact', 'User\PageController@contact')->name('contact');

Route::post('/contact', 'User\PageController@addcontact');

Route::post('login', 'Auth\LoginController@login');

Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('login_admin', 'Auth\LoginController@loginAdminForm')->name('login_admin');

Route::post('login_admin', 'Auth\LoginController@loginAdmin');

Route::get('logout_admin', 'Auth\LoginController@logoutAdmin')->name('logout_admin');

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


// contact
Route::get('/admin1/contact', function () {
    return view('admin/contact/index');
});

// customer
Route::get('/admin1/customer', function () {
    return view('admin/customer/index');
});


// websetting
Route::get('/admin1/websetting', function () {
    return view('admin/websetting/index');
});

Route::get('/admin1/websetting/edit', function () {
    return view('admin/websetting/edit');
});
