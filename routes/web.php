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
Route::get('/std/dbtb', 'Admin\GradeController@studentDbtb')->name('s.dbtb');

// plugin alamat
Route::post('kabupatenAll', 'Admin\WilayahController@getAllKabupaten')->name('wilayah.kabupaten.all');
Route::post('kabupaten', 'Admin\WilayahController@getKabupaten')->name('wilayah.kabupaten');
Route::post('kecamatan', 'Admin\WilayahController@getKecamatan')->name('wilayah.kecamatan');
Route::get('provinsi', 'Admin\WilayahController@getProvinsi')->name('wilayah.provinsi');

Route::get('/home', 'Admin\HomeController@index');
Route::get('parent/{id}/create', 'Admin\ParentsController@createParent')->name('parent.createParent');
Route::put('/student/{id}/updateava', 'Admin\StudentsController@updateAva')->name('student.updateava');
Route::get('illness/{id}/create', 'Admin\IllnessHistoryController@createIllness')->name('illness.createIllness');
Route::resource('/student', 'Admin\StudentsController');
Route::resource('/parent', 'Admin\ParentsController');
Route::resource('/illness', 'Admin\IllnessHistoryController');
Route::resource('/school', 'Admin\SchoolHistoryController');
Route::resource('/hafalan', 'Admin\HafalanController')->except(['show']);

Route::get('users/data', 'Admin\UsersController@data')->name('users.data');
Route::resource('users', 'Admin\UsersController');

Route::get('/spp/dbtb', 'Admin\SppsController@dbTables')->name('spp.dbtb');
Route::resource('/spp', 'Admin\SppsController');

Route::get('/teacher/dbtb', 'Admin\TeacherController@dbTables')->name('teacher.dbtb');
Route::resource('/teacher', 'Admin\TeacherController');

Route::get('/grade/dbtb', 'Admin\GradeController@dbTables')->name('grade.dbtb');
Route::resource('/grade', 'Admin\GradeController');
