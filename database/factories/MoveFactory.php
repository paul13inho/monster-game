<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Move>
 */
class MoveFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $moveTypes = ['Fire', 'Water', 'Earth', 'Wind'];

        return [
            'type' => $this->faker->randomElement($moveTypes),
            'name' => $this->faker->unique()->word,
            'power' => $this->faker->numberBetween(5, 10),
        ];
    }
}
