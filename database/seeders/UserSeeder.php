<?php

namespace Database\Seeders;

use App\Models\portfolio as Portfolio;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Kenji',
            'email' => 'koper@example.com',
            'password' => Hash::make('password'),
            'role' => 'koper',
            'portfolio_id' => 'null',
        ]);

        User::create([
            'name' => 'Seller guy',
            'email' => 'verkoper@example.com',
            'password' => Hash::make('password'),
            'role' => 'verkoper',
            'portfolio_id' => 'null',
        ]);

        User::create([
            'name' => 'Discord mod',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'portfolio_id' => 'null',
        ]);

    }
}
