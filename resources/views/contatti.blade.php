<x-layout>
<x-header>
    Contattaci
  </x-header>

  <div class="container my-5">
        <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                <form action="{{route('invia.contatto')}}" method="POST" class="shadow p-5">
                @csrf
                @if (session('emailError'))
                        <div class="alert alert-danger">
                                {{ session('emailError') }}
                        </div>
                @endif
                        <div class="mb-3">
                        <label for="name" class="form-label">Nome e cognome</label>
                        <input type="text" name="name" class="form-control" id="name" >
                        </div>
                        <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email">
                        </div>
                        <div class="mb-3">
                        <label for="user_message" class="form-label">Messaggio</label>
                        <textarea name="user_message" class="form-control" id="user_message" cols="30" rows="7"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Contattaci</button>
                        </form>
                </div>
        </div>
  </div>
</x-layout>