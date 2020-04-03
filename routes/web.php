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
*/

Route::prefix('todo')->group(function(){
	//index
	Route::get('/', 'ToDoController@index')->name('todo.index');

	//show
	Route::get('{id}', 'TodoController@show')
		->where('id', '[0-9]+')
		->name('todo.show');

	//create
	Route::get('/create', 'ToDoController@create')
		->name('todo.create');
	Route::post('create', 'ToDoController@store')
		->name('todo.store');

	//edit 
	Route::get('/{id}/edit', 'ToDoController@edit')
		->where('id', '[0-9]+')
		->name('todo.edit');
	Route::post('/{id}/update', 'ToDoController@update')
		->where('id', '[0-9]+')
		->name('todo.update');

	//delete 
	Route::get('/{id}/delete', 'ToDoController@confirm')
		->where('id', '[0-9]+')
		->name('todo.confirm');
	Route::post('/{id}/delete', 'ToDoController@destroy')
		->where('id', '[0-9]+')
		->name('todo.destroy');

});
