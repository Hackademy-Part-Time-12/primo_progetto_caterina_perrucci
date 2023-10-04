<x-layout>
  <x-header>
    Materia
  </x-header>
  <div class="container my-5">
    <div class="row">
      @foreach($students as $student)
        <div class="col-12 col-md-4 my-3 d-flex justify-content-center">
          <div class="card shadow" style="width: 18rem;">
            <img src="https://picsum.photos/200" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $student['name'] }} {{ $student['surname'] }}</h5>
              <p class="card-text"><strong>Età:</strong> {{ $student['age'] }}</p>
              <a href="{{route('dettaglio-studente', ['id' => $student['id'] ])}}" class="btn btn-primary">
                Vai al dettaglio
              </a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</x-layout>