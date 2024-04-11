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
        $monsterTypes = ['Fire', 'Water', 'Earth', 'Wind'];

        $type = $this->faker->randomElement($monsterTypes);
        $imageFileName = strtolower($type) . '.png';
        $imagePath = 'monsters/' . $imageFileName;

        return [
            'name' => $this->faker->unique()->word,
            'type' => $type,
            'level' => $this->faker->numberBetween(1, 20),
            'life' => $this->faker->numberBetween(10, 20),
            'portrait' => $imagePath,
        ];
    }
}
