@extends('template')
@section('contenido')
    <h1 class="text-center text-primary">Registrar Compañia Cinematografica</h1>
    <form action="{{route('saveCompany')}}" method="POST">
        @csrf
        <label for="">Nombre de la Compañia Cinematografica</label>
        <input type="text" name="nombre" class="form-control">
        <label for="">Direccion</label>
        <input type="text" name="direccion" class="form-control">
        <input type="submit" class="btn btn-success mt-3" value="Guardar Datos">
    </form>
@endsection