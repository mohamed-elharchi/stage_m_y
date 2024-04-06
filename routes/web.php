<?php

use App\Http\Controllers\LoginController;
use App\Http\Middleware\DirectorMiddleware;
use App\Http\Middleware\GeneralGuardMiddleware;
use App\Http\Middleware\TeacherMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\directorController;

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
    Route::get('/director/dashboard', [directorController::class, "directorDashboard"])->name('directorDashboard');
    Route::get('/director/dashboard/allGeneralGuard', [directorController::class, "index"])->name('general_guard');
    Route::get('/director/dashboard/addGeneralGuard', [directorController::class, "create"])->name('addGeneralGuard');


    Route::delete('/director/dashboard/deleteGeneralGuard/{id}', [directorController::class, "destroy"])->name('deleteGeneral_guard');
    Route::get('/director/dashboard/updateGeneralGuard/{id}/edit', [directorController::class, "edit"])->name('updateGeneral_guard');
    Route::patch('/director/dashboard/updateGeneralGuard/{id}', [directorController::class, "update"])->name('saveUpdate');
    Route::post('/director/dashboard/saveGeneralGuard', [directorController::class, "store"])->name('saveGeneralGuard');
    Route::get('/director/dashboard/filter', [directorController::class, "filter"])->name('filterGeneralGuards');


    Route::delete('/director/dashboard/deleteMatiere/{id}', [directorController::class, "destroyMatiere"])->name('deleteMatiere');
    Route::get('/director/dashboard/addMatiere', [directorController::class, "showCreateMatiere"])->name('addMatiere');
    Route::post('/director/dashboard/addMatiere/', [directorController::class, "saveMatiere"])->name('saveMatiere');
    Route::get('/director/dashboard/Matieres', [directorController::class, "displayMatieres"])->name('displayMatieres');



    Route::get('/director/dashboard/departements', [directorController::class, "showDepartements"])->name('showDepartements');
    Route::get('/director/dashboard/addDepartement', [directorController::class, "addDepartement"])->name('addDepartement');
    Route::post('/director/dashboard/addDepartement', [directorController::class, "saveDepartement"])->name('saveDepartement');
    Route::delete('/director/dashboard/deleteDepartement/{id}', [directorController::class, "destroyDepartement"])->name('deleteDepartement');





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

