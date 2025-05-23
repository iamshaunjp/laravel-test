<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ChapterFactory extends Factory
{

  public function definition(): array
  {
    return [
      'title' => $this->faker->sentence(3),
      'description' => $this->faker->paragraph(3),
      'order' => $this->faker->unique()->numberBetween(1, 20), // Optional
    ];
  }

}