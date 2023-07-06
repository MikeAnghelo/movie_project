@extends('template')
@section('contenido')
    <h1 class="text-center text-primary">Registrar Pelicula</h1>
    <form action="{{route('saveMovies')}}" method="POST">
        <!--Solicitamos Token-->
        @csrf
        <label for="">Titulo</label>
        <input type="text" name="titulo" class="form-control">
        <label for="">Sinopsis</label>
        <input type="text" name="sinopsis" class="form-control">
        <label for="">Año de Lanzamiento</label>
        <input type="date" name="anoLanzamiento" class="form-control">
        <label for="">Duracion</label>
        <input type="number" name="duracion" class="form-control">
        <label for="">Selecciona Director</label>
        <select name="directores" class="form-control">
            @foreach ($directores as $item)
                <option value="{{$item->id_director}}">{{$item->nombre}}</option>
            @endforeach
        </select>
        <label for="">Selecciona Compañia</label>
        <select name="companias" class="form-control">
            @foreach ($companias as $element)
                <option value="{{$element->id_companias}}">{{$element->nombre}}</option>
            @endforeach
        </select>
        <input type="submit" class="btn btn-success mt-3" value="Guardar Datos">
    </form>
@endsection