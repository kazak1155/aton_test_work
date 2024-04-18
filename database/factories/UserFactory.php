<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fio' => fake()->unique()->randomElement(
                [
                    '111 111 111',
                    '222 222 222',
                    '333 333 333',
                    '444 444 444',
                    '555 555 555',
                    '666 666 666',
                    '777 777 777',
                    '888 888 888',
                    '999 999 999',
                    '000 000 000',
                ]
            ),
            'login' => fake()->unique()->randomElement(
                [
                    '111',
                    '222',
                    '333',
                    '444',
                    '555',
                    '666',
                    '777',
                    '888',
                    '999',
                    '000',
                ]
            ),
            'email_verified_at' => now(),
            'password' => Hash::make('12345'),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
