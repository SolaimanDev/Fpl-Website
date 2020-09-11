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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::get('/contact', 'HomeController@contact');
Route::post('/contact-us', 'HomeController@contactus');
Route::get('/service', 'HomeController@service');
Route::get('/clients', 'HomeController@clients');
Route::get('/machinary', 'HomeController@machine');
Route::get('/gallery', 'HomeController@gallery');
Route::get('/product-details/{id}/{slug}','HomeController@productDetails');
Route::get('/category-by-product/{id}','HomeController@categoryByProducts');
Route::get('/ajax-search','HomeController@search');


Route::get('/dashboard','DashboardController@index');
Route::get('/settings','DashboardController@setting');
Route::post('/update-settings','DashboardController@setting_update');
Route::resource('/menu', 'MenuController');
Route::post('/menu/submenu','MenuController@submenu_store');
Route::get('/submenu-edit/{id}','MenuController@submenu_edit');
// Route::post('/submenu-delete/{id}','MenuController@submenuDelete');
Route::post('submenu-delete/{id}','MenuController@submenuDelete');
Route::post('/submenu-update/{id}','MenuController@update_submenu');
Route::resource('/slider', 'SliderController');
Route::resource('/category', 'CategoryController');
Route::resource('/product', 'ProductController');

Route::resource('/content', 'ContentController');
Route::resource('/user', 'UserController');
Route::get('/email-list','UserController@emailList');