<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\BrandController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/hash', 'App\Http\Controllers\HashController@hash');

Route::get('', 'App\Http\Controllers\IndexController@index');


Route::middleware(['auth', 'admin'])->group(function () {

Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard')->middleware('auth');
Route::get('actionlogout', 'App\Http\Controllers\LoginController@actionlogout')->name('actionlogout')->middleware('auth');

});


Route::post('simpan', 'App\Http\Controllers\DashboardController@simpan')->name('simpan');
Route::put('/update/{id}', 'App\Http\Controllers\DashboardController@update')->name('update');
Route::delete('/hapus/{id}', 'App\Http\Controllers\DashboardController@hapus')->name('hapus');
//login
Route::get('/login', 'App\Http\Controllers\LoginController@login')->name('login');
Route::post('dashboard', 'App\Http\Controllers\LoginController@actionlogin')->name('actionlogin');

Route::get('/importexport', 'App\Http\Controllers\ImportExportController@importExport')->name('importexport');
Route::post('/import', 'App\Http\Controllers\ImportExportController@import')->name('import');
Route::get('/export', 'App\Http\Controllers\ImportExportController@export')->name('export');


//admin
Route::get('admin', 'App\Http\Controllers\AdminController@index')->name('admin');
Route::get('logout', 'App\Http\Controllers\AdminController@actionlogout')->name('logout');

//logbook
Route::get('logbook', 'App\Http\Controllers\LogbookController@index')->name('logbook');
Route::post('simpan_logbook', 'App\Http\Controllers\LogbookController@simpan')->name('simpan_logbook');
Route::put('/update_logbook/{id}', 'App\Http\Controllers\LogbookController@update')->name('update_logbook');
Route::delete('/hapus_logbook/{id}', 'App\Http\Controllers\LogbookController@hapus')->name('hapus_logbook');


//learning PATH
Route::get('learning', 'App\Http\Controllers\LearningController@index')->name('learning');
Route::post('simpan_learn', 'App\Http\Controllers\LearningController@simpan')->name('simpan_learn');
Route::put('/update_learn/{id}', 'App\Http\Controllers\LearningController@update')->name('update_learn');
Route::delete('/hapus_learn/{id}', 'App\Http\Controllers\LearningController@hapus')->name('hapus_learn');


//Tugas
Route::get('tugas', 'App\Http\Controllers\TugasController@index')->name('tugas');
Route::post('simpan_tugas', 'App\Http\Controllers\TugasController@simpan')->name('simpan_tugas');
Route::put('/update_tugas/{id}', 'App\Http\Controllers\TugasController@update')->name('update_tugas');
Route::delete('/hapus_tugas/{id}', 'App\Http\Controllers\TugasController@hapus')->name('hapus_tugas');


//Akun
Route::get('akun', 'App\Http\Controllers\AkunController@index')->name('akun');
Route::post('simpan_akun', 'App\Http\Controllers\AkunController@simpan')->name('simpan_akun');
Route::put('/update_akun/{id}', 'App\Http\Controllers\AkunController@update')->name('update_akun');
Route::delete('/hapus_akun/{id}', 'App\Http\Controllers\AkunController@hapus')->name('hapus_akun');




//USER
Route::get('/dashboards', 'App\Http\Controllers\UserdashController@index_user')->name('user');

//learning PATH
Route::get('learn', 'App\Http\Controllers\LearningController@index_user')->name('learnings');

//logbook
Route::get('logbooks', 'App\Http\Controllers\LogbookController@index_user')->name('logbooks');
Route::post('simpan_logbooks', 'App\Http\Controllers\LogbookController@simpan_user')->name('simpan_logbooks');
Route::put('/update_logbooks/{id}', 'App\Http\Controllers\LogbookController@update_user')->name('update_logbooks');
Route::delete('/hapus_logbooks/{id}', 'App\Http\Controllers\LogbookController@hapus_user')->name('hapus_logbooks');

//Tugas
Route::get('task', 'App\Http\Controllers\TugasController@index_user')->name('task');
Route::post('save_task', 'App\Http\Controllers\TugasController@simpan_user')->name('save_task');
Route::put('/update_task/{id}', 'App\Http\Controllers\TugasController@update_user')->name('update_task');
Route::delete('/hapus_task/{id}', 'App\Http\Controllers\TugasController@hapus_user')->name('hapus_task');


//Mentor
Route::get('/dashboard_mentor', 'App\Http\Controllers\UserdashController@index_mentor')->name('mentor');

//learning PATH
Route::get('learns', 'App\Http\Controllers\LearningController@index_mentor')->name('learningpath');

//logbook
Route::get('log', 'App\Http\Controllers\LogbookController@index_mentor')->name('logbooks_mentor');
Route::post('simpan_log', 'App\Http\Controllers\LogbookController@simpan_mentor')->name('simpan_log');
Route::put('/update_log/{id}', 'App\Http\Controllers\LogbookController@update_mentor')->name('update_log');
Route::delete('/hapus_logbooks/{id}', 'App\Http\Controllers\LogbookController@hapus_mentor')->name('hapus_log');

//Tugas
Route::get('tasks', 'App\Http\Controllers\TugasController@index_mentor')->name('task_mentor');
Route::post('save_tasks', 'App\Http\Controllers\TugasController@simpan_mentor')->name('save_tasks');
Route::put('/update_tasks/{id}', 'App\Http\Controllers\TugasController@update_mentor')->name('update_tasks');
Route::delete('/hapus_tasks/{id}', 'App\Http\Controllers\TugasController@hapus_mentor')->name('hapus_tasks');


//Akun
Route::get('mentees', 'App\Http\Controllers\AkunController@index_mentor')->name('mentees');
Route::post('simpan_mentee', 'App\Http\Controllers\AkunController@simpan_mentor')->name('simpan_mentee');
Route::put('/update_mentee/{id}', 'App\Http\Controllers\AkunController@update_mentor')->name('update_mentee');
Route::delete('/hapus_mentee/{id}', 'App\Http\Controllers\AkunController@hapus_mentor')->name('hapus_mentee');
