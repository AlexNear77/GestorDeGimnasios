<?php

use Illuminate\Database\Seeder;
use App\Categoria;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::truncate();

        Categoria::create([
            'nombre' => 'Suplementos',
        ]);
        Categoria::create([
            'nombre' => 'Snack',
        ]);
        Categoria::create([
            'nombre' => 'Bebidas hidratantes',
        ]);
        Categoria::create([
            'nombre' => 'Ropa y accesorios',
        ]);
    }
}
