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

Route::get('/show/{id}', ['as' => 'show', 'uses' => 'UserController@showAction']);

Route::post('/insert', ['as' => 'insert', 'uses' =>'UserController@insertAction']);

Route::post('/update/{id}', ['as' => 'update', 'uses' =>'UserController@updateAction']);

Route::get('/add', ['as'=> 'insert', 'uses' => 'UserController@getAddUserForm']);

Route::get('/users', ['as'=> 'insert', 'uses' => 'UserController@showAllAction']);

Route::get('/delete/{id}', ['as' => 'delete', 'uses' =>'UserController@deleteAction']);
