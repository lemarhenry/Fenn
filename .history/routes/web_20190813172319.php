<?php
// use Illuminate\Routing\Route;
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

Route::get('/', 'PagesController@index')->name('landing');

Route::get('/fnhome', 'Fnhome\HomeController@index')->name('fnhome');

Route::get('/about', 'PagesController@about')->name('about');



Route::get('/contact', 'Fnhome\ContactController@create')->name('contact');
Route::post('/contact', 'Fnhome\ContactController@store');
Route::get('/admin', 'DashboardController@index')->name('admin');

Route::get('/homeSecurity', 'PagesController@homeSecurity')->name('homeSecurity');

Route::get('/networking', 'Fnhome\NetworkController@index')->name('networking');

Route::get('/corporate', 'Fnhome\CorporateController@index')->name('corporate');

Route::get('/website', 'Fnhome\WebPageController@index')->name('website');

Route::get('/repair', 'Fnhome\RepairPageController@index')->name('repair');


Route::get('/portfolio','Fnhome\PortfolioController@index')->name('portfolio');

Route::get('/carousel', 'Fnhome\ComponentsController@carouselImages');
Route::get('/testimonial', 'Fnhome\ComponentsController@testimonial');

Route::get('/admin','DashboardController@index');

Route::get('/create/testimonial', 'admin\ComponentsController@tcpage')->name('testimonial.create');
Route::post('/create/testimonial', 'admin\ComponentsController@testimonialSave');
Auth::routes();
