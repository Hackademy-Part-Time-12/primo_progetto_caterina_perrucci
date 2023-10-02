<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollaboratorController extends Controller
{
    public $collaborators = [
        [
            'id' => 1,
            'name' => 'Luca',
            'surname' => 'Borazzo', 
            'age' => 38,
        ],
        [
            'id' => 2,
            'name' => 'Pino',
            'surname' => 'Silvestri', 
            'age' => 50,
        ],
        [
            'id' => 3,
            'name' => 'Franco',
            'surname' => 'Sorrenti', 
            'age' => 45,
        ],
    ];

    public function index(){
        return view('collaboratori', ['collaborators' => $this->collaborators]);
    }

    public function show($id){
        foreach($this->collaborators as $helper){
            if($id == $helper['id']){
                return view('dettaglio-collaboratore', ['helper' => $helper]);
            }
        }
    }
}
