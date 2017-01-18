<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('user/{user}', [
    'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
    'uses' => 'UserController@index',
    'roles' => ['administrator', 'manager'] // Only an administrator, or a manager can access this route
]);
