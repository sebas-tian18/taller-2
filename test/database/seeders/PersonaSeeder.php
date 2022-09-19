<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = DB::select('SELECT id_empleado FROM persona');
        dd($products);
    }
}
