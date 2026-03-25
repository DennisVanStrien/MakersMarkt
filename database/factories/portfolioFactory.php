<?php

namespace Database\Factories;

use App\Models\portfolio;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<portfolio>
 */
class portfolioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id' => Review::inRandomOrder()->first()?->id,
            'user_id' => Review::inRandomOrder()->first()?->id,
        ];
    }
}
