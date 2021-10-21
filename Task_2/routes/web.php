<?php

use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContactController;

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
    return view('welcome');
});

Route::get('/registration',[RegistrationController::class,'Registration'])->name('registration');
Route::post('/registration',[RegistrationController::class,'CheckRegistration'])->name('registration');

Route::get('/login',[LoginController::class,'LoginShow'])->name('login');
Route::post('/login',[LoginController::class,'CheckLogin'])->name('login');

Route::get('/contact',[ContactController::class,'ContactShow'])->name('contact');
Route::post('/contact',[ContactController::class,'CheckContact'])->name('contact');