<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\SaveUserRequest;
use Illuminate\Support\Facades\Hash;

class usuariosController extends Controller
{
    //                  CONTRUCTOR
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('roles:admin',['except' => ['edit','update']]); // con esta ecepcion de decimos que ignore el metodo edit  para accedr ala cuenta mediante la opcion en el section llamdo Mi cuenta, es importante mencionar que aqui comenzamos a implementar las politicas de acceso de  laravel

    }

    public function index()
    {
        return view('usuarios.index', [
            'usuarios' => User::latest()->paginate()
        ]);
    }
 
    public function create()
    {
        return view('usuarios.create', [// Ah esto se le conoce como route model Binding
            'user' => new User 
        ]);
    }


    public function store(Request $request)
    {

        $usuario = request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required', 'string', 'max:255']
        ]);

         User::create([
            'name' => $usuario['name'],
            'role' => $usuario['role'],
            'email' => $usuario['email'],
            'password' => Hash::make($usuario['password']),
        ]);
        
        return redirect()->route('usuarios.index')->with('status',__('Product was successfully added'));
    }

 
    public function show(User $cliente)
    {
        // return view('clientes.show', [// Ah esto se le conoce como route model Binding
        //     'cliente' => $cliente//el 'product' Es el que recibe la ruta en web.php
        // ]);
    }


    public function edit(User $usuario)
    {
        $this->authorize($usuario);
        return view('usuarios.edit', [// Ah esto se le conoce como route model Binding
            'usuario' => $usuario 
        ]);
    }


    public function update(Request $request, User $usuario)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$usuario->id],
            'role' => ['required']
        ]);

        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->role = $request->role;

        $usuario->save();

        return back()->with('status',__('Updated successfully'));
    }


    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index')->with('status',__('Deleted successfully'));
    }
}
