<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;
use App\Http\Requests\SaveClienteRequest;

use App\Reporte;

class ClientesController extends Controller
{
    //                  CONTRUCTOR
    public function __construct(){
        $this->middleware('auth');
        //$this->middleware('auth')->except('index');//solo esas rutas no estaran
        //$this->middleware('auth')->only('create','edit');//solo esas rutas estan protegidas
    }

    public function index()
    {
        $gymId = auth()->user()->gymActivo_id;
        return view('clientes.index', [
            'clientes' => Cliente::orderBy('fecha_vencimiento','DESC')
                ->gymId($gymId)
                ->paginate()//latest()
        ]);
    }

 
    public function create()
    {
        return view('clientes.create', [// Ah esto se le conoce como route model Binding
            'cliente' => new Cliente 
        ]);
    }


    public function store(SaveClienteRequest $request)
    {
        $cliente = Cliente::create($request->validated()); // esto para evitar inyecciones
        $cliente->gym_id = auth()->user()->gymActivo_id;// le agregamos el gym id activo
        $cliente->save(); // Guardamos

        //===============================================================
        //                          REPORTE
        //----------------------------------------------------------------
        $reporte = new Reporte();
        $reporte->nombre = $request->nombre;
        $reporte->pago = $request->pago;
        $reporte->gym_id = auth()->user()->gymActivo_id;// le agregamos el gym id activo

        $reporte->save();

        return redirect()->route('clientes.index')->with('status','Cliente Agregado Satisfactoriamente');
    }

    // No lo utilizamos
    public function show(Cliente $cliente)
    {
        return view('clientes.show', [// Ah esto se le conoce como route model Binding
            'cliente' => $cliente//el 'product' Es el que recibe la ruta en web.php
        ]);
    }


    public function edit(Cliente $cliente)
    {
        return view('clientes.edit', [// Ah esto se le conoce como route model Binding
            'cliente' => $cliente 
        ]);
    }


    public function update(SaveClienteRequest $request, Cliente $cliente)
    {
        $cliente->update($request->validated()); //Usamos la misma validacion de SaveProductoRequest

        $request->validate([
            'pago' => ['required', 'integer'],
        ]);
        //===============================================================
        //                          REPORTE
        //----------------------------------------------------------------
        $reporte = new Reporte();
        $reporte->nombre = $request->nombre;
        $reporte->pago = $request->pago;
        $reporte->gym_id = auth()->user()->gymActivo_id;// le agregamos el gym id activo

        $reporte->save();

        return redirect()->route('clientes.index', $cliente)->with('status',__('Updated successfully'));
    }


    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index')->with('status',__('Deleted successfully'));
    }
}
