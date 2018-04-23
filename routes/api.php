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


Route::group(['middleware'=>'mobile:api'], function() {
   Route::get('student', 'Api\ApiStudentController@index');
   Route::post('student', 'Api\ApiStudentController@store');
   Route::get('mypost', 'Api\ApiPostsController@mypost');
   Route::get('post/{post}', 'Api\ApiPostsController@show');


   Route::post('post/{post}/comment', 'Api\ApiCommentsController@store');
   //100000 request
});


