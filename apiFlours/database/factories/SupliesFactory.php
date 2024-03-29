<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Suplies>
 */
class SupliesFactory extends Factory {
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array {
    return [
      'name' => $this->faker->word(),
      'stock' => $this->faker->numberBetween(1, 20),
      'price' => $this->faker->randomFloat(1, 1, 20),
      'unit_id' => $this->faker->numberBetween(1, 5),
      'type_id' => $this->faker->numberBetween(1, 5),
      'user_id' => $this->faker->numberBetween(1, 10)
    ];
  }
}
