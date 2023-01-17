<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Todo>
 */
class TodoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->sentence(),
        ];
    }

    public function scheduledToday(): Factory
    {
        return $this->state(['scheduled_at' => now()]);
    }

    public function scheduledTomorrow(): Factory
    {
        return $this->state(['scheduled_at' => now()->addDay()]);
    }

    public function withDescription(): Factory
    {
        return $this->state(['description' => fake()->paragraph()]);
    }

    public function withLongTitle(): Factory
    {
        return $this->state(['title' => fake()->sentences(2, true)]);
    }
}
