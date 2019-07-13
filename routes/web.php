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

Route::get('/','PagesController@index')->name('landing');

Route::get('/fnhome','Fnhome\HomeController@index')->name('fnhome');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/networking','Fnhome\NetworkController@index')->name('Networking');

Route::get('/corporate','Fnhome\CorporateController@index')->name('corporate');

Route::get('/admin',function(){
    return view('admin.index');
});
