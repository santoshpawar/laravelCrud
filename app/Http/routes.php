<?php
Route::get('gallery/list', 'GalleryController@viewGalleryList');
Route::post('gallery/save', 'GalleryController@saveGallery');
Route::get('gallery/view/{id}', 'GalleryController@viewGalleryPics');
Route::post('image/do-upload', 'GalleryController@doImageUpload');

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
/*
 * Blog CRUD
 */
Route::resource('blog', 'blogController');
//Route::get('blog/create',['middleware'=>'auth','uses'=>'blogController@create']);
//Route::get('blog',['middleware'=>'auth','uses'=>'blogController@index']);
//Route::get('bog','blogController')
//Route::get('blog','blogController@index');
//Route::get('blog/create','blogController@create');
/*Route::resource('blog/create',[
'middleware'=>'auth',
'uses'=>'blogController'
]);*/

/*
 * Register and login authentication
 */
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::post('auth/test', 'Auth\AuthController@postTest');
get('/logout', [
    'as' => 'logout',
    'uses' => 'Auth\AuthController@getLogout',
]);

/*
 * Students and task
 */

Route::resource('student', 'studentController');
Route::resource('pages', 'PagesController');
Route::resource('tasks', 'TasksController');

Route::get('/', [
    'as' => 'home',
    'uses' => 'PagesController@home',
]);

//Route::resource("student", "studentController");
