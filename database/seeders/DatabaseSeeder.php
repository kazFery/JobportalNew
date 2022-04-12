<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(25)->create();
        \App\Models\Location::factory(10)->create();
        \App\Models\Company::factory(10)->create();
        \App\Models\Candidate::factory(10)->create();
        $this->call(JobTypeSeeder::class);
        \App\Models\Representative::factory(10)->create();
        \App\Models\JobPost::factory(20)->create();
        \App\Models\ApplicationDetail::factory(20)->create();


        //// $this->call(LocationSeeder::class);
    }
}
