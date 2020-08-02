<?php

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
|
*/

Route::post('auth/register','AuthController@register');
Route::post('auth/login','AuthController@login');
Route::get('login','AuthController@loginView');

Route::get('users','UserController@users');
Route::get('users/profile','UserController@profile')->middleware('auth:api');
Route::get('users/{id}','UserController@profileById')->middleware('auth:api');


Route::get('/school','SchoolController@index');
Route::post('/school/store','SchoolController@store');
Route::get('/school/create','SchoolController@create');
Route::get('school/download','SchoolController@download');
// Route::get('login','SchoolController@index');
Route::get('/school/{school}','SchoolController@show'); //
Route::get('/school/{school}/edit','SchoolController@edit'); //
    // )->middleware('auth:api')
Route::put('/school/{school}','SchoolController@update'); 
    // ->middleware('auth:api')
Route::delete('/school/{school}','SchoolController@destroy');
    // ->middleware('auth:api')

