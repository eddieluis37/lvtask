<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|

| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
|	Route::get('basico', 'Backend\UsersController@index');
|
|
|
|
|	Route::get('users/{user}', function (Taskapp\Models\User $user) {
|   return $user;
|	});
|
|	Route::get('/', function () {
|    return view('welcome');
|	});
|
*/

Auth::routes();


Route::get('/home', 'HomeController@index');


Route::get('/', function () {
	return view('welcome');
});


Route::group(['namespace' => 'Backend'], function () {

	Route::get('tasks', 'TasksController@getIndex');
	Route::get('tasks/create', 'TasksController@getCreate')->name('tasks.create');
	Route::post('tasks/store', 'TasksController@postStore')->name('tasks.store');

	Route::resource('users', 'UsersController');

});


