<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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
Route::get('/home','HomeController@home')->name('home');
//  Route::get('/', function () {
//      return view('login.index');
//  });
Route::get('/logout','LogoutController@index' )->name('logout');

Route::get('/','LoginController@login' )->name('login');
Route::post('/','LoginController@verify' )->name('verify');
Route::group(['middleware'=>['sess']],function(){
    
Route::get('/index','dashboardController@index' );
Route::get('/dashboard','dashboardController@dashboard' )->name('dashboard');
Route::get('/EmployeeList','EmployeeController@index');
Route::get('/inbox','MessageBoxController@inbox')->name('inbox');
Route::get('/message','MessageBoxController@message')->name('message');
Route::get('/compose','MessageBoxController@compose')->name('compose');
Route::get('/msg','MessageBoxController@msg')->name('msg');
Route::get('/search','MessageBoxController@search')->name('search');
Route::get('/calendar','MessageBoxController@calendar')->name('calendar');
Route::get('/data','TableController@data')->name('data');
Route::get('/export','TableController@export')->name('export');

Route::get('/add_hotel','AddHotelController@index')->name('add_hotel');
Route::post('/add_hotel','AddHotelController@create')->name('add_hotel');

    
Route::get('/maintaince','EmployeeController@maintaince')->name('maintaince');
Route::post('/maintaince','EmployeeController@submit');

Route::get('/adHotel','AdHotelController@adHotel')->name('adHotel');
Route::post('/adHotel','AdHotelController@submit');

Route::get('/AllHotel','AllHotelController@index' );
Route::get('/AllHotel/edit/{id}','AllHotelController@edit' );
Route::get('/AllHotel/update/{id}','AllHotelController@update' );
Route::delete('/AllHotel/destroy/{id}','AllHotelController@destroy' );


Route::get('/report', 'ReportController@report');
Route::get('/report/create', 'ReportController@create');
Route::post('/report/create', 'ReportController@store');

Route::get('/AddressBook','AddressBookController@index' );
Route::get('/AddressBook/edit/{id}','AddressBookController@edit' );
Route::get('/AddressBook/update/{id}','AddressBookController@update' );
Route::delete('/AddressBook/destroy/{id}','AddressBookController@destroy' );





});