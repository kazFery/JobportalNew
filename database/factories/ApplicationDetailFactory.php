<?php

namespace Database\Factories;

use App\Models\Candidate;
use App\Models\JobPost;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ApplicationDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'candidate_id' => $this->faker->numberBetween(1, Candidate::all()->count()),
            'jobPost_id' => $this->faker->numberBetween(1, JobPost::all()->count()),
            'appliedDate' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'status' => $this->faker->boolean(),
        ];
    }
}
