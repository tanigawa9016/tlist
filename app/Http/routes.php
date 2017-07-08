<?php

Route::get('/', 'tasksController@index');
Route::resource('tasks', 'tasksController');

