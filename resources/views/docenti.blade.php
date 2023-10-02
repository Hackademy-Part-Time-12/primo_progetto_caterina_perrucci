<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('students') }}">Studenti</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('teachers') }}">Docenti</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('collaborators') }}">Collaboratori</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('location') }}">Dove siamo</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    <div class="container-fluid bg-info py-5">
      <div class="row justify-content-center">
        <div class="col-12">
          <h1 class="display-1 text-center">
            Docenti
          </h1>
        </div>
      </div>
    </div>
    <div class="container my-5">
      <div class="row">
        @foreach($docenti as $docente)
          <div class="col-12 col-md-4 my-3 d-flex justify-content-center">
            <div class="card shadow" style="width: 18rem;">
              <img src="https://picsum.photos/200" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{ $docente['name'] }} {{ $docente['surname'] }}</h5>
                <p class="card-text"><strong>Età:</strong> {{ $docente['age'] }}</p>
                <a href="{{route('dettaglio-docente', ['id' => $docente['id']])}}" class="btn btn-primary">Vai al dettaglio</a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>