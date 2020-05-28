<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;
use App\Http\Requests\SaveProductoRequest;

class ProductosController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        //$this->middleware('auth')->except('index');//solo esas rutas no estaran
        //$this->middleware('auth')->only('create','edit');//solo esas rutas estan protegidas
    }

    public function index()
    {
        $categorias = Categoria::all();
        //$portfolio = Proyect::orderBy('created_at','DESC')->get(); una forma de ordenar de maner ascendete pero....
        //$productos = Producto::latest()->paginate();//si no colocamos nada en lasted en automatic lo rodena de manera descendete, con paginate hace paginas pero tambien debemos agregar algo ala vista cosa que ahi esta por si las moscas
        
        $gymId = auth()->user()->gymActivo_id; // Obtenemos el gym activo
        
        return view('productos.index', [
            'productos' => Producto::orderBy('description','DESC')
                ->gymId($gymId)
                ->paginate(),
            'categorias' => $categorias
        ]);
    }

    public function create()
    {
        
        $categorias = Categoria::all();//->pluck('nombre', 'id'); // como esta arreglo te devuelve todos los datos JSON y con pluck selecionas la columna del valor que quieres agregar y tambien pasamos la llave que seria el id
        return view('productos.create', [// Ah esto se le conoce como route model Binding
            'producto' => new Producto ,//para poder usar el partial form, ya que esto retornara nul y podremos utilizar el mismo partial para edit y create
            'categorias' => $categorias
        ]);
    }

    public function store(SaveProductoRequest $request) // Cree un Forme request Validation para hacer las validaciociones de manera externa, la validacion se encuentra en Http/Request/SaveProductoRequest es otra forma de validar peticiones lo utilzo para parcticar y porque me ayuda a reutilizar codigo ya que lo uso aqui y en update
    {
        //===============================================================
        //                          REPORTE
        //----------------------------------------------------------------
        
        $producto = Producto::create($request->validated()); // esto para evitar inyecciones
        $producto->gym_id = auth()->user()->gymActivo_id;// le agregamos el gym id activo
        $producto->save(); // Guardamos

        return redirect()->route('productos.index')->with('status',__('Product was successfully added'));

    }

    // No lo utilizamos
    public function show(Producto $producto)
    {
        //$proyect = Proyect::findOrFail($id); // devuelve un json y si intentan acceder con un id que no existe OrFail fallara la consulta NOT FOUND
        return view('productos.show', [// Ah esto se le conoce como route model Binding
            'producto' => $producto//el 'product' Es el que recibe la ruta en web.php
        ]);
    }


    public function edit(Producto $producto)
    {
        $categorias = Categoria::all();
        return view('productos.edit', [// Ah esto se le conoce como route model Binding
            'producto' => $producto ,//el 'product' Es el que recibe la ruta en web.php
            'categorias' => $categorias
        ]);
    }


    public function update(Producto $producto,SaveProductoRequest $request)
    {
        $producto->update($request->validated()); //Usamos la misma validacion de SaveProductoRequest

        return redirect()->route('productos.index', $producto)->with('status',__('Updated successfully'));
    }


    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index')->with('status',__('Deleted successfully'));
    }

}
