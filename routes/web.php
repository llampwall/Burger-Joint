<?php

use Illuminate\Support\Facades\Route;
use App\GeneralSetting;
use App\SeoSetting;
use App\SocialSetting;


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


// static pages
Route::get('/', 'StaticPagesController@home');
Route::get('/menu', 'StaticPagesController@menu');
Route::get('/menu/{slug}', 'StaticPagesController@singleMenu');
Route::get('/reservations', 'StaticPagesController@reservations');
Route::post('/reservations', 'StaticPagesController@reserve');
Route::get('/offers', 'StaticPagesController@offers');
Route::post('/offers', 'StaticPagesController@registerMember');
Route::get('/contact', 'StaticPagesController@contact');
Route::get('/about', 'StaticPagesController@about');
Route::get('/offers/thankyou', 'StaticPagesController@thankYou');
Route::get('/reservations/reserved', 'StaticPagesController@reserved');


// admin
Route::get('/admin', 'admin\AdminController@dashboard');
Route::get('/admin/est_daily_revenue', 'admin\AdminController@dailyRevenueLast30');

// admin food categories
Route::get('/admin/food-categories', 'admin\FoodCategoriesController@index')->middleware('role:Admin,Employee');
Route::get('/admin/food-categories/create', 'admin\FoodCategoriesController@create')->middleware('role:Admin');
Route::post('/admin/food-categories', 'admin\FoodCategoriesController@store')->middleware('role:Admin');
Route::get('/admin/food-categories/{id}/edit', 'admin\FoodCategoriesController@edit')->middleware('role:Admin');
Route::put('/admin/food-categories/{id}', 'admin\FoodCategoriesController@update')->middleware('role:Admin');
Route::get('/admin/food-categories/{id}/delete', 'admin\FoodCategoriesController@delete')->middleware('role:Admin');

// admin food items
Route::get('/admin/food-items', 'admin\FoodItemsController@index')->middleware('role:Admin,Employee');
Route::get('/admin/food-items/create', 'admin\FoodItemsController@create')->middleware('role:Admin');
Route::post('/admin/food-items', 'admin\FoodItemsController@store')->middleware('role:Admin');
Route::get('/admin/food-items/{id}/edit', 'admin\FoodItemsController@edit')->middleware('role:Admin');
Route::put('/admin/food-items/{id}', 'admin\FoodItemsController@update')->middleware('role:Admin');
Route::get('/admin/food-items/{id}/delete', 'admin\FoodItemsController@delete')->middleware('role:Admin');

// admin members
Route::get('/admin/members', 'admin\MembersController@index')->middleware('role:Admin,Employee');
Route::get('/admin/members/{id}/edit', 'admin\MembersController@edit')->middleware('role:Admin');
Route::put('/admin/members/{id}', 'admin\MembersController@update')->middleware('role:Admin');
Route::get('/admin/members/{id}/delete', 'admin\MembersController@delete')->middleware('role:Admin');

//admin reservations
Route::get('/admin/reservations', 'admin\ReservationController@index')->middleware('role:Admin,Employee');
Route::get('/admin/reservations/{id}/edit', 'admin\ReservationController@edit')->middleware('role:Admin');
Route::put('/admin/reservations/{id}', 'admin\ReservationController@update')->middleware('role:Admin');
Route::get('/admin/reservations/{id}/delete', 'admin\ReservationController@delete')->middleware('role:Admin');

// admin users
Route::get('/admin/users', 'admin\UsersController@index')->middleware('role:Admin');
Route::get('/admin/users/create', 'admin\UsersController@create')->middleware('role:Admin');
Route::post('/admin/users', 'admin\UsersController@store')->middleware('role:Admin');
Route::get('/admin/users/{id}/edit', 'admin\UsersController@edit')->middleware('role:Admin');
Route::put('/admin/users/{id}', 'admin\UsersController@update')->middleware('role:Admin');
Route::get('/admin/users/{id}/delete', 'admin\UsersController@delete')->middleware('role:Admin');

// admin settings
Route::get('/admin/settings/general', 'admin\SettingController@general')->middleware('role:Admin');
Route::post('/admin/settings/general', 'admin\SettingController@saveGeneral')->middleware('role:Admin');
Route::get('/admin/settings/seo', 'admin\SettingController@seo')->middleware('role:Admin');
Route::post('/admin/settings/seo', 'admin\SettingController@saveSeo')->middleware('role:Admin');
Route::get('/admin/settings/social', 'admin\SettingController@social')->middleware('role:Admin');
Route::post('/admin/settings/social', 'admin\SettingController@saveSocial')->middleware('role:Admin');

// admin user auth
Route::get('/admin/register', function () {
    return view('admin/register');
});

Route::get('/admin/login', function () {
    return view('admin/login');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// pass the settings database table data to all pages
View::composer(['home', 'pages/about', 'pages/contact', 'pages/offers', 'pages/reservations', 'pages/reserved', 'pages/thankyou', 'menu/index', 'menu/single-menu'], function($view) {
    $generalsettings = GeneralSetting::find(1);
    $socialsettings = SocialSetting::find(1);
    $seosettings = SeoSetting::find(1);

    $view->with('settings', [
        'general' => $generalsettings,
        'social' => $socialsettings, 
        'seo' => $seosettings
    ]);
});