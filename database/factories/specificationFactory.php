<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class specificationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'materials' => $this->faker->randomElement(['Hout', 'Metaal', 'Kunststof', 'Textiel', 'Glas', 'KSI meat']),
            'production_time' => $this->faker->randomFloat(2, 1, 100),
            'complexity' => $this->faker->randomElement(['Laag', 'Gemiddeld', 'Hoog']),
            'sustainability' => $this->faker->randomElement(['Laag', 'Gemiddeld', 'Hoog']),
            'unique_properties' => $this->faker->sentence(),
        ];
    }
}
