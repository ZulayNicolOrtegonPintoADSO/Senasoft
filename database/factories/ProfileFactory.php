<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $users = User::all();

        return [
            'first_name' => fake()->name(),
            'last_name' => fake()->name(),
            'phone'     => $this->faker->phoneNumber,
            'sexo'      => $this->faker->randomElement(['Hombre','Mujer','Otro']),
            'birthdate' => $this->faker->date,
            'facebook'  => $this->faker->sentence(1) . 'com',
            'instagram' => $this->faker->sentence(1) . 'com',
            'linkedin'  => $this->faker->sentence(1) . 'com',
        ];

            
    }
}
