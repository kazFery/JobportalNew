<?php

namespace Database\Factories;

use App\Models\Representative;
use App\Models\Company;
use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobPost>
 */
class JobPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'title' => $this->faker->jobTitle(),
            'description' => $this->faker->text(),
            'jobType_id' => $this->faker->numberBetween(1, 5),
            'company_id' =>  $this->faker->numberBetween(1, Company::all()->count()),
            'location_id' => $this->faker->numberBetween(1, Location::all()->count()),
            'posted_by_id' => $this->faker->numberBetween(1, Representative::all()->count()),
            'publishStatus' => $this->faker->boolean(),
            'postedDate' =>  date('Y-m-d H:i:s'),
            'status' => $this->faker->boolean(),
            'no_of_vacancy' => $this->faker->numberBetween(1, 10),
            'salary' => $this->faker->numberBetween(20, 100),

        ];
    }
}
