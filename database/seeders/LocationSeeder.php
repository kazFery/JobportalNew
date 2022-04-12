<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('locations')->insert([
            'street' => '2345 Saint-laurent',
            'city' => 'Montreal',
            'province' => 'Quebec',
            'country' => 'Canada',
            'postalCode' => 'H3V 1C8',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('locations')->insert([
            'street' => '444 Saint-laurent',
            'city' => 'Montreal',
            'province' => 'Quebec',
            'country' => 'Canada',
            'postalCode' => 'H6V 1B8',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('locations')->insert([
            'street' => '23 CDN',
            'city' => 'Montreal',
            'province' => 'Quebec',
            'country' => 'Canada',
            'postalCode' => 'C3V 4A8',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('locations')->insert([
            'street' => '2345 Saint-laurent',
            'city' => 'Montreal',
            'province' => 'Quebec',
            'country' => 'Canada',
            'postalCode' => 'H3V 1C8',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('locations')->insert([
            'street' => '233 Saint-laurent',
            'city' => 'Quebec',
            'province' => 'Quebec',
            'country' => 'Canada',
            'postalCode' => 'A3V 1D8',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('locations')->insert([
            'street' => '233 Saint-laurent',
            'city' => 'New York City',
            'province' => 'NY',
            'country' => 'USA',
            'postalCode' => '1004',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('locations')->insert([
            'street' => '233 Park-land',
            'city' => 'New York City',
            'province' => 'NY',
            'country' => 'USA',
            'postalCode' => '79008',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
