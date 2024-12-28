<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::all()->random()->id,
            'name' => fake()->unique()->sentence(3),
            'description' => fake()->text,
            'start_time' => fake()->dateTimeBetween('now','+1 month'),
            'end_time' => fake()->dateTimeBetween('+1 month', '+2 months')
        ];
    }
}
