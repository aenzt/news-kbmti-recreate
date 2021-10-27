<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bureau;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Bureau::create([
            'name' => "RnD",
            'slug' => 'rnd'
        ]);

        Bureau::create([
            'name' => "HRD",
            'slug' => 'hrd'
        ]);
    }
}
