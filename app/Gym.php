<?php

namespace App;

// use Intervention\Image\Facades\Image;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Support\Facades\Storage;
// use Illuminate\Support\Str;

class Gym extends Model
{
    protected $guarded = [];  

    public function user(){
        return $this->hasMany(User::class);
    }

    public function productos()
    {
        return $this->hasMany(Producto::class);
    }

    public function clientes()
    {
        return $this->hasMany(Cliente::class);
    }

    public function reportes()
    {
        return $this->hasMany(Reporte::class);
    }

    // public static function setImg($foto,$actual = false)
    // {
    //     if($actual){
    //         Storage::disk('public')->delete("img/gyms/$actual");
    //     }
    //     $imageName = Str::random(20).'jpg';
    //     $imagen = Image::make($foto)->encode('jpg',75);
    //     $imagen->resize(530,470,function($constraint){
    //         $constraint->upsize();
    //     });
    //     Storage::disk('public')->put("img/gyms/$imageName",$imagen->stream());
    //     return $imageName;
    // }


}

