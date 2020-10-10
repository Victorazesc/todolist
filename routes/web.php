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


/**
 * Show create Todo form
 */
Route::get('/todos/create', 'TodoController@create');

/**
 * Add Todo
 */
Route::post('/todos', 'TodoController@store');

/**
 * Show edit Todo
 */
Route::get('todos/{todo}/edit', 'TodoController@edit');

/**
 * Update Todo
 */
Route::put('todos/{todo}', 'TodoController@update');

/**
 * Delete Todo
 */
Route::get('/todos/{todo}/delete', 'TodoController@delete');


Route::get('/todos', 'TodoController@index')->name('tarefas');


Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'TodoController@index')->name('tarefas');
