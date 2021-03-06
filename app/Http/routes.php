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
/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/','PagesController@home');
Route::get('/home','PagesController@home');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('users', 'UserController@index');
//Route::get('user/{id}', 'UserController@show');

//tasks
//Route::get('tasks', 'TaskController@index');
Route::get('tasks', 'TaskController@index');
Route::group(['middleware' => 'auth'], function()

{
    Route::resource('task', 'TaskController', ['except' => ['index']]);
    Route::resource('user', 'UserController');
    Route::get('/my-tasks', 'UserController@myTask');
});
Route::get('tasks/json', 'TaskController@toJson');

/*
Route::get('/tasks', [
    'middleware' => ['auth', 'acl:admin_all'],
    'as' => 'tasks.all',
    'uses' => 'TaskController@index'
]);
*/
