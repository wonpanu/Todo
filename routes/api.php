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

// Sign in
Route::post('login', 'AuthController@login');

// Sign out
Route::post('logout', 'AuthController@logout');

// Sign up
Route::post('register', 'AuthController@register');

// User
Route::put('user/update/{id}', 'UserController@update');
Route::delete('user/delete/{id}', 'UserController@delete');

// Todo-list
Route::get('tasks', 'TaskController@index');
Route::get('tasks/{id}', 'TaskController@show');
Route::post('tasks', 'TaskController@store');
Route::put('tasks/{id}', 'TaskController@update');
Route::delete('tasks/{id}', 'TaskController@delete');
