<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UtilisationDuTempsController;
use App\Http\Middleware\DirectorMiddleware;
use App\Http\Middleware\GeneralGuardMiddleware;
use App\Http\Middleware\TeacherMiddleware;

Route::get('/accueil', [AccueilController::class, 'index'])->name('accueil');

Route::get('/login', [LoginController::class, 'indexLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [LoginController::class, "indexDashboard"])->name('indexDashboard');
    Route::resource('news', NewsController::class);

    Route::get('/app', [NewsController::class, 'app'])->name('app');
    Route::resource('utilisations', UtilisationDuTempsController::class);
});

Route::group(['middleware' => ['auth', DirectorMiddleware::class]], function () {
    Route::get('/director/dashboard', [LoginController::class, "directorDashboard"])->name('directorDashboard');
});

Route::group(['middleware' => ['auth', GeneralGuardMiddleware::class]], function () {
    Route::get('/generalGuard/dashboard', [LoginController::class, "generalGuardDashboard"])->name('generalGuard_dashboard');
});

Route::group(['middleware' => ['auth', TeacherMiddleware::class]], function () {
    Route::get('/teacher/dashboard', [LoginController::class, "teacherDashboard"])->name('teacherDashboard');
});
