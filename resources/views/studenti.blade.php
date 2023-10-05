<x-layout>
  <x-header>
    Studenti
  </x-header>
  <x-slot name="title">
    Studenti
  </x-slot>
  <div class="container my-5">
    <div class="row">
      @foreach($students as $student)
        <div class="col-12 col-md-4 my-3 d-flex justify-content-center">
          <!-- Richiamo il componente card con tag autoconclusivo. Inserisco degli attributi che come valore avranno la chiave della variabile che si sta ciclando -->
          <x-card 
          id="{{$student['id']}}"
          name="{{$student['name']}}"
          surname="{{$student['surname']}}"
          age="{{$student['age']}}"
          />
        </div>
      @endforeach
    </div>
  </div>
</x-layout>



