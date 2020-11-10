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

Route::get('/', [ClockWebController::class, 'index'])->name('login');
Route::post('/autenticate', [ClockWebController::class, 'autenticate'])->name('autenticate');

Route::middleware(['auth'])->group(function() {

    Route::get('/admin', [ClockWebController::class, 'admin'])->name('admin');
    Route::get('/ponto-web', [ClockWebController::class, 'clock'])->name('clock');
    Route::get('/logout', [ClockWebController::class, 'logout'])->name('logout');

});
