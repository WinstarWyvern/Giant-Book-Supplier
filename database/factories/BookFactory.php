<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Publisher;


class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(mt_rand(1, 3)),
            'author' => $this->faker->name(),
            'year' => $this->faker->numberBetween(1995, 2022),
            'synopsis' => $this->faker->paragraph(mt_rand(1, 2)),
            'image' => "/asset/image/DefaultBookCover.jpg",
            'publisher_id' => Publisher::factory(),
        ];
    }
}
