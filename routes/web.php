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
    return view('login.index');
});
Route::get('/Login', 'Auth\LoginController@Login')->name('login');
Route::post('/Login', 'Auth\LoginController@confirm')->name('login.confirm');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard', function () {
        return view('main.dashboard');
    });
    Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
    Route::get('/EmployeeList','EmployeeController@index');
    Route::get('/compose','MailBoxController@compose' )->name('compose');
    Route::get('/inbox','MailBoxController@inbox' )->name('inbox');
    Route::get('/Mail/Message','MailBoxController@message' )->name('message');
    Route::get('/Message','MessageController@index' )->name('Message');
    Route::get('/Calender','TemporalController@calender' )->name('calender');
    Route::get('/EUserList','TemporalController@EUserList' )->name('EUserList');
    Route::get('/Employee/Create','TemporalController@EUseeCreate' )->name('EUseeCreate');
    Route::get('/Employee_gorup','TemporalController@EGrpList' )->name('EGrpList');
    Route::get('/Employee/Group_Create','TemporalController@EGrpCreate' )->name('EGrpCreate');
    Route::get('/Tourist','TemporalController@tourist' )->name('tourist');
    Route::get('/Tourist/Transaction','TemporalController@touristTransaction' )->name('touristTransaction');
    Route::get('/Employee/Transaction','TemporalController@employeeTransaction' )->name('employeeTransaction');
    Route::get('/Hotel/Transaction','TemporalController@hotelTransaction' )->name('hotelTransaction');
    Route::get('/Vehicle/Transaction','TemporalController@vehicleTransaction' )->name('vehicleTransaction');
    Route::get('/Payment/History','TemporalController@PaymentHistory' )->name('PaymentHistory');
    Route::get('/Payment/New','TemporalController@NewPayment' )->name('NewPayment');
});