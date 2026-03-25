<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Notification;
use App\Models\User;

class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Notification::create([
            'user_id' => User::query()->inRandomOrder()->first()?->id,
            'name' => 'Nieuwe melding',
            'description' => 'BeepBeep, dit is een melding bois.',
            'is_read' => false,
        ]);
    }
}
