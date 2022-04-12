<?php

namespace Database\Factories;

use app\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CompanyFactory extends Factory
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
            'companyName' => $this->faker->company(),
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->companyEmail(),
            'websiteURL' => $this->faker->url(),
            'location_id' => $this->faker->numberBetween(1, Location::count()),
        ];
    }
}
