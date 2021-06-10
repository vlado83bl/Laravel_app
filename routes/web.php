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

Route::get('/', [\App\Http\Controllers\PagesController::class, 'dashboard']);
Route::get('/asset', [\App\Http\Controllers\PagesController::class, 'asset']);
Route::get('/asset/vessels', [\App\Http\Controllers\PagesController::class, 'vessels']);
Route::get('/communications', [\App\Http\Controllers\PagesController::class, 'communications']);
Route::get('/communications/messages', [\App\Http\Controllers\PagesController::class, 'messages']);
Route::get('/users', [\App\Http\Controllers\PagesController::class, 'users']);
Route::get('/users/userslist', [\App\Http\Controllers\PagesController::class, 'userslist']);
Route::get('/users/jobs', [\App\Http\Controllers\PagesController::class, 'jobs']);
Route::get('/users/jobs/job', [\App\Http\Controllers\PagesController::class, 'job']);
Route::get('/activities', [\App\Http\Controllers\PagesController::class, 'activities']);
Route::get('/activities/news', [\App\Http\Controllers\PagesController::class, 'news']);
Route::get('/activities/news/newsitem', [\App\Http\Controllers\PagesController::class, 'newsitem']);
Route::get('/reports', [\App\Http\Controllers\PagesController::class, 'reports']);
Route::get('/support', [\App\Http\Controllers\PagesController::class, 'support']);
Route::get('/profile', [\App\Http\Controllers\PagesController::class, 'profile']);
