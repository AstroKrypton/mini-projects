<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\JobpositionController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\ApplicationController;
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

Route::get('/',[AuthController::class, 'index'])->name('register.form');
Route::get('/login',[AuthController::class, 'show_login'])->name('login.form');
Route::get('/dashboard',[AuthController::class, 'dashboard'])->name('dashboard');
Route::post('/register',[AuthController::class, 'create'])->name('user.register');
Route::post('/loginn',[AuthController::class, 'login'])->name('user.login');

//Job positions Routes ROUTES
Route::get('/jobs',[JobpositionController::class, 'index'])->name('job.index');
Route::post('/job/create',[JobpositionController::class, 'store'])->name('job.store');
Route::delete('/job/delete/{id}',[JobpositionController::class, 'destroy'])->name('job.destroy');
Route::put('/edit/{id}',[JobpositionController::class, 'update'])->name('job.update');
Route::get('/edit/{id}',[JobpositionController::class, 'show_update'])->name('edit.job');

//Applicants Routes
Route::get('/applicants',[ApplicantController::class, 'index'])->name('applicant.index');
Route::post('/applicant/create',[ApplicantController::class, 'store'])->name('applicant.store');
Route::delete('/applicant/delete/{id}',[ApplicantController::class,'destroy'])->name('applicant.destroy');
Route::get('/applicant/edit/{id}',[ApplicantController::class, 'edit'])->name('applicant.edit');
Route::put('applicant/update/{id}',[ApplicantController::class, 'update'])->name('applicant.update');

//Application Controller

Route::resource(ApplicationController::class);
