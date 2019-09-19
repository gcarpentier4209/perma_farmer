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
    Route::get('/admin/order/{clientId}', 'AdminController@showOrder')->name('admin.order');;
    Route::patch('/admin/order/{clientId}', 'AdminController@editOrder')->name('admin.order');;
    Route::post('/admin/order/{clientId}', 'AdminController@saveOrder')->name('admin.order');;

    Route::get('/stock', 'AdminController@showStocks')->name('stock');;


    Route::resource('stocks', 'StockController');
});

Auth::routes();

    Route::get('/accueil', 'HomeController@index')->name('home');
    Route::get('/abonnement', 'SubscriptionController@create')->name('create.subscription');
    Route::post('/abonnement', 'SubscriptionController@store')->name('store.subscription');

    //Route::get('/nos produits', 'HomeController@index')->name('home');
    //Route::get('/mon_profil', 'HomeController@index')->name('home');






