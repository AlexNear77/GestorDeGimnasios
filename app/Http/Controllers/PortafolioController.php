<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortafolioController extends Controller
{
    public function index()
    {
        $portafolios =[
            ['title' => 'Sistema para Gymansio'],
            ['title' => 'Sistema para venta de articulos'],
            ['title' => 'Sistema para Hotel (Aplicacion de escritorio)'],
            ['title' => 'Pagina Web de Hotel, con sistema incluido']
        ];
        return view('portafolio',compact('portafolios'));
    }


    
}
