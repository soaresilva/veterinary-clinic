<?php

use Illuminate\Support\Facades\Route;

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

// PETS
Route::get('/pets', 'PetController@index');
Route::get('/pet/{id}', 'PetController@show');
// Route::get('/pets/create/{name}', 'PetController@create');
Route::get('/pets/create', 'PetController@create');
Route::post('/pets/create', 'PetController@store');
Route::get('pets/delete/{id}', 'PetController@delete');
Route::get('/pet/{id}/edit', 'PetController@edit');
Route::put('/pet/{id}', 'PetController@update');


// CLIENTS
Route::get('/clients', 'ClientController@index');
Route::get('/client/{id}', 'ClientController@show');
Route::get('/clients/create', 'ClientController@create');
Route::post('/clients/create', 'ClientController@store');
Route::get('clients/delete/{id}', 'ClientController@delete');
Route::get('/client/{id}/edit', 'ClientController@edit');
Route::put('/client/{id}', 'ClientController@update');
