<?php

use App\Http\Controllers\LoginController;
use App\Http\Middleware\DirectorMiddleware;
use App\Http\Middleware\GeneralGuardMiddleware;
use App\Http\Middleware\TeacherMiddleware;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NewsController;
use App\Http\Controllers\UtilisationDuTempsController;



Route::resource('news', NewsController::class);
Route::resource('utilisations', UtilisationDuTempsController::class);






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



// director

