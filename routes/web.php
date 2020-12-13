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

Route::get('/','SiteController@index');

Route::get('/users', 'UserController@index');
Route::post('/users', 'UserController@store');
Route::delete('/users', 'UserController@delete');
Route::patch('/users/{id}', 'UserController@update'); 
Route::get('/users/create', 'UserController@create');
Route::get('/users/edit/{id}', 'UserController@edit');

Route::get('/instructors', 'InstructorController@index');
Route::post('/instructors', 'InstructorController@store');
Route::delete('/instructors', 'InstructorController@delete');
Route::patch('/instructors/{instructor}', 'InstructorController@update');
Route::get('/instructors/create', 'InstructorController@create');
Route::get('/instructors/edit/{instructor}', 'InstructorController@edit');

Route::get('/learners', 'LearnerController@index');
Route::post('/learners', 'LearnerController@store');
Route::delete('/learners', 'LearnerController@delete');
Route::patch('/learners/{learner}', 'LearnerController@update');
Route::get('/learners/create', 'LearnerController@create');
Route::get('/learners/edit/{learner}', 'LearnerController@edit');

Route::get('/courses', 'CourseController@index');
Route::post('/courses', 'CourseController@store');
Route::delete('/courses', 'CourseController@delete');
Route::patch('/courses/{course}', 'CourseController@update');
Route::get('/courses/create', 'CourseController@create');
Route::get('/courses/edit/{course}', 'CourseController@edit');
