<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->email(),
            'cpf' => $this->faker->randomNumber(),
            'phone' => $this->faker->randomNumber(),
            'date_of_birth' => $this->faker->date(),
            'email_verified_at' => $this->faker->date(),
            'remember_token' => $this->faker->randomNumber(),
            'password' => $this->faker->password(),
        ];
    }
}
