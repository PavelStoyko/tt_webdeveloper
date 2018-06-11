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

Route::get('/', 'HomeController@index');
Route::get('/admin', function ()  {
   if (Auth::check()){  return view('/admin');}
   elseif (Auth::guest())return view('auth/register');
   else return view('auth/login');
});

Route::resource('products', 'ProductController');
Route::resource('categories', 'CategoryController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('admin/products', 'Admin\\ProductsController');
Route::resource('admin/products', 'Admin\\ProductsController');
Route::resource('admin/products', 'Admin\\ProductsController');
Route::resource('admin/products', 'Admin\\ProductsController');
Route::resource('admin/categories', 'Admin\\CategoriesController');
Route::resource('admin/categories', 'Admin\\CategoriesController');
Route::resource('admin/categories', 'Admin\\CategoriesController');
Route::resource('admin/products', 'Admin\\ProductsController');
Route::resource('admin/categories', 'Admin\\CategoriesController');