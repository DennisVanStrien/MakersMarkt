<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Specification;

class SpecificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Specification::create([
            'materials' => 'KSI meat',
            'production_time' => 1.5,
            'complexity' => 'Hoog',
            'sustainability' => 'Hoog',
            'unique_properties' => 'Handgemaakt, uniek ontwerp. Dit biedt leven.',
        ]);
    }
}
