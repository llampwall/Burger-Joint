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

// admin food categories
Route::get('/admin/food-categories', 'admin\FoodCategoriesController@index');
Route::get('/admin/food-categories/create', 'admin\FoodCategoriesController@create');
Route::post('/admin/food-categories', 'admin\FoodCategoriesController@store');
Route::get('/admin/food-categories/{id}/edit', 'admin\FoodCategoriesController@edit');
Route::put('/admin/food-categories/{id}', 'admin\FoodCategoriesController@update');
Route::get('/admin/food-categories/{id}/delete', 'admin\FoodCategoriesController@delete');

// admin food items
Route::get('/admin/food-items', 'admin\FoodItemsController@index');
Route::get('/admin/food-items/create', 'admin\FoodItemsController@create');
Route::post('/admin/food-items', 'admin\FoodItemsController@store');
Route::get('/admin/food-items/{id}/edit', 'admin\FoodItemsController@edit');
Route::put('/admin/food-items/{id}', 'admin\FoodItemsController@update');
Route::get('/admin/food-items/{id}/delete', 'admin\FoodItemsController@delete');

// admin members
Route::get('/admin/members', 'admin\MembersController@index');
Route::get('/admin/members/{id}/edit', 'admin\MembersController@edit');
Route::put('/admin/members/{id}', 'admin\MembersController@update');
Route::get('/admin/members/{id}/delete', 'admin\MembersController@delete');

//admin reservations
Route::get('/admin/reservations', 'admin\ReservationController@index');
Route::get('/admin/reservations/{id}/edit', 'admin\ReservationController@edit');
Route::put('/admin/reservations/{id}', 'admin\ReservationController@update');
Route::get('/admin/reservations/{id}/delete', 'admin\ReservationController@delete');

// admin users
Route::get('/admin/users', 'admin\UsersController@index');
Route::get('/admin/users/create', 'admin\UsersController@create');
Route::post('/admin/users', 'admin\UsersController@store');
Route::get('/admin/users/{id}/edit', 'admin\UsersController@edit');
Route::put('/admin/users/{id}', 'admin\UsersController@update');
Route::get('/admin/users/{id}/delete', 'admin\UsersController@delete');

// admin settings
Route::get('/admin/settings/general', 'admin\SettingController@general');
Route::post('/admin/settings/general', 'admin\SettingController@saveGeneral');
Route::get('/admin/settings/seo', 'admin\SettingController@seo');
Route::post('/admin/settings/seo', 'admin\SettingController@saveSeo');
Route::get('/admin/settings/social', 'admin\SettingController@social');
Route::post('/admin/settings/social', 'admin\SettingController@saveSocial');

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