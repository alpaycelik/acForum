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

Route::get('/', function () {
    return view('frontend.index');
});

Route::group(['prefix' => 'admin'], function (){
    Route::get('/', 'AdminController@get_index')->name('admin.index');
    Route::get('/kategori', 'AdminController@get_category_list')->name('admin.category.list');
    Route::get('/kategori/ekle', 'AdminController@get_category_add')->name('admin.category.add.get');
    Route::post('/kategori/ekle', 'AdminController@post_category_add');
    Route::get('/kategori/duzenle/{slug}', 'AdminController@get_category_edit')->name('admin.category.edit');
    Route::post('/kategori/duzenle/{slug}', 'AdminController@post_category_edit');
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