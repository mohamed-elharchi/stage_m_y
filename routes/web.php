<?php

use App\Http\Controllers\LoginController;
use App\Http\Middleware\DirectorMiddleware;
use App\Http\Middleware\GeneralGuardMiddleware;
use App\Http\Middleware\TeacherMiddleware;
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

Route::get('/login', [LoginController::class, 'indexLogin'])->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [LoginController::class, "indexDashboard"])->name('indexDashboard');

});
