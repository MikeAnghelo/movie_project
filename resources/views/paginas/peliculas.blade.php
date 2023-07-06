@extends('template')

@section('contenido')
    <h1 class="text-center text-primary">Cartelera de Peliculas</h1>

    <a href="{{url('/formPeliculas')}}" class="btn btn-secondary mb-3">Registrar Pelicula</a>

    <div class="row">
      @foreach ($peliculas as $item)
      <div class="col-md-4">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{url('/')}}/img/movie2.jpg" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">{{$item->titulo}}</h5>
                  <p class="card-text">{{$item->anoLanzamiento}}</p>
                  <p class="card-text">{{$item->sinopsis}}</p>
                  <p class="card-text"><small class="text-body-secondary">{{$item->duracion}} Horas</small></p>
                  <form action="{{route('editMoviesById', $item->id_peliculas)}}" method="POST">
                    @method('GET')
                    <button class="btn btn-primary">Editar</button>
                  </form>
                  <form action="{{route('deleteMoviesById', $item->id_peliculas)}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Eliminar</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
    </div>
      @endforeach
        
    </div>
@endsection