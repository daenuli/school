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
    // return view('admin.layouts.app');
    // return view('welcome');
    return view('admin.auth.login');
    // return redirect('/login');
});

Route::get('/login', function () {
    return view('admin.auth.login');
});
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

//Yajra
Route::get('/student/dbtb', 'Admin\StudentsController@dbTables')->name('student.dbtb');
Route::get('/hafalan/dbtb', 'Admin\HafalanController@dbTables')->name('hafalan.dbtb');

Route::get('/home', 'Admin\HomeController@index');
Route::resource('/student', 'Admin\StudentsController');
Route::resource('/hafalan', 'Admin\HafalanController')->except(['show']);

Route::get('users/data', 'Admin\UsersController@data')->name('users.data');
Route::resource('users', 'Admin\UsersController');

Route::get('/spp/dbtb', 'Admin\SppsController@dbTables')->name('spp.dbtb');
Route::resource('/spp', 'Admin\SppsController');
