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
            'Ginecologia',
            'Neurologia',
            'Ortopedia',
            'Otorinolaringoiatria',
            'Psichiatria',
            'Radiologia',
            'Senologia',

        ];

        foreach ($specializations as $specialization) {

            $newSpecialization = new Specialization();

            $newSpecialization->name = $specialization;

            $newSpecialization->save();
        }
    }


}
