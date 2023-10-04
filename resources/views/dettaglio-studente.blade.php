<x-layout>
<x-slot name="title">
  {{ $student['name'] }}
  </x-slot>
  <x-header>
    Studenti
  </x-header>
  <div class="container min-vh-100 my-5">
    <div class="row ">
      <div class="col-12 d-flex justify-content-center">
        <div class="card shadow" style="width: 18rem;">
          <img src="https://picsum.photos/200" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $student['name'] }} {{ $student['surname'] }}</h5>
            <p class="card-text"><strong>Età:</strong> {{ $student['age'] }}</p>
            <p class="card-text"><strong>Materia:</strong> <a href="{{ route('materia-studente', ['subject' => $student['subject']]) }}">{{$student['subject']}}</a></p>
            <a href="{{route('students')}}" class="btn btn-primary">Torna indietro</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-layout>