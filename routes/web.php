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
Route::post('/register','User_94117Controller@Register');
Route::post('/login','User_94117Controller@Login');
Route::get('/showusers', 'User_94117Controller@ShowUsers');

//Session 
Route::post('/save_session','session_94117@save');
Route::get('/show_session','session_94117@Session');

//Instructors
Route::post('/SaveInstructor','instructorController@saveInstructor');
Route::get('/ShowInstructors','instructorController@showinstructors');

//Gym
Route::post('/saveGym','gym_locationController@SaveGym');
Route::get('/showGym','gym_locationController@ShowGym');
