<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public $timestamps =  false; // para que no genere  error al buscar

    public function productos(){
        return $this->hasMany(Producto::class);
    }
}
