<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public $students = [
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
        [
            'id' => 5,
            'name' => 'Fabio',
            'surname' => 'Piloppo', 
            'age' => 28,
            'subject' => 'CSS'
        ],
        [
            'id' => 6,
            'name' => 'Tizio',
            'surname' => 'Caio', 
            'age' => 23,
            'subject' => 'Laravel'
        ],
    ];

    public function index(){
        return view('studenti', ['students' => $this->students]);
    }

    public function show($id){
        foreach($this->students as $student){
            if($id == $student['id']){
                return view('dettaglio-studente', ['student' => $student]);
            }
        }
    }

    public function filterStudentBySubject($subject){
        //! creo una variabile a cui assegno un array vuoto
        $studentsBySubject = [];

        //! ciclo gli studenti
        foreach($this->students as $student){
            //! se la materia è uguale alla materia dello studente
            if($subject == $student['subject']){
                //!  inserisci lo studente nell'array
                $studentsBySubject[] = $student;
            }
        }
        return view('materia', ['students' => $studentsBySubject]);
    }
}
