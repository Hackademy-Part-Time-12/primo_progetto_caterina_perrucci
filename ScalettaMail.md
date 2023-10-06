## Come inviare una mail su Laravel
1. Creare una rotta get con funzione nel controller che rimanda alla vista con un form
2. Il form deve avere:
        2.1 action -> nome della rotta per inviare i dati
        2.2 method -> metodo della rotta (POST)
        2.3 @csrf -> indispensabile altrimenti errore 419
        2.4 negli input attributi type e name
        2.5 bottone di tipo submit
3. Creare una rotta di tipo post con funzione nel controller 
        3.1 accetta come parametro un oggetto di classe Request
        3.2 salvare i dati della request dentro delle variabili. Es. $name = $request->name
4. Creare la classe mail: php artisan make:mail NomeMail
        4.1 envelope: l'oggetto della mail e il mittente 
        4.2 content: ritorno della vista HTML dell'email
5. Creare in views cartella mail con il file blade
        5.1 inserire il messagio della mail
6. Inviare la mail all'interno della funzione nel controller
        Mail::to($email)->send(new ContactMail());
7. Fare un return redirect()->with('messaggio', '...')
        7.1 inserire il messaggio di sessione nella vista 

## Per la mail dinamica
1. Dichiarare gli attributi pubblici nella classe della mail 
2. Gestire gli attributi nel metodo construct()
3. Passare gli argomenti reali nella classe della mail nel controller. Es 
        Mail::to($email)->send(new ContactMail($name, $email, $user_message));
4. Accedere a questi attributi nell'html della mail