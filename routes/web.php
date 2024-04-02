<?php

use App\Http\Controllers\LoginController;
use App\Http\Middleware\DirectorMiddleware;
use App\Http\Middleware\GeneralGuardMiddleware;
use App\Http\Middleware\TeacherMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccueilController;
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


Route::get('/accueil',[AccueilController::class, 'index'])->name('accueil');


Route::get('/login', [LoginController::class, 'indexLogin'])->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::middleware(['director'])->group(function () {
//     Route::get('/dashboard', [LoginController::class, "indexDashboard"])->name('indexDashboard');

// });

Route::group(['middleware' => ['auth', DirectorMiddleware::class]], function () {
    Route::get('/director/dashboard', [LoginController::class, "directorDashboard"])->name('directorDashboard');
    Route::get('/generalGuard/dashboard', [LoginController::class, "generalGuardDashboard"])->name('generalGuard_dashboard');

});




Route::group(['middleware' => ['auth', GeneralGuardMiddleware::class]], function () {
    // Route::get('/general-guard/dashboard', 'GeneralGuardController@dashboard')->name('general_guard.dashboard');
    Route::get('/generalGuard/dashboard', [LoginController::class, "generalGuardDashboard"])->name('generalGuard_dashboard');

});

Route::group(['middleware' => ['auth', TeacherMiddleware::class]], function () {
    // Route::get('/teacher/dashboard', 'TeacherController@dashboard')->name('teacher.dashboard');
    Route::get('/teacher/dashboard', [LoginController::class, "teacherDashboard"])->name('teacherDashboard');
});
