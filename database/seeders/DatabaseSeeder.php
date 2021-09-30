<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Post;
use App\Models\Room;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Doctor::factory(5)->create();
        Patient::factory(10)->create();
        Room::factory(3)->create();
        Post::factory(20)->create();
        User::factory(5)->create();

        Category::create([
            'name' => 'Kesehatan Gizi',
            'slug' => 'kesehatan-gizi'
        ]);

        Category::create([
            'name' => 'Kesehatan Jantung',
            'slug' => 'kesehatan-jantung'
        ]);

        Category::create([
            'name' => 'Kesehatan Badan',
            'slug' => 'kesehatan-badan'
        ]);
    }
}
