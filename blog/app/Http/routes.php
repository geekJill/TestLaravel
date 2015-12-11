<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('test/index', 'TestController@index');
Route::post('test/updateUserInfo', 'TestController@updateUserInfo');
Route::get('test/add', 'TestController@add');
Route::get('test/single', 'TestController@single');
Route::get('test/list', 'TestController@list');
Route::get('test/home', 'TestController@home');
Route::get('test/testcommand', 'TestController@testcommand');

