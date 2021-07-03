<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Tourist\LoginController;
use App\Http\Controllers\Tourist\DashboardController;
use App\Http\Controllers\Tourist\BookHotelController;
use App\Http\Controllers\Tourist\LogoutController;
use App\Http\Controllers\hotel\AddHotelController;

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

Route::get('/home', 'HomeController@home')->name('home');
//  Route::get('/', function () {
//      return view('login.index');
//  });
Route::get('/logout', 'LogoutController@index')->name('logout');

Route::get('/', 'LoginController@login')->name('login');
Route::post('/', 'LoginController@verify')->name('verify');
Route::group(['middleware' => ['sess']], function () {

    Route::get('/index', 'dashboardController@index');
    Route::get('/dashboard', 'dashboardController@dashboard')->name('dashboard');
    Route::get('/EmployeeList', 'EmployeeController@index');
    Route::get('/inbox', 'MessageBoxController@inbox')->name('inbox');
    Route::get('/vehicle', 'VehicleController@vehicle')->name('vehicle');
    Route::post('/vehicle', 'VehicleController@submit');

    Route::get('/guide', 'GuideController@guide')->name('guide');
    Route::post('/guide', 'GuideController@submit');

    // Route::post('/user/{id}', 'UserController@update');
    Route::get('/hotel', 'HotelController@index');
    Route::get('/hotel/edit/{id}', 'HotelController@edit');
    Route::get('/hotel/update/{id}', 'HotelController@update');
    Route::delete('/hotel/destroy/{id}', 'HotelController@destroy');


    Route::get('/report', 'ReportController@report');
    Route::get('/report/create', 'ReportController@create');
    Route::post('/report/create', 'ReportController@store');



    Route::get('/message', 'MessageBoxController@message')->name('message');
    Route::get('/compose', 'MessageBoxController@compose')->name('compose');
    Route::get('/msg', 'MessageBoxController@msg')->name('msg');
    Route::get('/search', 'MessageBoxController@search')->name('search');
    Route::get('/calendar', 'MessageBoxController@calendar')->name('calendar');
    Route::get('/data', 'TableController@data')->name('data');
    Route::get('/export', 'TableController@export')->name('export');
});
Route::get('/', [HomeController::class,'index'])->name('homePage');
Route::get('/listing', [HomeController::class,'hotelList'])->name('hotelList');
Route::get('/listing-single', [HomeController::class,'hotelSingleList'])->name('hotelSingleList');
Route::get('/listing-single/{id}', [HomeController::class,'hotelSingleListShow'])->name('hotelSingleListShow');
Route::get('/booking-single/{id}', [BookHotelController::class,'index'])->name('bookHotel');
Route::post('/booking-single/{id}', [BookHotelController::class,'store'])->name('bookHotel');
Route::get('/contacts', [HomeController::class,'contacts'])->name('contactPage');
Route::get('/blogs', [HomeController::class,'blogs'])->name('blogPage');
Route::get('/blog-single', [HomeController::class,'blogSingle'])->name('singleBlogPage');

//Route::post('/', [LoginController::class,'verify'])->name('homePage');

Route::get('/logout', [LogoutController::class,'index'])->name('logout');
Route::get('/login', [LoginController::class,'login'])->name('login');
Route::post('/login', [LoginController::class,'verify'])->name('login');
Route::get('/registration', [LoginController::class,'registration'])->name('registration');
Route::post('/registration', [LoginController::class,'registrationVerify'])->name('registration');

Route::group(['middleware'=>['sess']],function(){

    Route::get('/home', [DashboardController::class,'index'])->name('home');
    //Route::get('/home', [DashboardController::class,'view'])->name('home');
    Route::get('/dashboard-myprofile', [DashboardController::class,'profile'])->name('dashboard');
    Route::post('/dashboard-myprofile', [DashboardController::class,'update'])->name('dashboard');
    Route::get('/dashboard-messages', [DashboardController::class,'dashboardMessages'])->name('dashboardMessages');
    Route::get('/dashboard-bookings', [DashboardController::class,'dashboardBookings'])->name('dashboardBookings');
    Route::get('/delete/{id}', [DashboardController::class,'delete']);
    Route::get('/dashboard-review', [DashboardController::class,'dashboardReview'])->name('dashboardReview');

});

Route::get('/add-hotel', [AddHotelController::class,'index'])->name('addHotel');
Route::post('/add-hotel', [AddHotelController::class,'create'])->name('addHotel');




