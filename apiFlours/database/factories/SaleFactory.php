<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sale>
 */
class SaleFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        return [
            'total' => $this->faker->randomFloat(1, 1, 20),
            'observation' => $this->faker->sentence(),
            'time' => $this->faker->time(),
            'date' => $this->faker->date(),
            'user_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
