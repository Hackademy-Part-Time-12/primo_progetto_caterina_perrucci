<?php

use App\Http\Controllers\CollaboratorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// MVC -> Model View Controller

// Rotte Public
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/dove-siamo', [PublicController::class, 'location'])->name('location');
Route::get('/contatti', [PublicController::class, 'contact'])->name('contatti');
Route::post('/contatti/invia', [PublicController::class, 'contactSubmit'])->name('invia.contatto');
// Rotte Student
Route::get('/studenti', [StudentController::class, 'index'])->name('students');
Route::get('/studenti/dettaglio/{id}', [StudentController::class, 'show'])->name('dettaglio-studente');
Route::get('/studenti/materia/{subject}', [StudentController::class, 'filterStudentBySubject'])->name('materia-studente');
// Rotte Teacher
Route::get('/docenti', [TeacherController::class, 'index'])->name('teachers');
Route::get('/docenti/dettaglio/{id}', [TeacherController::class, 'show'])->name('dettaglio-docente');
// Rotte Collaborator
Route::get('/collaboratori', [CollaboratorController::class, 'index'])->name('collaborators');
Route::get('/collaboratori/dettaglio/{id}', [CollaboratorController::class, 'show'])->name('dettaglio-collaboratore');