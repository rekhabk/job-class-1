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

Route::get('/', 'JobController@index');  

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//job 

Route::get('/jobs/{id}/{job}','JobController@show')->name('jobs.show');

//Company

Route::get('/company/{id}/{company}','CompanyController@index')->name('company.index');

// user profile

Route::get('user/profile','UserController@index')->name('user.profile');

Route::post('user/profile/create','UserController@store')->name('profile.create');

Route::post('user/coverletter','UserController@coverletter')->name('cover.letter');

Route::post('user/resume','UserController@resume')->name('resume');

Route::post('user/avatar','UserController@avatar')->name('avatar');




//employer view

Route::view('employer/register','auth.employer-register')->name('employer.register');

Route::post('employer/register','EmployerRegistrerController@employerRegister')->name('emp.register');

