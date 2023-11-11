<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory {
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array {
    return [
      'name' => $this->faker->word(),
      'stock' => $this->faker->numberBetween(5, 20),
      'price_buy' => $this->faker->randomFloat(1, 5, 20),
      'price_sale' => $this->faker->randomFloat(1, 5, 20),
      'imagen' => 'producto.jps',
      'state' => 1,
      'rate' => $this->faker->numberBetween(1, 10),
      'category_id' => $this->faker->numberBetween(1, 5),
      'user_id' => $this->faker->numberBetween(1, 10),
    ];
  }
}
