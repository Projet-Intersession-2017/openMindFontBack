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
Route::get('/cgu', function () {
    return view('cgu');
});
Route::get('/presentation', function () {
    return view('presentation');
});
Route::get('/presentation/reseau', function () {
    return view('reseau');
});
Route::get('/presentation/front', function () {
    return view('front');
});
Route::get('/presentation/back', function () {
    return view('back');
});
Route::get('/presentation/projet', function () {
    return view('projet');
});
Route::get('/presentation/remerciements', function () {
    return view('remerciements');
});
/**********Routes pour les examens des étudiants *************/
Route::get('/intra/listeexamen', [
	'middleware' => ['auth' /*, 'roles'*/], // A 'roles' middleware must be specified
    'uses' => 'Admin\QuizController@listeexamen',
    //'roles' => ['Etudiant']
]);
Route::get('/intra/candidat/{idCandidat}/examen/{idExamen}', [
	'middleware' => ['auth' /*, 'roles'*/], // A 'roles' middleware must be specified
    'uses' => 'Admin\QuizController@listesurvey',
    //'roles' => ['Etudiant']
]);
Route::get('/intra/candidat/{idCandidat}/examen/{idExamen}/survey/{idSurvey}', [
	'middleware' => ['auth' /*, 'roles'*/], // A 'roles' middleware must be specified
    'uses' => 'Admin\QuizController@listequestions',
    //'roles' => ['Etudiant']
]);
Route::post('/intra/candidat/{idCandidat}/examen/{idExamen}/survey/{idSurvey}/sendresults', [
	'middleware' => ['auth' /*, 'roles'*/], // A 'roles' middleware must be specified
    'uses' => 'Admin\QuizController@sendresults',
    //'roles' => ['Etudiant']
]);




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
    CRUD::resource('useranswer', 'Admin\UserAnswerCrudController');
    CRUD::resource('listfaq', 'Admin\GroupechatCrudController');
    CRUD::resource('faq', 'Admin\ChatCrudController');
    CRUD::resource('notebook', 'Admin\NoteBookCrudController');
    CRUD::resource('note', 'Admin\NoteCrudController');
    CRUD::resource('cour', 'Admin\CourCrudController');

  // [...] other routes
});
