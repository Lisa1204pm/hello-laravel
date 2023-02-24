<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectsTagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Explicitly attach tags to projects
        $portfolioProject = Project::find(1);
        $portfolioProject->tags()->attach([1,2,3]);
    }
}
