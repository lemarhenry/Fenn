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


// Route::get('/portfolio', 'Fnhome\PortfolioController@index')->name('portfolio');

Route::get('/carousel', 'Fnhome\ComponentsController@carouselImages');
Route::get('/testimonial', 'Fnhome\ComponentsController@testimonial');
Route::get('/portfolio', 'Fnhome\PortfolioController@portfolio');
Route::get('/team', 'TeamController@Team');

Route::get('/admin', 'DashboardController@index')->name('dashboard');

Route::get('/view/testimonials', 'admin\ComponentsController@tvpage')->name('testimonial.view');
Route::get('/create/testimonial', 'admin\ComponentsController@tcpage')->name('testimonial.create');
Route::post('/create/testimonial', 'admin\ComponentsController@testimonialSave');
Route::delete('/delete/testimonial/{id}', 'admin\ComponentsController@testimonialDelete');
Route::get('/single/testimonial/{id}', "admin\ComponentsController@testimonialSingle");
Route::put('/single/testimonial/{id}', "admin\ComponentsController@testimonialUpdate");

Route::get('/edit/admin', 'admin\AdminController@edit')->name('admin.edit');
Route::get('/admin/data', 'admin\AdminController@AdminData');
Route::put('/admin/update', 'admin\AdminController@adminUpdate');
Route::post('/admin/password/check', 'admin\AdminController@adminCheckpassword');
Route::put("/admin/update/password", 'admin\AdminController@updatePassword');

Route::get('/view/carousel', 'admin\ComponentsController@Cvpage')->name('carousel.view');
Route::get('/create/carousel', 'admin\ComponentsController@Ccpage')->name('carousel.create');
Route::post('/create/carousel', 'admin\ComponentsController@carouselSave');
Route::delete('/delete/carousel/{id}', 'admin\ComponentsController@carouselDelete');
Route::get('/single/carousel/{id}', 'admin\ComponentsController@carouselSingle');
Route::post('/single/carousel/{id}', 'admin\ComponentsController@carouselUpdate');

Route::get('/view/portfolio', 'admin\PortfolioController@Pvpage')->name('portfolio.view');
Route::get('/create/portfolio', 'admin\PortfolioController@Pcpage')->name('portfolio.create');
Route::post('/create/portfolio', 'admin\PortfolioController@portfolioSave');
Route::post('/create/portimg/{id}', 'admin\PortfolioController@portImg');
Route::delete("/delete/portfolio/{id}", 'admin\PortfolioController@portfolioDelete');
Route::get('/single/portfolio/{id}', 'Fnhome\PortfolioController@single');
Route::post('/single/portfolio/{id}', 'admin\PortfolioController@portfolioUpdate');

Route::get('/portfolio/images/{id}', 'admin\PortimgController@portImgs');
Route::get('/portfolio/image/{id}', 'admin\PortimgController@portImg');
Route::delete('/delete/image/{id}', 'admin\PortimgController@delete');

Route::get('/messages', 'admin\MessagesController@Messages');
Route::get('/view/message', 'admin\MessagesController@Mvpage')->name('message.view');
Route::put('/seen/message/{id}', 'admin\MessagesController@seen');
Route::get('/single/message/{id}', 'admin\MessagesController@messageSingle');
Route::delete('/delete/message/{id}', 'admin\MessagesController@messageDelete');
Route::post('/search/messages', 'admin\MessagesController@messageSearch');

Route::get('/view/job', 'admin\JobController@Jvpage')->name('job.view');
Route::get('/create/job', 'admin\JobController@Jcpage')->name('job.create');
Route::post('/create/job', 'admin\JobController@jobSave');
Route::get('/single/job/{id}', 'admin\JobController@jobSingle');
Route::put('/single/job/{id}', 'admin\JobController@jobUpdate');
Route::delete('/delete/job/{id}', 'admin\JobController@jobDelete');

Route::get('/jobs', 'Fnhome\JobController@index');

Route::get('/view/digify', 'admin\DigifyDanPriceController@Dvpage')->name("digify.view");
Route::post('/update/digify', 'admin\DigifyDanPriceController@digifyUpdate');
Route::get('/digify', 'admin\DigifyDanPriceController@digify');
Route::post('/update/dan', 'admin\DigifyDanPriceController@danUpdate');
Route::get('/dan', 'admin\DigifyDanPriceController@Dan');

Route::get('/view/team', 'admin\TeamController@Tvpage')->name('team.view');
Route::get('/create/team', 'admin\TeamController@Tcpage')->name('team.create');
Route::post('/create/team', 'admin\TeamController@teamSave');
Route::delete('/delete/team/{id}', 'admin\TeamController@teamDelete');

Auth::routes(['register' => false]);
