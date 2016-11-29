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



// ROUTES DE USERS
Route::get('/users', 'UserController@lista');
Route::get('/users/visualizar/{id}', 'UserController@visualizar')->where('id', '[0-9]+');
Route::get('/users/delete_user/{id}', 'UserController@delete_user')->where('id', '[0-9]+');
Route::get('/users/edit_user/{id}', 'UserController@edit_user')->where('id', '[0-9]+');
Route::get('/users/cadastrar', 'UserController@cadastrar');
Route::post('/users/s_cadastrar', 'UserController@s_cadastrar');
Route::post('/users/s_editar', 'UserController@s_editar');

// ROUTES DE TYPES
Route::get('/types', 'TypeController@lista');
Route::get('/types/visualizar/{id}', 'TypeController@visualizar')->where('id', '[0-9]+');
Route::get('/types/delete_type/{id}', 'TypeController@delete_type')->where('id', '[0-9]+');
Route::get('/types/edit_type/{id}', 'TypeController@edit_type')->where('id', '[0-9]+');
Route::get('/types/cadastrar', 'TypeController@cadastrar');
Route::post('/types/s_cadastrar', 'TypeController@s_cadastrar');
Route::post('/types/s_editar', 'TypeController@s_editar');

Route::get('/home', 'HomeController@index');
Route::get('/', 'HomeController@index');

