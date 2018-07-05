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

//User
Route::post('/register','userController@Register');
Route::post('/login','userController@Login');
Route::get('/showusers', 'userController@ShowUsers');

//Session 
Route::post('/save_session','sessionController@save');
Route::get('/show_session','sessionController@Session');

//Instructors
Route::post('/SaveInstructor','instructorController@saveInstructor');
Route::get('/ShowInstructors','instructorController@showinstructors');

//Gym
Route::post('/saveGym','gym_locationController@SaveGym');
Route::get('/showGym','gym_locationController@ShowGym');
