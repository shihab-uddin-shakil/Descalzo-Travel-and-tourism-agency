<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|*/


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });




// Route::group(['prefix' => 'admin','middleware' => ['assign.guard:admins','jwt.auth']],function ()
// {
// 	Route::get('/demo','AdminController@demo');
// });
 Route::post('/Login', 'Auth\LoginController@authenticate');
 Route::post('/login', 'Auth\LoginController@confirm');
 Route::group(['middleware'=> ['assign.guard:users']], function() {
    //Employe category


// });

// Route::group(['prefix' => 'employee','middleware' => ['assign.guard:employees','jwt.auth']],function ()
// {
//   //Employee
//   Route::get('/employee','EmployeeController@index' );
 });

//  Route::group(['middleware' => 'auth:api'], function() {

// // Route::get('/employee','EmployeeController@index' );
// });

Route::middleware('auth:api')->group( function () {
    //auth
    Route::get('userValidate', function () {
      return response()->json([
          'status'=> 200,
          'message'=>'you are in',
      ],200);
    });
    //logout
     Route::post('/logout', 'Auth\LoginController@logout');
     //employee category
     Route::get('/employee_categories','EmployeeCategoryController@index' );
     Route::post('/employee_categories/create','EmployeeCategoryController@store' );
     Route::delete('/employee_categories/{id}','EmployeeCategoryController@destroy' );

    //Employee
     Route::get('/employee','EmployeeController@index' );
     Route::get('/employee/{id}','EmployeeController@show' );
     Route::post('/employee/create','EmployeeController@store' );
     Route::post('/employee/update/{id}','EmployeeController@update' );
     Route::delete('/employee/destroy/{id}','EmployeeController@destroy' );
     Route::post('users', [EmployeeController::class,'userStore']);

     //transaction
     Route::get('admin/transaction','TransactionController@index' );
     //dashboard
     Route::get('admin/dashboard','TransactionController@dashboard' );
     //packeges
     Route::get('/packeges','PackageController@index' );
    //  Route::get('/packeges/create','PackageController@create' );
     Route::post('/packeges/create','PackageController@store' );
     Route::delete('/packeges/{id}','PackageController@destroy' );
     //trouist
     Route::get('/tourist','TouristController@index' );
     Route::get('/tourist/edit/{id}','TouristController@edit' );
     Route::get('/tourist/update/{id}','TouristController@update' );
     Route::delete('/tourist/destroy/{id}','TouristController@destroy' );
     //rivew
     Route::get('/review','ReviewController@index' );
     Route::get('/review/edit/{id}','ReviewController@edit' );
    //report
     Route::get('/report','ReportController@index' );
     Route::get('/report/edit/{id}','ReportController@edit' );
     // Route::get('/tourist/update/{id}','TouristController@update' );
     Route::delete('/report/destroy/{id}','ReportController@destroy' );

     //complain
     Route::get('/complains','ComplainController@complain' );
    //  Route::get('/complains/edit/{id}','ComplainController@edit' );
     Route::post('/complains/store','ComplainController@store' );

     //PAYMENTS

    //  Route::get('/payments','SalaryController@payment' )->name('payment');
     Route::post('/payment/create','SalaryController@find');
     Route::get('/salary_historys','SalaryController@history' );
     //messages
     Route::get('/message','MessageController@index' );
     Route::post('/message/create','MessageController@store' );






});

// Route::get('/product','ProductController@index' );
// Route::get('/product/{id}','ProductController@show' );
// Route::post('/product/create','ProductController@store' );
// Route::put('/product/update/{id}','ProductController@update' );
// Route::delete('/product/destroy/{id}','ProductController@destroy' );