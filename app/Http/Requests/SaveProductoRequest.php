<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveProductoRequest extends FormRequest
{

    public function authorize() // se ejecuta al principio para deternimar si el usuario esta autorizado para hacerlo
    {
        // Ejemplo : $this->user()->isAdmin() // si es verdadero pasa a verificar las reglas de verificacion es decir el metodo que esta abajo llamado rules(   ) si retorna falso la peticion termina con una respuesta 403 Forbidden(prohibido)
        return true;
    }


    public function rules()
    {
        return [
            'category_id' => 'required|string',
            'description' => 'required|string',
            'stock' => 'required',
            'buy' => 'required',
            'sale' => 'required'
        ];
    }
}
