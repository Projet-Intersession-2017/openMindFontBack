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
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/presentation', function () {
    return view('presentation');
});

Route::get('user/{user}', [
    'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
    'uses' => 'UserController@index',
    'roles' => ['administrator', 'manager'] // Only an administrator, or a manager can access this route
]);

Route::get('/groupe', function () {
    return view('groupe');
});

Auth::routes();

Route::group(['prefix' => 'intra', 'middleware' => 'admin'], function()
{
  // Backpack\CRUD: Define the resources for the entities you want to CRUD.
    CRUD::resource('user', 'Admin\UserCrudController');
    CRUD::resource('role', 'Admin\RoleCrudController');
    CRUD::resource('group', 'Admin\GroupCrudController');
    CRUD::resource('coordonate', 'Admin\CoordonateCrudController');
    CRUD::resource('examen', 'Admin\ExamenCrudController');
    CRUD::resource('category', 'Admin\CategoryCrudController');
    CRUD::resource('survey', 'Admin\QuestionnaireCrudController');
    CRUD::resource('question', 'Admin\QuestionCrudController');
    CRUD::resource('type', 'Admin\TypeCrudController');
    CRUD::resource('choice', 'Admin\ChoiceCrudController');
  
  // [...] other routes
});