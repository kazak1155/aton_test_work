<?php

namespace Database\Factories;

use App\Models\StatusClient;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Clients>
 */
class ClientsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'surname' => fake()->lexify(),
            'name' => fake()->lexify(),
            'secondName' => fake()->lexify(),
            'birthday' => fake()->dateTime(),
            'inn' => fake()->randomNumber(5, true),
            'user_id' => fake()->randomDigitNotNull(),
            'status' => 4,
        ];
    }
}
