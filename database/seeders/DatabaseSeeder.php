<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Project;
use App\Models\Tag;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // populate categories and projects table with seed data
        $this->call([
            CategorySeeder::class,
            ProjectSeeder::class,
            UserSeeder::class,
            ProjectsTagsSeeder::class,
            TagSeeder::class
        ]);
    }
}
