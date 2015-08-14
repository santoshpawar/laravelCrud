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

//Route::get('student','StudentController@index');
//Route::get('student/create','StudentController@create');
//Route::get('student/{id}','StudentController@show');
//Route::post('student','StudentController@store');


Route::resource('student','studentController');
Route::resource('pages','PagesController');
Route::resource('tasks','TasksController');

Route::get('/', [
    'as' => 'home',
    'uses' => 'PagesController@home'
]);
Route::controllers([
   'auth'=>'Auth\authController',
    'password'=>'Auth\PasswordController'

]);
//Route::resource("student", "studentController");





