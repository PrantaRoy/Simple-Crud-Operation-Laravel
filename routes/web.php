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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/create', 'EmployeController@create')->name('create');
Route::post('/store', 'EmployeController@store')->name('store');
Route::get('/index', 'EmployeController@index')->name('index');


Route::get('/entry', 'CostController@entry')->name('entry');
Route::post('/save', 'CostController@save')->name('save');
Route::get('/show', 'CostController@show')->name('show');

//Route::group([ 'prefix'=>'admin', 'middleware'=>'auth', 'namespace'=>'admin'], function (){

   // Route::get('dashboard' , 'DashboardController@index')->name('admin.dashboard');
//Route::resource('')


