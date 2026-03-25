<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class productFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $productNames = [
            'KSI Kussen',
            'Kenji Impact Banner',
            'Nerd Emoji Poster',
            'Gamer Mug',
            'Supreme T-shirt',
            'sieraden set',
            'handgemaakte knuffel',
        ];

        $descriptions = [
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'Dit ding is 18 miljoen euro waard, want dit kan je ziektes genezen.',
            'Ik vind dat dit super mooi is, dus jij moet hem kopen. Dat is een mening maar dat boeit mij niks.',
            'Dit product is 100% duurzaam gemaakt van gerecyclede materialen en heeft een minimale impact op het milieu.',
        ];

        return [
            'name' => $this->faker->randomElement($productNames),
            'description' => $this->faker->randomElement($descriptions),
            'price' => $this->faker->randomFloat(2, 10, 1000),
            'owner_id' => User::inRandomOrder()->first()?->id,
            'specification_id' => Specification::inRandomOrder()->first()?->id,
            'status' => $this->faker->randomElement(['Wordt gemaakt', 'Afgerond']),
            'review_id' => Review::inRandomOrder()->first()?->id,
            'marked_for_moderation' => $this->faker->boolean(20),
            'type' => $this->faker->randomElement(['Hobby', 'Wonen', 'Sport', 'Sieraden', 'Kunst', 'Knuffels', 'Overig']),
        ];
    }
}
