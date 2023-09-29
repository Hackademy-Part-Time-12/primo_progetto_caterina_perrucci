<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->name('homepage');

Route::get('/studenti', function(){
    $students = [
        [
            'id' => 1,
            'name' => 'Emanuele',
            'surname' => 'Zago', 
            'age' => 35,
        ],
        [
            'id' => 2,
            'name' => 'Ernesto',
            'surname' => 'Sparalesto', 
            'age' => 21,
        ],
        [
            'id' => 3,
            'name' => 'Ivan',
            'surname' => 'Schena', 
            'age' => 36,
        ],
        [
            'id' => 4,
            'name' => 'Giulia',
            'surname' => 'Gaudimondo', 
            'age' => 18,
        ],
    ];

    return view('studenti', ['students' => $students]);
})->name('students');

Route::get('/studenti/dettaglio/{id}', function($id){
    $students = [
        [
            'id' => 1,
            'name' => 'Emanuele',
            'surname' => 'Zago', 
            'age' => 35,
            'subject' => 'Laravel'
        ],
        [
            'id' => 2,
            'name' => 'Ernesto',
            'surname' => 'Sparalesto', 
            'age' => 21,
            'subject' => 'HTML'
        ],
        [
            'id' => 3,
            'name' => 'Ivan',
            'surname' => 'Schena', 
            'age' => 36,
            'subject' => 'JavaScript'
        ],
        [
            'id' => 4,
            'name' => 'Giulia',
            'surname' => 'Gaudimondo', 
            'age' => 18,
            'subject' => 'CSS'
        ],
    ];

    foreach($students as $student){
        if($id == $student['id']){
            return view('dettaglio-studente', ['student' => $student]);
        }
    }
})->name('dettaglio-studente');

Route::get('/docenti', function(){
    $teachers = [
        [
            'id' => 1,
            'name' => 'Mario',
            'surname' => 'Rossi', 
            'age' => 35,
        ],
        [
            'id' => 2,
            'name' => 'Luca',
            'surname' => 'Bianchi', 
            'age' => 21,
        ],
        [
            'id' => 3,
            'name' => 'Gianni',
            'surname' => 'Verdi', 
            'age' => 36,
        ],
    ];
    return view('docenti', ['docenti' => $teachers]);
})->name('teachers');

Route::get('/docenti/dettaglio/{id}', function($id){
    $teachers = [
        [
            'id' => 1,
            'name' => 'Mario',
            'surname' => 'Rossi', 
            'age' => 35,
        ],
        [
            'id' => 2,
            'name' => 'Luca',
            'surname' => 'Bianchi', 
            'age' => 21,
        ],
        [
            'id' => 3,
            'name' => 'Gianni',
            'surname' => 'Verdi', 
            'age' => 36,
        ],
    ];

    foreach($teachers as $teacher){
        if($id == $teacher['id']){
            return view('dettaglio-docente', ['docente' => $teacher]);
        }
    }
})->name('dettaglio-docente');

Route::get('/dove-siamo', function(){
    return view('dove-siamo');
})->name('location');