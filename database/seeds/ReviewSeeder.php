<?php

use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reviews = [
            [
                'name' => 'Marco',
                'surname' => 'Bianchi',
                'body' => 'Il dottor Rossi è stato un professionista straordinario durante tutto il corso della mia cura. La sua attenzione al paziente e la sua competenza nel campo della medicina hanno reso l\'intero processo molto più facile da sopportare. Consiglio vivamente il dottor Rossi a chiunque abbia bisogno di una cura medica di qualità.',
                'doctor_id' => 1,
            ],
            [
                'name' => 'Giulia',
                'surname' => 'Verdi',
                'body' => 'Sono rimasta molto colpita dalla competenza e dall\'attenzione del dottor Bianchi durante il mio trattamento. Ha dimostrato una conoscenza approfondita del mio problema di salute e ha fornito un trattamento personalizzato e altamente efficace. Sono grata al dottor Bianchi per la sua cura e lo consiglio vivamente ad altri pazienti.',
                'doctor_id' => 1,
            ],
            [
                'name' => 'Alessio',
                'surname' => 'Gialli',
                'body' => 'Il dottor Neri è stato straordinario nella cura del mio disturbo di salute. La sua conoscenza del campo medico e la sua capacità di comunicare in modo chiaro e conciso mi hanno messo a mio agio durante l\'intero periodo di cura. Consiglio il dottor Neri a chiunque abbia bisogno di una cura medica di qualità.',
                'doctor_id' => 2,
            ],
            [
                'name' => 'Paola',
                'surname' => 'Rosa',
                'body' => 'Ho apprezzato molto la professionalità e la gentilezza del dottor Neri durante la mia cura. Ha dimostrato una grande conoscenza nel campo della medicina e ha fornito una cura altamente efficace. Sono molto grata al dottor Neri per la sua cura e lo consiglio a chiunque abbia bisogno di un medico competente.',
                'doctor_id' => 2,
            ],
            [
                'name' => 'Lorenzo',
                'surname' => 'Verdi',
                'body' => 'Il dottor Rossi è stato estremamente professionale e competente nella cura del mio disturbo di salute. Ha dimostrato una conoscenza approfondita del mio problema e ha fornito un trattamento altamente efficace. Sono molto soddisfatto del servizio del dottor Rossi e lo consiglio vivamente ad altri pazienti.',
                'doctor_id' => 1,
            ],
            [
                'name' => 'Chiara',
                'surname' => 'Bianchi',
                'body' => 'Il dottor Neri ha dimostrato una grande attenzione al paziente e una conoscenza approfondita del mio problema di salute. Sono rimasta molto soddisfatta del suo servizio e lo consiglio vivamente ad altri pazienti che cercano un medico competente e attento.',
                'doctor_id' => 2,

            ],
        ];

        foreach ($reviews as $review) {

            $newReview = new Review();
            $newReview->name = $review['name'];
            $newReview->surname = $review['surname'];
            $newReview->body = $review['body'];
            $newReview->doctor_id = $review['doctor_id'];

            $newReview->save();
        }
    }
}
