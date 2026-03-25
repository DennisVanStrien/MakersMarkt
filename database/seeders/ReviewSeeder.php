<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Review;
use App\Models\User;
use App\Models\Product;
use Nette\Utils\Random;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'user_id' => User::query()->inRandomOrder()->first()?->id,
            'product_id' => Product::query()->inRandomOrder()->first()?->id,
            'rating' => 2,
            'description' => 'Mkay, kopen.',
        ]);
    }
}
