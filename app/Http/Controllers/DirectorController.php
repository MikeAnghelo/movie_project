<?php

namespace App\Http\Controllers;
use App\Models\Directores;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    public function index(){
        $directores = Directores::all();
        return view("paginas.directores", ["directores" => $directores]);
    }

    public function viewForm(){
        return view("paginas.registrarDirectores");
    }

    public function store(Request $request){
        $directores = new Directores();
        $directores->nombre = $request->post('nombre');
        $directores->fechaNac = $request->post('fechaNac');
        $directores->save();
        return redirect()->route('getDirectors');
    }
}
