<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;

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


Route::resource('students', StudentController::class)->middleware('auth');;

Route::get('/daftar',[RegisterController::class, 'create']);
Route::get('/logout',[LoginController::class, 'logout'])->name('logout');
Route::post('/register',[RegisterController::class, 'store'])->name('register');
Route::get('/',[LoginController::class, 'index'])->name('login');
Route::post('/check',[LoginController::class, 'check'])->name('check');
