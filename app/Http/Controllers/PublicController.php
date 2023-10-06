<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function homepage() {
        return view('welcome');
    }

    public function location(){
        return view('dove-siamo');
    }

    public function contact(){
        return view('contatti');
    }

    public function contactSubmit(Request $request){
        $name = $request->input('name');
        $email = $request->email;
        $user_message = $request->user_message;
        

        try{
            Mail::to($email)->send(new ContactMail($name, $email, $user_message));
        } catch(Exception $error){
            return redirect()->back()->with('emailError', 'Richiesta fallita. Riprova più tardi');
        }

        return redirect(route('homepage'))->with('emailSent', 'Abbiamo ricevuto la sua mail. Ti contatteremo presto');
    }
}
