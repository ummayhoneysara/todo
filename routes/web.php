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

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', 'aboutController@index');

Route::get('create', function () {
    return view('todos.create');
});

Route::get('todos', 'todosController@index');

Route::get('todos/{todoId}', 'todosController@show');

Route::get('create', 'todosController@create');

Route::post('store', 'todosController@store');

Route::get('/todos/{todoId}/edit', 'todosController@edit');

Route::post('/todos/{todoId}/update', 'todosController@update');

Route::get('/todos/{todoId}/delete', 'todosController@delete');

Route::get('/todos/{todoId}/complete', 'todosController@complete');
