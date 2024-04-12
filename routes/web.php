<?php

use App\Http\Controllers\LoginController;
use App\Http\Middleware\DirectorMiddleware;
use App\Http\Middleware\GeneralGuardMiddleware;
use App\Http\Middleware\TeacherMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\directorController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\teacherController;
use App\Http\Controllers\UtilisationDuTempsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Contact2Controller;



























Route::get('/accueil', [AccueilController::class, 'index'])->name('accueil');
Route::get('/accueil', [Contact2Controller::class, 'showInAyoub'])->name('accueil');




Route::get('/login', [LoginController::class, 'indexLogin'])->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::middleware(['director'])->group(function () {
//     Route::get('/dashboard', [LoginController::class, "indexDashboard"])->name('indexDashboard');

// });



// director dashboard :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::

Route::group(['middleware' => ['auth', DirectorMiddleware::class]], function () {
    // Route::get('/director/dashboard', [directorController::class, "directorDashboard"])->name('directorDashboard');
    // Route::get('/dashboard', [directorController::class, "generalGuardDashboard"])->name('generalGuard_dashboard');

    Route::get('/dashboard/allGeneralGuard', [directorController::class, "index"])->name('general_guard');
    Route::get('/dashboard/addGeneralGuard', [directorController::class, "create"])->name('addGeneralGuard');
    Route::delete('/dashboard/deleteGeneralGuard/{id}', [directorController::class, "destroy"])->name('deleteGeneral_guard');
    Route::get('/dashboard/updateGeneralGuard/{id}/edit', [directorController::class, "edit"])->name('updateGeneral_guard');
    Route::patch('/dashboard/updateGeneralGuard/{id}', [directorController::class, "update"])->name('saveUpdate');
    Route::post('/dashboard/saveGeneralGuard', [directorController::class, "store"])->name('saveGeneralGuard');
    Route::get('/dashboard/filter', [directorController::class, "filter"])->name('filterGeneralGuards');


    Route::delete('/dashboard/deleteMatiere/{id}', [directorController::class, "destroyMatiere"])->name('deleteMatiere');
    Route::get('/dashboard/addMatiere', [directorController::class, "showCreateMatiere"])->name('addMatiere');
    Route::post('/dashboard/addMatiere/', [directorController::class, "saveMatiere"])->name('saveMatiere');
    Route::get('/dashboard/Matieres', [directorController::class, "displayMatieres"])->name('displayMatieres');



    Route::get('/dashboard/departements', [directorController::class, "showDepartements"])->name('showDepartements');
    Route::get('/dashboard/addDepartement', [directorController::class, "addDepartement"])->name('addDepartement');
    Route::post('/dashboard/addDepartement', [directorController::class, "saveDepartement"])->name('saveDepartement');
    Route::delete('/dashboard/deleteDepartement/{id}', [directorController::class, "destroyDepartement"])->name('deleteDepartement');



    Route::get('/dashboard/professeurs', [directorController::class, "displayTeachers"])->name('displayTeachers');
    Route::get('/dashboard/addTeacher', [directorController::class, "addTeacher"])->name('addTeacher');
    Route::get('/dashboard/updateTeacher/{id}', [directorController::class, "updateTeacher"])->name('updateTeacher');
    Route::patch('/dashboard/updateTeacher/{id}', [directorController::class, "saveUpdate"])->name('saveUpdateTeacher');
    Route::post('/dashboard/addTeacher', [directorController::class, "saveTeacher"])->name('saveTeacher');
    Route::delete('/dashboard/deleteTeacher/{id}', [directorController::class, "destroyTeacher"])->name('deleteTeacher');






Route::resource('news', NewsController::class);
Route::resource('utilisations', UtilisationDuTempsController::class);

Route::get('/contact', [ContactController::class, 'showForm']);
Route::post('/contact', [ContactController::class, 'submitForm']);
Route::delete('/messages/{id}', [ContactController::class, 'deleteMessage']);
Route::get('/messages', [ContactController::class, 'showMessage']);
Route::get('/contacts', [Contact2Controller::class, 'index'])->name('contacts.index');
Route::get('/contacts/{contact}/edit', [Contact2Controller::class, 'edit'])->name('contacts.edit');
Route::put('/contacts/{contact}', [Contact2Controller::class, 'update'])->name('contacts.update');
});


// general guard dashboard ::::::::::::::::::::::::::::::::::::::::::::::::::::::::

Route::group(['middleware' => ['auth', GeneralGuardMiddleware::class]], function () {

    Route::delete('/dashboard/deleteMatiere/{id}', [directorController::class, "destroyMatiere"])->name('deleteMatiere');
    Route::get('/dashboard/addMatiere', [directorController::class, "showCreateMatiere"])->name('addMatiere');
    Route::post('/dashboard/addMatiere/', [directorController::class, "saveMatiere"])->name('saveMatiere');
    Route::get('/dashboard/Matieres', [directorController::class, "displayMatieres"])->name('displayMatieres');



    Route::get('/dashboard/departements', [directorController::class, "showDepartements"])->name('showDepartements');
    Route::get('/dashboard/addDepartement', [directorController::class, "addDepartement"])->name('addDepartement');
    Route::post('/dashboard/addDepartement', [directorController::class, "saveDepartement"])->name('saveDepartement');
    Route::delete('/dashboard/deleteDepartement/{id}', [directorController::class, "destroyDepartement"])->name('deleteDepartement');



    Route::get('/dashboard/professeurs', [directorController::class, "displayTeachers"])->name('displayTeachers');
    Route::get('/dashboard/addTeacher', [directorController::class, "addTeacher"])->name('addTeacher');
    Route::get('/dashboard/updateTeacher/{id}', [directorController::class, "updateTeacher"])->name('updateTeacher');
    Route::patch('/dashboard/updateTeacher/{id}', [directorController::class, "saveUpdate"])->name('saveUpdateTeacher');
    Route::post('/dashboard/addTeacher', [directorController::class, "saveTeacher"])->name('saveTeacher');
    Route::delete('/dashboard/deleteTeacher/{id}', [directorController::class, "destroyTeacher"])->name('deleteTeacher');





    Route::resource('news', NewsController::class);
    Route::resource('utilisations', UtilisationDuTempsController::class);
    Route::get('/contact', [ContactController::class, 'showForm']);
    Route::post('/contact', [ContactController::class, 'submitForm']);
    Route::delete('/messages/{id}', [ContactController::class, 'deleteMessage']);
    Route::get('/messages', [ContactController::class, 'showMessage']);
    Route::get('/contacts', [Contact2Controller::class, 'index'])->name('contacts.index');
    Route::get('/contacts/{contact}/edit', [Contact2Controller::class, 'edit'])->name('contacts.edit');
    Route::put('/contacts/{contact}', [Contact2Controller::class, 'update'])->name('contacts.update');

});


// teacher dashboard :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::

Route::group(['middleware' => ['auth', TeacherMiddleware::class]], function () {
    Route::get('/teacher/dashboard', [teacherController::class, "teacherDashboard"])->name('teacherDashboard');
    Route::match(['get', 'post'], '/teacher/absence/', [teacherController::class, "displayAbsence"])->name('displayAbsence');


});



// director

























