<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Phone>
 */
class PhoneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user_id = [1, 2, 3, 4, 5];
        return [
            'user_id' => fake()->unique()->randomElement($user_id),
            'phone' => fake()->phoneNumber()
        ];
    }
}
