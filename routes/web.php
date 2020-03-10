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

// Frontend site
Route::get('/','HomeController@index');
Route::get('contact_page/','HomeController@contact_page');

Route::get('/product_by_category/{category_id}','HomeController@show_product_by_category');
Route::get('/product_by_manufacture/{manufacture_id}','HomeController@show_product_by_manufacture');
Route::get('/view_product/{product_id}','HomeController@view_product_by_id');
Route::get('/search','HomeController@search_product');

Route::post('/add_to_cart','CartController@add_to_cart');
Route::get('/show-cart','CartController@show_cart');
Route::get('/delete-cart/{rowId}','CartController@delete_cart');
Route::post('/update-cart','CartController@update_cart');

//Checkout Route

Route::get('/login-check','CheckoutController@login_check');
Route::post('/customer_registration','CheckoutController@customer_registration');
Route::get('/checkout','CheckoutController@checkout');
Route::post('/save-shipping','CheckoutController@save_shipping');
Route::post('/customer-login','CheckoutController@customer_login');
Route::get('/customer-logout','CheckoutController@customer_logout');

Route::get('/payment','CheckoutController@payment');
Route::post('/order_place','CheckoutController@order_place');
Route::get('/manage-order','CheckoutController@manage_order');
Route::get('/view-order/{order_id}','CheckoutController@view_order');
Route::get('/delete_order/{order_id}','CheckoutController@delete_order');




//Backend route
Route::get('/logout','SuperAdminController@logout');
Route::get('/admin','AdminController@index');
Route::get('/dashboard','SuperAdminController@index');
Route::post('/admin','AdminController@dashboard');

//Category Route
Route::get('/add-category','CategoryController@index');
Route::get('/all-category','CategoryController@all_category');
Route::post('/save-category','CategoryController@save_category');
Route::get('/edit_category/{category_id}','CategoryController@edit_category');
Route::post('/update_category/{category_id}','CategoryController@update_category');
Route::get('/delete_category/{category_id}','CategoryController@delete_category');
Route::get('/unactive_category/{category_id}','CategoryController@unactive_category');
Route::get('/active_category/{category_id}','CategoryController@active_category');

// Manufacture Route

Route::get('/add-manufacture','ManufactureController@index');
Route::get('/all-manufacture','ManufactureController@all_manufacture');
Route::post('/save-manufacture','ManufactureController@save_manufacture');
Route::get('/edit_manufacture/{manufacture_id}','ManufactureController@edit_manufacture');
Route::post('/update_manufacture/{manufacture_id}','ManufactureController@update_manufacture');
Route::get('/delete_manufacture/{manufacture_id}','ManufactureController@delete_manufacture');
Route::get('/unactive_manufacture/{manufacture_id}','ManufactureController@unactive_manufacture');
Route::get('/active_manufacture/{manufacture_id}','ManufactureController@active_manufacture');

//Product Route

Route::get('/add-product','ProductController@index');
Route::post('/save-product','ProductController@save_product');
Route::get('/all-product','ProductController@all_product');
Route::get('/unactive_product/{product_id}','ProductController@unactive_product');
Route::get('/active_product/{product_id}','ProductController@active_product');
Route::get('/edit_product/{product_id}','ProductController@edit_product');
Route::get('/delete_product/{product_id}','ProductController@delete_product');
Route::post('/update_product/{product_id}','ProductController@update_product');

//Slider Route
Route::get('/add-slider','SliderController@index');
Route::get('/all-slider','SliderController@all_slider');
Route::post('/save-slider','SliderController@save_slider');
Route::get('/unactive_slider/{slider_id}','SliderController@unactive_slider');
Route::get('/active_slider/{slider_id}','SliderController@active_slider');
Route::get('/delete_slider/{slider_id}','SliderController@delete_slider');

