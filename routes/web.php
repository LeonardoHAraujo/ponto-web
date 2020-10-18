<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClockWebController;

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

Route::get('/', [ClockWebController::class, 'index'])->middleware('authClock')->name('home');
Route::get('/login', [ClockWebController::class, 'showForm'])->name('login');
Route::post('/autenticate', [ClockWebController::class, 'autenticate'])->name('autenticate');
