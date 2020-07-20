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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/p','CompaniesController@store');

Route::get('/profile/p/{company}', 'EmployeesController@index')->name('profile.show');

Route::get('/profile/p/{employees}', 'EmployeesController@index')->name('profile.show');

Route::post('/profile/p','EmployeesController@store');
