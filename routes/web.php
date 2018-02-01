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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();
//public
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/createjob', 'JobController@createJob')->name('job.create');
//admin
Route::get('/admin', 'JobAdminController@index')->name('admin');
Route::get('/admin/spamjob/{id}', 'JobAdminController@spam')->name('job.spam');
Route::get('/admin/editjob/{id}', 'JobAdminController@edit')->name('job.edit');
Route::post('/admin/updatejob/{id}', 'JobAdminController@update')->name('job.update');
Route::get('/admin/approvejob/{id}', 'JobAdminController@approve')->name('job.approve');
