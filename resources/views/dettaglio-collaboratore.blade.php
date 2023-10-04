<x-layout>
  <x-header>
    Dettaglio {{ $helper['name'] }}
  </x-header>
  <div class="container min-vh-100 my-5">
    <div class="row">
      <div class="col-12 d-flex justify-content-center">
        <div class="card shadow" style="width: 18rem;">
          <img src="https://picsum.photos/200" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $helper['name'] }} {{ $helper['surname'] }}</h5>
              <p class="card-text"><strong>Età:</strong> {{ $helper['age'] }}</p>
              <a href="{{route('collaborators')}}" class="btn btn-primary">Torna indietro</a>
            </div>
        </div>
      </div>
    </div>
  </div>
</x-layout>