<?php

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
        $this->call(
            [
                DoctorSeeder::class,
                MessageSeeder::class,
                PlanSeeder::class,
                RatingSeeder::class,
                ReviewSeeder::class,
                SpecializationSeeder::class,


            ]
        );
    }
}
