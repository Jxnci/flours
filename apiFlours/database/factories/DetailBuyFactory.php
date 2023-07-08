<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DetailBuy>
 */
class DetailBuyFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        return [
            'suplies_id' => $this->faker->numberBetween(1, 30),
            'buy_id' => $this->faker->numberBetween(1, 15),
            'amount' => $this->faker->numberBetween(1, 10),
            'subtotal' => $this->faker->randomFloat(1, 1, 20),
        ];
    }
}
