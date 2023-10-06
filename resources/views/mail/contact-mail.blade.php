<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<body>
        <h1>Grazie {{ $name }}, per averci contattato</h1>
        <h2>Risponderemo al più presto possibile a questa mail {{$email}}</h2>
        <p>Questo è il contenuto del tuo messaggio: {{$user_message}}</p>
        <small>Se non hai fatto richiesta, ci scusiamo per il disagio</small>
</body>
</html>