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

Route::redirect('/', 'projects');

Auth::routes();

//Web
Route::get('projects', 'Web\PageController@projects')->name('projects'); 
Route::get('researchers', 'Web\PageController@researchers')->name('researchers');
Route::get('researchersP/{id}', 'Web\PageController@researchersP')->name('researchersP');

