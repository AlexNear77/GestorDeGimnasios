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
        factory(Categoria::class,4)->create();
    }
}
