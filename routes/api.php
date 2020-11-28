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

Route::get('/todos', 'App\Http\Controllers\TodoController@index');
Route::get('/todo/{id}', 'App\Http\Controllers\TodoController@show');
Route::post('/todo', 'App\Http\Controllers\TodoController@store');
Route::delete('/todo/{id}', 'App\Http\Controllers\TodoController@destroy');
Route::patch('/todo/{todo}', 'App\Http\Controllers\TodoController@update');
