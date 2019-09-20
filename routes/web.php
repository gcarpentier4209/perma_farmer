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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['admin'])->group(function () {
    Route::get('/admin/dashboard', 'AdminController@showAdminDashboard')->name('admin.dashboard');;
    Route::get('/admin/clients', 'AdminController@showClients')->name('admin.clients');;
    Route::get('/admin/orders/{clientId}', 'AdminController@showAllOrders')->name('admin.show.orders');; // client info and all orders
    Route::get('/admin/order/{orderId}', 'AdminController@showOrder')->name('admin.show.order');; // order detail

    Route::post('/admin/orders/{orderId}', 'AdminController@deleteOrder')->name('admin.delete.order');;

    Route::patch('/admin/order/{orderId}', 'AdminController@editOrder')->name('admin.edit.order');; // edit an order
    Route::post('/admin/order/{orderId}', 'AdminController@saveOrder')->name('admin.save.order');; // save order status

    Route::get('/stock', 'AdminController@showStocks')->name('stock');;
    Route::get('/admin/orders', 'AdminController@showOrders')->name('admin.orders');;
    Route::get('/stock', 'StockController@index')->name('stock');;
    Route::get('/product', 'AdminController@showProducts')->name('product');;

    Route::resource('products', 'ProductController');
    Route::resource('stocks', 'StockController');
    Route::resource('orders', 'OrderController');
});

Auth::routes();

    Route::get('/accueil', 'HomeController@index')->name('home');
    Route::get('/abonnement', 'SubscriptionController@create')->name('create.subscription');
    Route::post('/abonnement', 'SubscriptionController@store')->name('store.subscription');

    //Route::get('/nos produits', 'HomeController@index')->name('home');
    //Route::get('/mon_profil', 'HomeController@index')->name('home');

Route::resource('user_subscriptions', 'User\SubscriptionController');
Route::resource('user_subscription_options', 'SubscriptionOptionController');
Route::resource('user_orders', 'User\OrderController');





