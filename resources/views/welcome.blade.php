<x-layout>
  <!-- Tag per il titolo delle pagine. Nell'attributo name vado ad inserire il nome della variabile che ho messo per il title e poi nel tag inserisco come contenuto il titolo che voglio visualizzare in quella pagina-->
  <x-slot name="title">
    Hackademy
  </x-slot>

  <!-- Richiamo il componente header a cui devo passare il valore della variabile slot all'interno del componente -->
  <x-header>
    Benvenuti
  </x-header>    

  @if (session('emailSent'))
    <div class="alert alert-success">
        {{ session('emailSent') }}
    </div>
  @endif
  
  <div class="container min-vh-100 my-5">
    <div class="row ">
      <div class="col-12 justify-content-center">
        <img src="/media/venezia.jpg" alt="" class="img-fluid">
      </div>
    </div>
  </div>
</x-layout>