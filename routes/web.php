<?php

use App\Http\Controllers\LoginController;
use App\Http\Middleware\DirectorMiddleware;
use App\Http\Middleware\GeneralGuardMiddleware;
use App\Http\Middleware\TeacherMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\directorController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UtilisationDuTempsController;



Route::resource('news', NewsController::class);
Route::resource('utilisations', UtilisationDuTempsController::class);:












