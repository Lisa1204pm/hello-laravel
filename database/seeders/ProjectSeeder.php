<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     protected function fakeHTMLParagraphs($count = 3) {
        $bodyArray = fake()->paragraphs($count);
        $body = '<p>' . join('</p><p>', $bodyArray ) . '</p>';
        return $body;
    }

    public function run()
    {
        Project::create([
            'title' => 'Portfolio Showcase',
            'slug' => 'portfolio-showcase',
            'excerpt' => fake()->sentences(2, true),
            'body' => $this->fakeHTMLParagraphs(4),
            'category_id' => 3
        ]);
        Project::create([
            'title' => 'SSD Yearbook',
            'slug' => 'ssd-yearbook',
            'excerpt' => fake()->sentences(2, true),
            'body' => $this->fakeHTMLParagraphs(),
            'category_id' => 1
        ]);
        Project::create([
            'title' => 'Movie Mania',
            'slug' => 'movie-mania',
            'excerpt' => fake()->sentences(2, true),
            'body' => $this->fakeHTMLParagraphs(5)
        ]);
        Project::create([
            'title' => 'News Site Homepage',
            'slug' => 'news-site-homepage',
            'excerpt' => fake()->sentences(2, true),
            'body' => $this->fakeHTMLParagraphs(),
            'category_id' => 2
        ]);
        Project::create([
            'title' => 'JavaScript Game',
            'slug' => 'javaScript-game',
            'excerpt' => fake()->sentences(2, true),
            'body' => $this->fakeHTMLParagraphs(),
            'category_id' => 2
        ]);
        Project::create([
            'title' => 'iOS App',
            'slug' => 'ios-app',
            'excerpt' => fake()->sentences(2, true),
            'body' => $this->fakeHTMLParagraphs()
        ]);
        Project::create([
            'title' => 'Android App',
            'slug' => 'android-app',
            'excerpt' => fake()->sentences(2, true),
            'body' => $this->fakeHTMLParagraphs()
        ]);
        Project::create([
            'title' => 'Industry Project',
            'slug' => 'industry-project',
            'excerpt' => fake()->sentences(2, true),
            'body' => $this->fakeHTMLParagraphs(6),
            'category_id' => 3
        ]);
    }
}
