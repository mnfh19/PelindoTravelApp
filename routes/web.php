<?php

use Illuminate\Support\Facades\Route;

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

//php artisan make:controller C_Main
//php artisan make:model M_Main

Route::get('/', 'C_Main@index')->name('dashboard');
Route::get('/dashboard', 'C_Main@index')->name('dashboard');
Route::get('/admin', 'C_Main@admin')->name('admin');
Route::get('/add_admin', 'C_Main@add_admin')->name('admin');
Route::get('/user', 'C_Main@user')->name('user');
Route::get('/add_user', 'C_Main@add_user')->name('user');
Route::get('/kapal', 'C_Main@kapal')->name('kapal');
Route::get('/add_kapal', 'C_Main@add_kapal')->name('kapal');
Route::get('/rute', 'C_Main@rute')->name('rute');
Route::get('/add_rute', 'C_Main@add_rute')->name('rute');
Route::get('/jadwal', 'C_Main@jadwal')->name('jadwal');
Route::get('/add_jadwal', 'C_Main@add_jadwal')->name('add_jadwal');
Route::get('/detail_tiket', 'C_Main@detail_tiket')->name('jadwal');
Route::get('/booking', 'C_Main@booking')->name('booking');
Route::get('/laporan', 'C_Main@laporan')->name('laporan');


// Route::get('/', function () {
//     return view('welcome');
// });
