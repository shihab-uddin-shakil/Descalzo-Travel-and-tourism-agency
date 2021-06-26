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
    Route::get('/employee_categories','EmployeeCategoryController@index' );
    Route::get('/employee_categories/create','EmployeeCategoryController@create' );
    Route::post('/employee_categories/create','EmployeeCategoryController@store' );
    Route::delete('/employee_categories/{id}','EmployeeCategoryController@destroy' );
    // Route::resource('/employee','EmployeeController' );
    Route::get('/employee','EmployeeController@index' );
    Route::get('/employee/create','EmployeeController@create' );
    Route::post('/employee/create','EmployeeController@store' );
    Route::get('/employee/edit/{id}','EmployeeController@edit' );
    Route::put('/employee/update/{id}','EmployeeController@update' );
    Route::delete('/employee/destroy/{id}','EmployeeController@destroy' );
    // Route::get('/user/edit/{id}', 'UserController@edit');
    Route::get('/transactions','TransactionController@Transaction' )->name('transaction');

    Route::get('/payments','SalaryController@payment' )->name('payment');
    Route::post('/payments','SalaryController@find' );

    // Route::post('/user/{id}', 'UserController@update');
    Route::get('/tourist','TouristController@index' );
    Route::post('/tourist/edit/{id}','TouristController@edit' );

   // Route::resource('employee','EmployeeController',['except'=>['show']]);
    Route::get('/compose','MailBoxController@compose' )->name('compose');
    Route::get('/inbox','MailBoxController@inbox' )->name('inbox');
    Route::get('/Mail/Message','MailBoxController@message' )->name('message');
    Route::get('/Message','MessageController@index' )->name('Message');
    Route::get('/Calender','TemporalController@calender' )->name('calender');
    Route::get('/EUserList','TemporalController@EUserList' )->name('EUserList');
    Route::get('/Employee/Create','TemporalController@EUseeCreate' )->name('EUseeCreate');
    Route::get('/Employee/Group_Create','TemporalController@EGrpCreate' )->name('EGrpCreate');
    // Route::get('/Tourist','TemporalController@tourist' )->name('tourist');
    Route::get('/Tourist/Transaction','TemporalController@touristTransaction' )->name('touristTransaction');
    Route::get('/Employee/Transaction','TemporalController@employeeTransaction' )->name('employeeTransaction');
    Route::get('/Hotel/Transaction','TemporalController@hotelTransaction' )->name('hotelTransaction');
    Route::get('/Vehicle/Transaction','TemporalController@vehicleTransaction' )->name('vehicleTransaction');
    Route::get('/Payment/History','TemporalController@PaymentHistory' )->name('PaymentHistory');
    Route::get('/Payment/New','TemporalController@NewPayment' )->name('NewPayment');
});