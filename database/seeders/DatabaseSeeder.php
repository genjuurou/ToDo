<?php

namespace Database\Seeders;

use App\Enums\Importance;
use App\Models\Todo;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => Hash::make('password'),
        ]);

        Todo::factory()
            ->for($user)
            ->count(2)
            ->scheduledToday()
            ->create(['importance' => Importance::MEDIUM]);

        Todo::factory()
            ->for($user)
            ->count(2)
            ->scheduledToday()
            ->withDescription()
            ->create(['importance' => Importance::HIGH]);

        Todo::factory()
            ->for($user)
            ->count(2)
            ->scheduledToday()
            ->create(['importance' => Importance::LOW]);

        Todo::factory()
            ->for($user)
            ->scheduledToday()
            ->withLongTitle()
            ->create(['importance' => Importance::LOW]);

        Todo::factory()
            ->for($user)
            ->count(2)
            ->scheduledTomorrow()
            ->create(['importance' => Importance::LOW]);

        Todo::factory()
            ->for($user)
            ->create([
                'importance' => Importance::MEDIUM,
                'scheduled_at' => now()->addDays(2)
            ]);

        Todo::factory()
            ->for($user)
            ->create([
                'importance' => Importance::LOW,
                'scheduled_at' => now()->addDays(2)
            ]);

        Todo::factory()
            ->for($user)
            ->create([
                'importance' => Importance::HIGH,
                'scheduled_at' => now()->addDays(2)
            ]);
        
        Todo::factory()
            ->for($user)
            ->create([
                'importance' => Importance::LOW,
                'scheduled_at' => now()->addDays(3)
            ]);

        Todo::factory()
            ->for($user)
            ->create([
                'importance' => Importance::LOW,
                'scheduled_at' => now()->addDays(4)
            ]);
    }
}
