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

Auth::routes();


Route::get('/admin_home', 'AdminController@admin')
    ->middleware('admin')
    ->name('dashboard');


Route::get('/accueil', 'HomeController@index')->name('home');

//Route::get('/nos produits', 'HomeController@index')->name('home');
//
//Route::get('/mon_profil', 'HomeController@index')->name('home');


