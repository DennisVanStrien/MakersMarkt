<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\StoreCredit;
use App\Models\User;

class StoreCreditSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StoreCredit::create([
            'user_id' => User::query()->inRandomOrder()->first()?->id,
            'value' => 100.00,
        ]);
    }
}
