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
// use Carbon\Carbon;

Route::get('/', function () {
    // return view('admin.layouts.app');
    // return view('welcome');
    return view('admin.auth.login');
    // return redirect('/login');
});
// Route::get('/test', function () {
//     return Carbon::now()->subWeeks(8)->format('Y-m-d').' : '.Carbon::now()->subWeeks(4)->format('Y-m-d');
//     return ;
// });
Route::get('/login', function () {
    return view('admin.auth.login');
});
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

//Yajra
Route::get('/student/dbtb', 'Admin\StudentsController@dbTables')->name('student.dbtb');
Route::get('/hafalan/dbtb', 'Admin\HafalanController@dbTables')->name('hafalan.dbtb');
Route::get('/std/dbtb/{id}', 'Admin\GradeController@studentDbtb')->name('s.dbtb');
Route::delete('/std/delete/{id}', 'Admin\GradeController@stdDelete')->name('s.delete');

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

// spp student / spp detail
Route::get('/sppStudent/{sppStudent}/spptb', 'Admin\StudentsController@sppTables')->name('sppStudent.spptb');
Route::get('/sppStudent/{sppStudent}/sppdtl', 'Admin\StudentsController@sppStudent')->name('sppStudent.sppdtl');
Route::get('/sppStudent/sppcrt', 'Admin\StudentsController@sppCreate')->name('sppStudent.sppcrt');
Route::post('/sppStudent/{sppStudent}/sppstr', 'Admin\StudentsController@sppStore')->name('sppStudent.sppstr');
Route::get('/sppStudent/{sppStudent}/sppedt', 'Admin\StudentsController@sppEdit')->name('sppStudent.sppedt');
Route::delete('/sppStudent/{sppStudent}/sppdestroy', 'Admin\StudentsController@sppDestroy')->name('sppStudent.sppdestroy');
Route::post('/sppStudent/{sppStudent}/sppupdt', 'Admin\StudentsController@sppUpdate')->name('sppStudent.sppupdt');

// student_fault
Route::get('/student_fault/{id}/faulttb', 'Admin\StudentFaultController@faultTables')->name('student_fault.faulttb');
Route::get('/student_fault/{id}/fault', 'Admin\StudentFaultController@student_fault')->name('student_fault.fault');
Route::post('/student_fault/{id}/store', 'Admin\StudentFaultController@store')->name('student_fault.store');
Route::get('/student_fault/{id}/edit', 'Admin\StudentFaultController@edit')->name('student_fault.edit');
Route::put('/student_fault/{id}/update', 'Admin\StudentFaultController@update')->name('student_fault.update');
Route::delete('/student_fault/{id}/fault', 'Admin\StudentFaultController@destroy')->name('student_fault.destroy');

Route::get('/grade/dbtb', 'Admin\GradeController@dbTables')->name('grade.dbtb');
Route::resource('/grade', 'Admin\GradeController');

Route::get('/donatur/dbtb', 'Admin\DonaturController@dbTables')->name('donatur.dbtb');
Route::resource('/donatur', 'Admin\DonaturController');

Route::get('/donaturStudent/{id}/dbtb', 'DonaturStudentController@dbTables')->name('donaturStudent.dbtb');
Route::get('/donaturStudent/{id}/spptb', 'DonaturStudentController@sppTables')->name('donaturStudent.spptb');
Route::get('/donaturStudent/{id}/sppdtl', 'DonaturStudentController@sppStudent')->name('donaturStudent.sppdtl');
Route::get('/donaturStudent', 'DonaturStudentController@create')->name('donaturStudent.create');
Route::post('showStudent', 'DonaturStudentController@show')->name('donaturStudent.show');

// Parent Search
Route::get('/parentStudent', 'ParentStudentController@search')->name('search.input');
Route::post('/result', 'ParentStudentController@result')->name('search.result');
Route::get('/result/{id}/spptb', 'ParentStudentController@sppTables')->name('search.spp');
Route::get('/result/{id}/hafalantb', 'ParentStudentController@hafalanTables')->name('search.hafalan');

// donatur detail DataTable
Route::get('/donatur/{donatur}/donaturDetail', 'Admin\DonaturController@donaturDetail')->name('donatur.donaturDetail');
Route::get('/donatur/{donatur}/createStudent', 'Admin\DonaturController@createStudent')->name('donatur.createStudent');
Route::post('/donatur/{donatur}/storeStudent', 'Admin\DonaturController@storeStudent')->name('donatur.storeStudent');
Route::delete('/donatur/{donatur}/destroyStudent', 'Admin\DonaturController@destroyStudent')->name('donatur.destroyStudent');

// SppPayment
Route::get('/sppPayment/{sppPayment}/sppTable', 'Admin\StudentsController@sppPaymentTables')->name('sppPayment.sppTable');
Route::get('/sppPayment/{sppPayment}/sppDetail', 'Admin\StudentsController@sppPaymentDetail')->name('sppPayment.sppDetail');

Route::get('/student/{student?}/sppPayment', 'Admin\StudentsController@sppPayemntStudents')->name('student.spp.payment');
Route::get('/student/{student?}/sppPaymentDetail/{month?}/{year?}', 'Admin\StudentsController@sppPaymentDetail')->name('student.spp.payment.detail');
Route::get('/student/{student?}/sppPaymentEdit/{id?}/{month?}/{year?}', 'Admin\StudentsController@sppPaymentEdit')->name('student.spp.payment.edit');
Route::put('/student/{id?}/sppPaymentUpdate', 'Admin\StudentsController@sppPaymentUpdate')->name('student.spp.payment.update');
Route::get('/student/{id?}/sppPaymentDelete', 'Admin\StudentsController@sppPaymentDelete')->name('student.spp.payment.delete');
Route::post('/student/{student?}/sppPaymentStore/{month?}/{year?}', 'Admin\StudentsController@sppPaymentStore')->name('student.spp.payment.store');
Route::post('/student/{student?}/sppPaymentStoreAll', 'Admin\StudentsController@sppPaymentStoreAll')->name('student.spp.payment.store_all');
