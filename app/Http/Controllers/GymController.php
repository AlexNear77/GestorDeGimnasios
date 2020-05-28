<?php

namespace App\Http\Controllers;
use App\Gym;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\SaveGymRequest;

class GymController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        //$this->middleware('auth')->except('index');//solo esas rutas no estaran
        //$this->middleware('auth')->only('create','edit');//solo esas rutas estan protegidas
    }
  
    public function index()
    {
        $id = auth()->user()->gymActivo_id;
        $gym = Gym::find($id);
        return view('gyms.index', [
            'gyms' => Gym::latest()->paginate(),
            'gym' => $gym
        ]);
    }

  
    public function create()
    {
        return view('gyms.create', [// Ah esto se le conoce como route model Binding
            'gym' => new Gym 
        ]);
    }

  
    public function store(SaveGymRequest $request)
    {
        $gym = Gym::create($request->validated()); // esto para evitar inyecciones

        $image =$request->file('img');
        $nombre = time().'.'.$image->getClientOriginalExtension();
        $destino = public_path('img/gyms');
        $gym->img->move($destino, $nombre);
        $gym->img = $nombre;
        $gym->save();

        $id = auth()->user()->id;
        $usuario = User::find($id);
        $usuario->gymActivo_id = $gym->id; 
        $usuario->save();
        //Gym::setImg($image);


        return redirect()->route('gyms.index')->with('status','Gimnasio agregado correctamente!');
    }


    public function show(Gym $gym)
    {
        $id = auth()->user()->id; 
        $usuario = User::find($id);
        $usuario->gymActivo_id = $gym->id; 
        $usuario->save();
        return redirect()->route('gyms.index')->with('status','Gym seleccionado correctamente!');
    }

  
    public function edit(Gym $gym)
    {
        
        return view('gyms.edit', [// Ah esto se le conoce como route model Binding
            'gym' => $gym //el 'product' Es el que recibe la ruta en web.php
        ]);
    }


    public function update(SaveGymRequest $request, Gym $gym)
    {
        $req = Gym::create($request->validated()); // esto para evitar inyecciones
        //eliminadno archivo pasado
        $file_path = public_path().'/img'.'/gyms'.$gym->img;
        \File::detete($file_path);
        
        $gym->update($request->validated()); //Usamos la misma validacion de SaveProductoRequest
        
        //Tratamiento de imagen
        $image =$request->file('img');
        $nombre = time().'.'.$image->getClientOriginalExtension();
        $gym->img = $nombre;
        $destino = public_path('img/gyms');
        $image->move($destino, $nombre);
        $gym->save();

        //seleccionando gym
        $id = auth()->user()->id;
        $usuario = User::find($id);
        $usuario->gymActivo_id = $gym->id; 
        $usuario->save();

        return redirect()->route('gyms.index', $gym)->with('status',__('Updated successfully'));
    }


    public function destroy(Gym $gym)
    {
        $file_path = public_path().'/img'.'/gyms'.$gym->img;
        \File::detete($file_path);
        $gym->delete();
        return redirect()->route('gyms.index')->with('status',__('Deleted successfully'));
    }
}
