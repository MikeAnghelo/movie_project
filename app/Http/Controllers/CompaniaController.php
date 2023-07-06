<?php

namespace App\Http\Controllers;
use App\Models\Companias;
use Illuminate\Http\Request;

class CompaniaController extends Controller
{
    public function index(){
        $companias = Companias::all();
        return view("paginas.compania", ["companias" => $companias]);
    }

    public function viewForm(){
        return view("paginas.registrarCompania");
    }

    public function store(Request $request){
        $companias = new Companias();
        $companias->nombre = $request->post('nombre');
        $companias->direccion = $request->post('direccion');
        $companias->save();
        return redirect()->route('getCompany');
    }
}
