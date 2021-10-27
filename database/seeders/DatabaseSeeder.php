<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bureau;
use App\Models\News;

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

        News::create([
            'bureau_id' => 1,
            'slug' => 'post-pertama',
            'title' => 'Post Pertama',
            'body' => 'Ini adalah post pertama'
        ]);

        News::create([
            'bureau_id' => 1,
            'slug' => 'post-kedua',
            'title' => 'Post Kedua',
            'body' => 'Ini adalah post kedua'
        ]);

        $this->call([NewsSeeder::class]);
    }
}
