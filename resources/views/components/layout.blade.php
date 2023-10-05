<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Coalescing operetor -->
    <!-- Se nelle pagine ti passo il valore di $title, visualizza quel valore, altrimenti fai visualizzare il titolo di default -->
    <title>{{ $title ?? 'Titolo di default' }}</title>

    <!-- con la direttiva blade vado ad recuperare i percorsi dei file app.css e app.js -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
  </head>
  <body>
    <!-- Richiamo il componente navbar come un self-closing tag -->
    <x-navbar/>

    <!-- Pseudo-variabile dove andranno ad inserirsi le viste dinamicamente -->
        {{ $slot }}

    <!-- Richiamo il componente footer come un self-closing tag -->
    <x-footer/>

    
  </body>
</html>