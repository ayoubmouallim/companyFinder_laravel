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

Route::get('/home', 'CompanyController@getCategories')->name('home');


Route::post('category', 'CompanyController@getCompany')->name('cotegory');


Route::get('add-company', 'CompanyController@addCompany')->name('add-company');

Route::post('save-company', 'CompanyController@saveCompany')->name('save-company');
