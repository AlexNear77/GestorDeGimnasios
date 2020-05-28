<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $guarded = [];  
    //protected $fillable = ['category','description','stock','buy','sale'];

    // public function getRouteKeyName(){ // esta funcion se utiliza para que en vez de colocar el id el producto coloque el url
    //     return 'url';
    // }

    //Query scope
    public function scopeGymId($query, $gymId)
    {
        if($gymId)
        {
            return $query->where('gym_id', 'LIKE', "%$gymId%");
        }
    }
}
