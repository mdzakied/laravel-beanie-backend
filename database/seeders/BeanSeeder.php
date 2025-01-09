<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bean;

class BeanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create 11 bean records using the factory
        \App\Models\Bean::factory(11)->create();
    }
}
