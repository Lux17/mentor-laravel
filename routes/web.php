<?php

use Illuminate\Support\Facades\Route;

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
Route::post('/simpan', 'App\Http\Controllers\DashboardController@simpan')->name('simpan')->middleware('auth');
});



//login
Route::get('/login', 'App\Http\Controllers\LoginController@login')->name('login');
Route::post('dashboard', 'App\Http\Controllers\LoginController@actionlogin')->name('actionlogin');



