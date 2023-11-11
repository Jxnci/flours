<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Type>
 */
class TypeFactory extends Factory {
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array {
    return [
      'name' => fake()->randomElement(['tipoInsumo1', 'tipoInsumo2', 'tipoInsumo3', 'tipoInsumo4', 'tipoInsumo5']),
      'user_id' => $this->faker->numberBetween(1, 10)
    ];
  }
}
