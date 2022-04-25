<?php

namespace Database\Factories;

use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\House>
 */
class HouseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'type'=>$this->faker->randomElement(['Casa','lote','departamento']),
            'city'=>$this->faker->randomElement(['Cochabamba','La paz','Santa Cruz']),
            'direction'=>$this->faker->randomElement(['San Martin','Plazuela Colon','Calle Irigoyen #154']),
            'owner'=>$this->faker->name(),
            'price'=>$this->faker->regexify('[0-9]{2}'),
            'description'=>$this->faker->randomElement(['128m','530m','100m']),
        ];
    }
}
