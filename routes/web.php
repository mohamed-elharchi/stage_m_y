<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

Route::get('/login', [LoginController::class, 'indexLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::middleware(['auth'])->group(function () {
Route::get('/dashboard', [LoginController::class, "indexDashboard"])->name('indexDashboard');
Route::resource('news', NewsController::class);
Route::get('/app', [NewsController::class, 'app'])->name('app');



});
