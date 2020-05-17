<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyect;

class ProyectController extends Controller
{
    public function index()
    {
        //$portfolio = Proyect::orderBy('created_at','DESC')->get(); una forma de ordenar de maner ascendete pero....
        $proyects = Proyect::latest()->paginate();//si no colocamos nada en lasted en automatic lo rodena de manera descendete, con paginate hace paginas pero tambien debemos agregar algo ala vista cosa que ahi esta por si las moscas
        return view('proyects.index', compact('proyects'));
    }

    
    public function create()
    {
        return view('proyects.create');
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show(Proyect $proyect)
    {
        //$proyect = Proyect::findOrFail($id); // devuelve un json y si intentan acceder con un id que no existe OrFail fallara la consulta NOT FOUND
        return view('proyects.show', [// Ah esto se le conoce como route model Binding
            'proyect' => $proyect
        ]);
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
