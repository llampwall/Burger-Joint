<?php

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


// static pages
Route::get('/', 'StaticPagesController@home');
Route::get('/menu', 'StaticPagesController@menu');
Route::get('/menu/{slug}', 'StaticPagesController@singleMenu');
Route::get('/reservations', 'StaticPagesController@reservations');
Route::get('/offers', 'StaticPagesController@offers');
Route::get('/contact', 'StaticPagesController@contact');
Route::get('/about', 'StaticPagesController@about');


// admin
Route::get('/admin', 'admin\AdminController@dashboard');

// admin food categories
Route::get('/admin/food-categories', 'admin\FoodCategoriesController@index');
Route::get('/admin/food-categories/create', 'admin\FoodCategoriesController@create');
Route::get('/admin/food-categories/{id}/edit', 'admin\FoodCategoriesController@edit');

// admin food items
Route::get('/admin/food-items', 'admin\FoodItemsController@index');
Route::get('/admin/food-items/create', 'admin\FoodItemsController@create');

// admin customers
Route::get('/admin/emails', 'admin\CustomersController@allEmails');
Route::get('/admin/reservations', 'admin\CustomersController@allReservations');

// admin user auth
Route::get('/admin/register', function () {
    return view('admin/register');
});

Route::get('/admin/login', function () {
    return view('admin/login');
});



