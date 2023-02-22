<?php

use Illuminate\Database\Seeder;
use App\Models\Rating;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ratings = [
            ['id' => 1, 'stars' => 1],
            ['id' => 2, 'stars' => 2],
            ['id' => 3, 'stars' => 3],
            ['id' => 4, 'stars' => 4],
            ['id' => 5, 'stars' => 5],
        ];

        foreach ($ratings as $rating) {
            Rating::create($rating);
            // $newRating = new Rating();
            // $newRating->stars = $elem;
            // $newRating->save();
        }
    }
}
