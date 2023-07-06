@extends('template')
@section('contenido')
    <h1 class="text-center text-primary">Registrar Director</h1>
    <form action="{{route('saveDirectors')}}" method="POST">
        @csrf
        <label for="">Nombre del Director</label>
        <input type="text" name="nombre" class="form-control">
        <label for="">Fecha de Nacimiento</label>
        <input type="date" name="fechaNac" class="form-control">
        <input type="submit" class="btn btn-success mt-3" value="Guardar Datos">
    </form>
@endsection