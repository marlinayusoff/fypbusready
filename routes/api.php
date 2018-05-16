<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('loginParents', 'Api\ApiAuthController@loginParents');
Route::post('registerParents', 'Api\ApiAuthController@registerParents');

Route::post('loginPemandu', 'Api\ApiPemanduBasController@loginPemandu');
Route::post('scan', 'Api\ApiAttendanceController@scan');
Route::get('checkCheckpoint', 'Api\ApiAttendanceController@countCheckpoint');
Route::get('checkCurrentStudent', 'Api\ApiAttendanceController@countCurrentstudent');
Route::get('viewAbsent', 'Api\ApiAbsentController@viewAbsent');

Route::group(['middleware'=>'mobile:api'], function() {
   Route::get('student', 'Api\ApiStudentController@index');
   Route::get('student2', 'Api\ApiStudentController@school');
   Route::get('student3', 'Api\ApiStudentController@checkpoint');
   Route::get('currentid', 'Api\ApiStudentController@currentId');
   //view student
   Route::get('viewStudent', 'Api\ApiStudentController@view');
   //add student
   Route::post('addstudent', 'Api\ApiStudentController@store');
   //send maklumat kepada 
   Route::post('absentstudent', 'Api\ApiAbsentController@store');
   //attendance
   Route::get('viewattendance', 'Api\ApiAttendanceController@view');
   Route::get('mypost', 'Api\ApiPostsController@mypost');
   Route::get('post/{post}', 'Api\ApiPostsController@show');


   Route::post('post/{post}/comment', 'Api\ApiCommentsController@store');
   //100000 request
});


