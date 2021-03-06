<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->unique()->words(4, true),
            'description' => $this->faker->realText(500),
            'date' => $this->faker->dateTimeBetween('-4 months', '-1 week')
        ];
    }
}
