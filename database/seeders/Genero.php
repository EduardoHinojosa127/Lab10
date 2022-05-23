<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Genero extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Genero::factory(10)->create();
    }
}
