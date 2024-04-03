<?php

namespace Database\Factories;

use App\Models\Monster;
use Illuminate\Database\Eloquent\Factories\Factory;

class MonsterFactory extends Factory
{
    /**
     * The name of the model that the factory is for.
     *
     * @var string
     */
    protected $model = Monster::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // Example monster types
        $monsterTypes = ['Fire', 'Water', 'Earth', 'Wind'];

        return [
            'name' => $this->faker->unique()->word,
            'type' => $this->faker->randomElement($monsterTypes),
            'level' => $this->faker->numberBetween(1, 20),
            'life' => $this->faker->numberBetween(10, 20)
        ];
    }
}
