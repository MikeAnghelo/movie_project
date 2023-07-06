@extends('template')

@section('contenido')
    <h1 class="text-center text-primary">Informacion de Directores</h1>

    <a href="{{url('/formDirectores')}}" class="btn btn-secondary mb-3">Registrar Director</a>

    <div class="row">
      @foreach ($directores as $item)
      <div class="col-md-4">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{url('/')}}/img/director.jpg" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">{{$item->nombre}}</h5>
                  <p class="card-text">{{$item->fechaNac}}</p>
                </div>
              </div>
            </div>
          </div>
    </div>
      @endforeach
        
    </div>
@endsection