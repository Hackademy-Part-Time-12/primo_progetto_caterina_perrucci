<x-layout>
  <x-header>
    Colaboratori
  </x-header>
  <div class="container my-5">
    <div class="row">
      @foreach ($collaborators as $collaborator)
        <a href="{{route('dettaglio-collaboratore', ['id' => $collaborator['id']])}}">{{$collaborator['name']}}</a>
      @endforeach
    </div>
  </div>
</x-layout>