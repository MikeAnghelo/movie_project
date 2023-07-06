@extends('template')
@section('contenido')
    <h1 class="text-center text-primary">Editar Pelicula</h1>
    <form action="{{route('updateMoviesById', $peliculas->id_peliculas)}}" method="POST">
        @method('PUT')
        @csrf
        <label for="">Titulo</label>
        <input type="text" name="titulo" class="form-control" value="{{$peliculas->titulo}}">
        <label for="">Sinopsis</label>
        <input type="text" name="sinopsis" class="form-control" value="{{$peliculas->sinopsis}}">
        <label for="">Año de Lanzamiento</label>
        <input type="date" name="anoLanzamiento" class="form-control" value="{{$peliculas->anoLanzamiento}}">
        <label for="">Duracion</label>
        <input type="number" name="duracion" class="form-control" value="{{$peliculas->duracion}}">
        <label for="">Selecciona Director</label>
        <select name="directores" class="form-control">
            <option value="{{$peliculas->id_director}}">{{$peliculas->director}}</option>
            @foreach ($directores as $item)
                <option value="{{$item->id_director}}">{{$item->nombre}}</option>
            @endforeach
        </select>
        <label for="">Selecciona Compañia</label>
        <select name="companias" class="form-control">
            <option value="{{$peliculas->id_compania}}">{{$peliculas->compania}}</option>
            @foreach ($companias as $element)
                <option value="{{$element->id_companias}}">{{$element->nombre}}</option>
            @endforeach
        </select>
        <input type="submit" class="btn btn-primary mt-3" value="Actualizar Datos">
    </form>
@endsection