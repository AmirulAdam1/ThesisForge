<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PublicationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExpertController;

// Dashboard route
Route::get('/dashboard', function () {
    return view('users.dashboard');
})->middleware(['auth', 'verified', 'prevent-back-history'])->name('dashboard');

// Auth routes
require __DIR__.'/auth.php';

Route::middleware('prevent-back-history')->group(function () {
    // Show All Users
    Route::get('/users', [UserController::class, 'index'])->name('users.index')->middleware('auth');

    // Show Create Form
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create')->middleware('auth', 'role:staff');

    // Store New Platinum
    Route::post('/users/store', [UserController::class, 'store'])->name('users.store')->middleware('auth', 'role:staff');

    // Show Report (GET request to display the form)
    Route::get('/users/report', [UserController::class, 'showReportForm'])->name('users.report')->middleware('auth');

    // Process Report (POST request to handle the form submission)
    Route::post('/users/report', [UserController::class, 'report'])->name('users.report.submit')->middleware('auth');


    // Show Edit Form
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit')->middleware('auth');

    // Update User
    Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update')->middleware('auth');

    // Show Single User
    Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show')->middleware('auth');
});

// Show All Experts
Route::get('/experts', [ExpertController::class, 'viewAllExpert'])->name('experts.viewAllExpert')->middleware('auth');

// Show Own Experts
Route::get('/yourexperts', [ExpertController::class, 'viewOwnExpert'])->name('experts.viewOwnExpert')->middleware('auth');

// Show Add Expert Form
Route::get('/experts/add', [ExpertController::class, 'addOwnExpert'])->name('experts.addOwnExpert')->middleware('auth');

// Store New Expert
Route::post('/experts/saveExpert', [ExpertController::class, 'saveExpert'])->name('experts.saveExpert')->middleware('auth');

<<<<<<< Updated upstream
// Publication routes
Route::middleware('auth')->group(function () {
    Route::get('/publications', [PublicationController::class, 'viewPublicationList'])->name('managePublication.viewPublicationList');
    Route::get('/publications/all', [PublicationController::class, 'viewAllPublicationList'])->name('managePublication.viewAllPublicationList');
    Route::get('/publications/add', [PublicationController::class, 'addPublication'])->name('managePublication.addPublication');
    Route::post('/publications/add', [PublicationController::class, 'addPublicationPost'])->name('managePublication.addPublicationPost');
    Route::get('/publications/edit/{publication_id}', [PublicationController::class, 'editPublication'])->name('managePublication.editPublication');
    Route::post('/publications/edit/{publication_id}', [PublicationController::class, 'editPublicationPost'])->name('managePublication.editPublicationPost');
    Route::get('/publications/delete/{publication_id}', [PublicationController::class, 'deletePublication'])->name('managePublication.deletePublication');
    Route::get('/publications/{publication_id}', [PublicationController::class, 'viewPublication'])->name('managePublication.viewPublication');
    Route::get('/Searchpublication', [PublicationController::class, 'search'])->name('SearchPublication.search');
    Route::get('/SearchPublicationMentor', [PublicationController::class, 'searchMentor'])->name('SearchPublicationMentor.searchMentor');
    Route::get('/publications/file/{publication_id}', [PublicationController::class, 'viewPublicationFile'])->name('managePublication.viewPublicationFile');
    Route::get('/GenerateReportPublication', [PublicationController::class, 'generateReportView'])->name('managePublication.viewReport');
    Route::post('/GenerateReportPublication', [PublicationController::class, 'generateReport'])->name('GenerateReportPublication.generate');
    Route::get('/publicationReport', [UserController::class, 'publicationReport'])->name('reportPublication');
});

=======
// Show Single Expert
Route::get('/experts/{expert}', [ExpertController::class, 'show'])->name('experts.view-expert')->middleware('auth');

// Delete Expert
Route::delete('/experts/{expert}', [ExpertController::class, 'destroy'])->name('experts.destroy')->middleware('auth');

// Show Edit Expert
Route::get('/experts/{expert}/edit', [ExpertController::class, 'editOwnExpert'])->name('experts.editOwnExpert')->middleware('auth');
>>>>>>> Stashed changes
