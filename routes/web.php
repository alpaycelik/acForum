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


use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@get_index');
Route::get('/forum/{slug}', 'HomeController@get_forum')->name('category.list');
Route::get('/konu/ekle/{id}', 'HomeController@get_topic_add')->name('topic.add');
Route::post('/konu/ekle/{id}', 'HomeController@post_topic_add')->name('topic.add.ajax');
Route::get('/konu/{slug}', 'HomeController@get_topic_view')->name('topic.view');

Route::group(['prefix' => 'admin'], function (){
    Route::get('/', 'AdminController@get_index')->name('admin.index');
    Route::get('/category', 'AdminController@get_category_list')->name('admin.category.list');
    Route::get('/category/add', 'AdminController@get_category_add')->name('admin.category.add.get');
    Route::post('/category/add', 'AdminController@post_category_add');
    Route::get('/category/edit/{slug}', 'AdminController@get_category_edit')->name('admin.category.edit');
    Route::post('/category/edit/{slug}', 'AdminController@post_category_edit');
    Route::post('/category/delete', 'AdminController@post_category_delete');
    Route::get('/category/sort', 'AdminController@get_category_sort')->name('admin.category.sort');
    Route::post('/category/sort', 'AdminController@post_category_sort');
});


// Auth::routes();
// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/home', 'HomeController@index')->name('home');