<?php

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


Route::post('user-login', 'Api\ApiController@login');

Route::group(['middleware' => 'auth:api'], function () {

    Route::get('all-courses','Api\ApiController@allCourses');
    Route::get('all-announcement','Api\ApiController@allAnnouncement');
    Route::post('mark-attendance','Api\ApiController@markAttendance');

});
