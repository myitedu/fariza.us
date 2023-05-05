<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProjectsController;

Route::get('/',[PublicController::class, 'index'])->name('home');
Route::get('/projects/dictionary',[ProjectsController::class, 'dictionary'])->name('dictionary');
