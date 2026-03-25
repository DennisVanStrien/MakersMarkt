<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Transaction;
use App\Models\User;
use App\Models\product;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Transaction::create([
            'to_user_id' => User::query()->inRandomOrder()->first()?->id,
            'from_user_id' => User::query()->inRandomOrder()->first()?->id,
            'product_id' => product::query()->inRandomOrder()->first()?->id,
        ]);
    }
}
