<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class usuariosController extends Controller
{
    //                  CONTRUCTOR
    public function __construct(){
        $this->middleware(['auth','roles:admin']);
        // $this->middleware('auth');
        // $this->middleware('roles');
    }

    public function index()
    {
        return view('usuarios.index', [
            'usuarios' => User::latest()->paginate()
        ]);
    }

 
    public function create()
    {
        // return view('clientes.create', [// Ah esto se le conoce como route model Binding
        //     'cliente' => new Cliente 
        // ]);
    }


    public function store(ClienteProductoRequest $request)
    {
        // Cliente::create($request->validated()); // esto para evitar inyecciones
        
        // return redirect()->route('clientes.index')->with('status',__('Product was successfully added'));
    }

 
    public function show(Cliente $cliente)
    {
        // return view('clientes.show', [// Ah esto se le conoce como route model Binding
        //     'cliente' => $cliente//el 'product' Es el que recibe la ruta en web.php
        // ]);
    }


    public function edit(Cliente $cliente)
    {
        // $categorias = Categoria::all();
        // return view('clientes.edit', [// Ah esto se le conoce como route model Binding
        //     'cliente' => $cliente 
        // ]);
    }


    public function update(ClienteProductoRequest $request, Cliente $cliente)
    {
        // $cliente->update($request->validated()); //Usamos la misma validacion de SaveProductoRequest

        // return redirect()->route('clientes.show', $cliente)->with('status',__('Updated successfully'));
    }


    public function destroy(Cliente $cliente)
    {
        // $cliente->delete();
        // return redirect()->route('clientes.index')->with('status',__('Deleted successfully'));
    }
}
