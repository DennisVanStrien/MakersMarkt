<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Symfony\Component\HttpKernel\HttpCache\Store;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            SpecificationSeeder::class,
            ProductSeeder::class,
            OrderSeeder::class,
            NotificationSeeder::class,
            ReviewSeeder::class,
            TransactionSeeder::class,
            PortfolioSeeder::class,
            OrderProductSeeder::class,
            StoreCreditSeeder::class,
        ]);
    }
}
