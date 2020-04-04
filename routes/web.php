<?php

Route::prefix('todo')->group(function(){
	//index
	Route::get('/', 'ToDoController@index')->name('todo.index');

	//show
	Route::get('{id}', 'ToDoController@show')
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
