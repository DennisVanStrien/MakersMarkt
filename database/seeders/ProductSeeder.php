<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\User;
use App\Models\Specification;
use App\Models\Review;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Ksi kussen leven',
            'description' => 'Dit ding representeert leven, KSI among us',
            'price' => 100,
            'user_id' => User::query()->inRandomOrder()->first()?->id,
            'specification_id' => Specification::query()->inRandomOrder()->first()?->id,
            'status' => 'In productie',
            'marked_for_moderation' => false,
            'type' => 'Kunst',
            'image' => "PlaceHolderImage.img"
        ]);
    }
}


