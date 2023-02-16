<?php

use App\Models\Specialization;
use Illuminate\Database\Seeder;

class SpecializationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $specializations = [
            'Andrologia',
            'Cardiologia',
            'Dermatologia',
            'Diabetologia',
            'Dietologia',
            'Endocrinologia',
            'Fisioterapia',
            'Ginecologia',
            'Infettivologia',
            'Medicina dello Sport',
            'Medico Legale',
            'Neurologia',
            'Oculistica',
            'Odontoiatria',
            'Oncologia',
            'Ortopedia',
            'Otorinolaringoiatria',
            'Pediatria',
            'Pneumologia',
            'Psichiatria',
            'Psicologia',
            'Radiologia',
            'Senologia',
            'Urologia'
        ];

        foreach ($specializations as $specialization) {

            $newSpecialization = new Specialization();

            $newSpecialization->name = $specialization;

            $newSpecialization->save();
        }
    }


}
