<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public $teachers = [
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

    public function index(){
        return view('docenti', ['docenti' => $this->teachers]);
    }

    public function show($id){
        foreach($this->teachers as $teacher){
            if($id == $teacher['id']){
                return view('dettaglio-docente', ['docente' => $teacher]);
            }
        }
    }
}
