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


// CLIENTS
Route::get('/clients', 'ClientController@index');
Route::get('/client/{id}', 'ClientController@show');

