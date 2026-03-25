<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\order_product;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Nette\Utils\Random;

class OrderProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        order_product::create([
            'product_id' => Product::query()->inRandomOrder()->first()?->id,
            'user_id' => User::query()->inRandomOrder()->first()?->id,
            'order_id' => Order::query()->inRandomOrder()->first()?->id,
            'quantity' => 2,
        ]);
    }
}
