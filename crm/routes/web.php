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

Auth::routes([
  'register' => false,
]);

Route::get('/home', 'HomeController@index')->name('home');

// Rutas para escuelas
Route::prefix('/school')->name('school.')->middleware('auth')->group(function() {
  Route::get('/index', 'SchoolsController@index')->name('index');
  Route::get('/show/{id}', 'SchoolsController@show')->name('show');
});

// Rutas para estudiantes
Route::prefix('/students')->name('student.')->middleware('auth')->group(function() {
  Route::get('/index', 'StudentsController@index')->name('index');
  Route::get('/show/{id}', 'StudentsController@show')->name('show');
  Route::get('/create', 'StudentsController@create')->name('create');
  Route::post('/add', 'StudentsController@store')->name('store');
  Route::post('/update/{id}', 'StudentsController@update')->name('update');
  Route::post('/remove/{id}', 'StudentsController@destroy')->name('remove');
});
