<?php

namespace App\Http\Controllers;
use App\Models\Peliculas;
use App\Models\Directores;
use App\Models\Companias;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){
        $peliculas = Peliculas::all();
        return view("paginas.peliculas", ["peliculas" => $peliculas]);
    }

    public function viewForm(){
        $directores = Directores::all();
        $companias = Companias::all();
        return view("paginas.registrarPelicula",["directores"=>$directores, "companias"=>$companias]);
    }

    public function store(Request $request){
        $peliculas = new Peliculas();
        $peliculas->titulo = $request->post('titulo');
        $peliculas->anoLanzamiento = $request->post('anoLanzamiento');
        $peliculas->duracion = $request->post('duracion');
        $peliculas->sinopsis = $request->post('sinopsis');
        $peliculas->id_director = $request->post('directores');
        $peliculas->id_compania = $request->post('companias');
        $peliculas->save();
        return redirect()->route('getMovies');
    }

    public function edit($id){
        //$peliculas = Peliculas::find($id);
        $peliculas = Peliculas::join('directores', 'peliculas.id_director', '=', 'directores.id_director')
    ->join('companias', 'peliculas.id_compania', '=', 'companias.id_companias')
    ->select('peliculas.id_peliculas as id_peliculas', 'peliculas.titulo', 'peliculas.sinopsis',
        'peliculas.duracion', 'peliculas.anoLanzamiento', 'peliculas.id_director', 'directores.nombre as director',
        'companias.nombre as compania', 'companias.direccion')
    ->find($id);
        $directores = Directores::all();
        $companias = Companias::all();
        return view("paginas.editarPelicula", ["peliculas" => $peliculas, "directores"=>$directores, "companias"=>$companias]);
    }

    public function update(Request $request, $id){
        $peliculas = Peliculas::find($id);
        $peliculas->titulo = $request->post('titulo');
        $peliculas->anoLanzamiento = $request->post('anoLanzamiento');
        $peliculas->duracion = $request->post('duracion');
        $peliculas->sinopsis = $request->post('sinopsis');
        $peliculas->id_director = $request->post('directores');
        $peliculas->id_compania = $request->post('companias');
        $peliculas->update();
        return redirect()->route('getMovies');
    }

    public function destroy($id){
        $peliculas = Peliculas::where("id_peliculas","=",$id)->delete();
        return redirect()->route('getMovies');
    }
}
