<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $bodyArray = fake()->paragraphs(3);
        $body = '<p>' . join('</p><p>', $bodyArray ) . '</p>';
        $title=fake()->company() . ' ' . fake()->companySuffix();
        $slug = Str::slug($title);
        
        return [
            'title' => $title,
            'slug' =>$slug,
            'excerpt' => fake()->catchPhrase(),
            'body' => $body
        ];
    }
}
