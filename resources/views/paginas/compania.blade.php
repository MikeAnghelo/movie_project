@extends('template')

@section('contenido')
    <h1 class="text-center text-primary">Informacion de Compañias</h1>

    <a href="{{url('/formCompanias')}}" class="btn btn-secondary mb-3">Registrar Compañia</a>

    <div class="row">
      @foreach ($companias as $item)
      <div class="col-md-4">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{url('/')}}/img/Compania.jpg" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">{{$item->nombre}}</h5>
                  <p class="card-text">{{$item->direccion}}</p>
                </div>
              </div>
            </div>
          </div>
    </div>
      @endforeach
        
    </div>
@endsection