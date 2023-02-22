<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Specialization;
use App\Models\Rating;
class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $doctors = config('doctors');
        $specializations = Specialization::all(); // Recupera tutte le specializzazioni dal database
        $ratings = Rating::all();
        
        foreach ($doctors as $doctor) {
            $user = User::find($doctor['user_id']);

            // Crea il dottore per l'utente
            $newDoctor = $user->doctor()->create($doctor);

            // Recupera una specializzazione a caso tra quelle esistenti
            $specialization = $specializations->random();

            // Associa la specializzazione al dottore
            $newDoctor->specializations()->attach($specialization);

            for ($i = 0; $i < 3; $i++) {
              $rating = $ratings->random();
              $newDoctor->ratings()->attach($rating);
          }
    }
  }
}
