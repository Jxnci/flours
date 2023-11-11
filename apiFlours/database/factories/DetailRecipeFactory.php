<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DetailRecipe>
 */
class DetailRecipeFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        return [
            'product_id' => $this->faker->numberBetween(1, 30),
            'suplies_id' => $this->faker->numberBetween(1, 30),
            'user_id' => $this->faker->numberBetween(1, 10),
            'amount' => $this->faker->numberBetween(1, 20)
        ];
    }
}
