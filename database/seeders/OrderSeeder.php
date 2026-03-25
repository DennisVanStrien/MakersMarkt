<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\order;
use App\Models\User;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        order::create([
            'user_id' => User::query()->inRandomOrder()->first()?->id,
            'status' => 'In behandeling',
            'status_description' => 'Uw bestelling is in behandeling.',
        ]);
    }
}
