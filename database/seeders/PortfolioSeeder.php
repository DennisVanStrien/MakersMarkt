<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\portfolio;
use App\Models\User;
use App\Models\Product;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        portfolio::create([
            'product_id' => Product::query()->inRandomOrder()->first()?->id,
            'user_id' => User::query()->inRandomOrder()->first()?->id,
        ]);
    }
}
