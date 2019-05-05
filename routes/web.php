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

Route::get('features', function (){
   return view('feature');
});

Route::get('prices', function (){
   return view('prices');
});


Route::get('/test', 'HomeController@getUsers'); 


Auth::routes();
/*
Route::get('/login', function (){
    return view('welcome')->with('registro', 0);
});*/


Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/account', 'AccountController')->middleware('auth');

Route::resource('/arrivals', 'ArrivalsController')->middleware('auth');

Route::resource('/billing', 'BillingController')->middleware('auth');

Route::resource('/departures', 'DeparturesController')->middleware('auth');

Route::resource('/gps', 'GpsController')->middleware('auth');

Route::resource('/maintenance', 'MaintenanceController')->middleware('auth');

Route::resource('/security', 'SecurityController')->middleware('auth');

Route::resource('/settings', 'SettingsController')->middleware('auth');

Route::resource('/manager', 'ManagerController')->middleware('auth');

Route::resource('/users', 'UsersController');

Route::resource('/drivers', 'DriverController')->middleware('auth');

Route::resource('/admin', 'AdminController')->middleware('auth');

Route::resource('/customer', 'CustomerController')->middleware('auth');

Route::resource('/office', 'OfficeController')->middleware('auth');

Route::resource('/enterprise', 'EnterpriseController')->middleware('auth');

Route::resource('/vehicle', 'VehicleController')->middleware('auth');

Route::resource('/employers', 'EmployersController')->middleware('auth');

