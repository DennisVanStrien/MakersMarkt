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
        ]);

        Product::create([
            'name' => 'Ksi poster grappig leuk [SALE]',
            'description' => 'Dit ding representeert leven, nu als postr. Leuk als geschenk voor je vrienden en familie.',
            'price' => 25,
            'user_id' => User::query()->inRandomOrder()->first()?->id,
            'specification_id' => Specification::query()->inRandomOrder()->first()?->id,
            'status' => 'In productie',
            'marked_for_moderation' => false,
            'type' => 'Kunst',
        ]);

        Product::create([
            'name' => 'KSI Fall guys poppetje',
            'description' => 'Super cool poppetje van KSI als Fall Guys karakter. Leuk voor op je bureau of als decoratie in je kamer. 3D geprint met echte KSI meat.',
            'price' => 590,
            'user_id' => User::query()->inRandomOrder()->first()?->id,
            'specification_id' => Specification::query()->inRandomOrder()->first()?->id,
            'status' => 'In productie',
            'marked_for_moderation' => false,
            'type' => 'Kunst',
        ]);
    }
}


