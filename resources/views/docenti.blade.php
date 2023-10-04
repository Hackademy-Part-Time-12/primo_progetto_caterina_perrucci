<x-layout>   
  <x-header>
    Docenti
  </x-header>
  <div class="container my-5">
    <div class="row">
      @foreach($docenti as $docente)
        <div class="col-12 col-md-4 my-3 d-flex justify-content-center">
          <x-card 
          id="{{$docente['id']}}"
          name="{{$docente['name']}}"
          surname="{{$docente['surname']}}"
          age="{{$docente['age']}}"
          />
        </div>
      @endforeach
    </div>
  </div>
</x-layout>