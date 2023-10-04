<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->company,
            'category' => $this->faker->word,
            'price' => $this->faker->numberBetween($min = 200, $max = 9000),
            'description' => $this->faker->sentence,
            'rating' => $this->faker->numberBetween($min=0, $max=5),            
            'supplier' => $this->faker->name,
            'image' => $this->faker->imageUrl($width = 160, $height = 120),
        ];
    }
}
