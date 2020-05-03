<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyect;

class PortfolioController extends Controller
{
    public function index()
    {
        //$portfolio = Proyect::orderBy('created_at','DESC')->get(); una forma de ordenar de maner ascendete pero....
        $proyects = Proyect::latest()->paginate();//si no colocamos nada en lasted en automatic lo rodena de manera descendete, con paginate hace paginas pero tambien debemos agregar algo ala vista cosa que ahi esta por si las moscas
        return view('portfolio', compact('proyects'));
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
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
