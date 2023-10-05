<div class="card shadow" style="width: 18rem;">
        <img src="https://picsum.photos/200" class="card-img-top" alt="...">
        <div class="card-body">
                <!-- Per visualizzare i dati dinamici, richiamo gli attributi che ho passato alla card, sottodforma di variabile -->
                <h5 class="card-title">{{ $name}} {{ $surname }}</h5>
                <p class="card-text"><strong>Età:</strong> {{ $age }}</p>
                <!-- metodo che ci fa vedere il nome della rotta -->
                <!-- Se la card viene visualizzata nella rotta students fammi vedere questo bottone, altrimenti fammene vedere un altro -->
                @if(Route::currentRouteName() == 'students')
                        <a href="{{route('dettaglio-studente', ['id' => $id ])}}" class="btn btn-primary">
                        Vai al dettaglio
                        </a>
                @else
                        <a href="{{route('dettaglio-docente', ['id' => $id ])}}" class="btn btn-primary">
                        Vai al dettaglio
                        </a>
                @endif
        </div>
</div>