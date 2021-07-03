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
        return view('main.index');
    });

    Route::get('/dashboard','TransactionController@profit');
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
    // Route::get('/user/edit/{id}', 'UserController@edit');packeges
    Route::get('/packeges','PackageController@index' );
    Route::get('/packeges/create','PackageController@create' );
    Route::post('/packeges/create','PackageController@store' );
    Route::delete('/packeges/{id}','PackageController@destroy' );


    Route::get('/transactions','TransactionController@Transaction' )->name('transaction');

    Route::get('/complains','ComplainController@complain' )->name('complain');
    Route::get('/complains/edit/{id}','ComplainController@edit' );
    Route::post('/complains/store','ComplainController@store' );

    Route::get('/payments','SalaryController@payment' )->name('payment');
    Route::post('/payments','SalaryController@find' );
    Route::get('/salary_historys','SalaryController@history' )->name('salary_historys');

    // Route::post('/user/{id}', 'UserController@update');
    Route::get('/tourist','TouristController@index' );
    Route::get('/tourist/edit/{id}','TouristController@edit' );
    Route::get('/tourist/update/{id}','TouristController@update' );
    Route::delete('/tourist/destroy/{id}','TouristController@destroy' );

    Route::get('/review','ReviewController@index' );
    Route::get('/review/edit/{id}','ReviewController@edit' );

    Route::get('/report','ReportController@index' );
    Route::get('/report/edit/{id}','ReportController@edit' );
    // Route::get('/tourist/update/{id}','TouristController@update' );
    Route::delete('/report/destroy/{id}','ReportController@destroy' );


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