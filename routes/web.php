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
    return view('welcome');
});

Route::get('getAllProjects', 'ProjectController@getAllProjects');
Route::get('getRecent10', 'ProjectController@getRecent10');
Route::get('insertProject', 'ProjectController@insertProject');
Route::get('updateProject', 'ProjectController@updateProject');
Route::get('deleteProject', 'ProjectController@deleteProject');
Route::get('getActiveProjects', 'ProjectController@getActiveProjects');




