<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $guarded = [];  

    public function gym(){ // definicmos la relacion del cliente con el gimnassio
        return $this->belongsTo(Gym::class);
    }

    //Query scope
    public function scopeGymId($query, $gymId)
    {
        if($gymId)
        {
            return $query->where('gym_id', 'LIKE', "%$gymId%");
        }
    }
}
