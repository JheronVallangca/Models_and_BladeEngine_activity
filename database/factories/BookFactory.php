<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'isbn' => fake()->unique()->isbn10(),
            'title' => fake()->sentence(),
            'author' => fake()->name(),
            'description' => fake()->paragraph(2),
            'date_published' => fake()->date(),
        ];
    }
}
