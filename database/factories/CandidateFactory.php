<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Candidate>
 */
class CandidateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'firstName' => $this->faker->firstName(),
            'lastName' => $this->faker->lastName(),
            'phone' => $this->faker->phoneNumber(),
            //'cv' => $this->faker->file($sourceDir = '/tmp', $targetDir = '/tmp'),
            'user_id' => $this->faker->unique()->numberBetween(1, 11) //User::all()->count())


        ];
    }
}
