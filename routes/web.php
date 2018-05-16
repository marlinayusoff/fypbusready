<?php

use App\Events\OrderStatusChanged;
use App\CheckPoint;
use Illuminate\Support\Facades\Input;

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

Route::get('/fire', function(){
	event(new OrderStatusChanged);
	return 'Fired';
});

//login process
Route::get('/', 'mainController@getIndex');
Route::post('/', 'mainController@loginprocess');
Route::get('/logout', 'mainController@logoutprocess');
//home
Route::get('/home', 'homeController@Home');
//about driver
Route::get('/driver/add_driver', 'driverController@create');
Route::post('/driver','driverController@insert');
Route::get('/driver/driver_list', 'driverController@driverList');
Route::get('driver/{pemandu_id}/edit','driverController@edit');
Route::post('driver/update','driverController@update');
Route::delete('driver/{pemandu_id}','driverController@destroy');
//about school
Route::get('/school/add_school', 'schoolController@create');
Route::post('/school','schoolController@insert');
Route::get('/school/school_list', 'schoolController@schoolList');
Route::get('school/{sekolah_id}/edit','schoolController@edit');
Route::post('school/update','schoolController@update');
Route::delete('school/{sekolah_id}','schoolController@destroy');
//about route marker
Route::get('/route/list-bus-route','routeController@show');
Route::get('/route/route-marker','routeController@marker');
Route::post('/route/route-marker', function(){
	$locations = DB::table('checkpoint')->get();
	CheckPoint::create(Input::all());
	return View::make('route/list-bus-route',compact('locations'));	
});
Route::delete('route/list-bus-route/{checkpoint_id}','routeController@destroy');
//laluan bas
Route::get('route/{pemandu_id}/edit','routeController@edit');
Route::get('/route/bus-route/add', 'routeController@addRoute');
Route::get('/delete/{laluan_id}', 'routeController@Deleteshow');
Route::post('/delete', 'routeController@processDelete');
//about bus route 
Route::get('/route/bus-route','routeController@list');
Route::get('/getRouteDetails', 'routeViewController@process');
//attendance
Route::get('/attendance/attendance_list','attendanceController@list');
//Route::get('/getAttendance', 'attendanceViewController@process');
//report
Route::get('/report/view_report', 'reportController@show');
//android
Route::get('/android/login', 'loginController@login');