<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    protected $guarded = [];  

    //Query scope
    public function scopeGymId($query, $gymId)
    {
        if($gymId)
        {
            return $query->where('gym_id', 'LIKE', "%$gymId%");
        }
    }
}
