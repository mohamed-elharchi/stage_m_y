<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NewsController;
use App\Http\Controllers\UtilisationDuTempsController;



Route::resource('news', NewsController::class);
Route::resource('utilisations', UtilisationDuTempsController::class);







