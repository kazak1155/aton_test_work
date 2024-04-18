<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StatusClient>
 */
class StatusClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'status' => fake()->unique()->randomElement(
                [
                'В работе',
                'Отказ',
                'Сделка закрыта'
                ]
            )
        ];
    }
}
