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
                'body' => 'Il dottor è stato straordinario nella cura del mio disturbo di salute. La sua conoscenza del campo medico e la sua capacità di comunicare in modo chiaro e conciso mi hanno messo a mio agio durante l\'intero periodo di cura. Consiglio il dottor Neri a chiunque abbia bisogno di una cura medica di qualità.',
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
                'body' => 'Il dottor è stato estremamente professionale e competente nella cura del mio disturbo di salute. Ha dimostrato una conoscenza approfondita del mio problema e ha fornito un trattamento altamente efficace. Sono molto soddisfatto del servizio del dottor Rossi e lo consiglio vivamente ad altri pazienti.',
                'doctor_id' => 2,
            ],
            [
                'name' => 'Chiara',
                'surname' => 'Bianchi',
                'body' => 'Il dottor ha dimostrato una grande attenzione al paziente e una conoscenza approfondita del mio problema di salute. Sono rimasta molto soddisfatta del suo servizio e lo consiglio vivamente ad altri pazienti che cercano un medico competente e attento.',
                'doctor_id' => 1,

            ],
            [
                'name' => 'Chiara',
                'surname' => 'Bianchi',
                'body' => 'Il dottor ha dimostrato una grande attenzione al paziente e una conoscenza approfondita del mio problema di salute. Sono rimasta molto soddisfatta del suo servizio e lo consiglio vivamente ad altri pazienti che cercano un medico competente e attento.',
                'doctor_id' => 3,
            ],

            [
                'name' => 'Sara',
                'surname' => 'Russo',
                'body' => 'Ho avuto il piacere di conoscere il dottor Rossi durante una visita di controllo ed è stato davvero professionale e attento alle mie esigenze. Lo consiglio vivamente.',
                'doctor_id' => 3,
            ],
            [
                'name' => 'Luca',
                'surname' => 'Gallo',
                'body' => 'Il dottor Neri mi ha seguito per un problema di salute importante e devo dire che è stato un vero professionista, attento e premuroso. Lo consiglio vivamente a chiunque stia cercando un medico competente.',
                'doctor_id' => 3,
            ],
            [
                'name' => 'Federica',
                'surname' => 'Bianchi',
                'body' => 'Ho fatto una visita dal dottor Rossi e devo dire che sono rimasta molto soddisfatta. Ha dimostrato grande professionalità e attenzione alle mie esigenze.',
                'doctor_id' => 4,
            ],
            [
                'name' => 'Simone',
                'surname' => 'Neri',
                'body' => 'Il dottor Bianchi è stato un professionista impeccabile durante la mia visita di controllo. Ha dimostrato grande attenzione alle mie esigenze e mi ha fornito le informazioni necessarie per gestire la mia patologia. Consigliato!',
                'doctor_id' => 4,
            ],
            [
                'name' => 'Valentina',
                'surname' => 'Rossi',
                'body' => 'Sono molto soddisfatta della visita dal dottor Neri. Ha dimostrato grande professionalità e competenza nel suo lavoro, e mi ha fornito tutte le informazioni di cui avevo bisogno. Consigliato!',
                'doctor_id' => 4,
            ],

            [
                'name' => 'Marco',
                'surname' => 'Esposito',
                'body' => 'Ho fatto una visita dal dottore e sono rimasto molto soddisfatto del suo servizio. Ha dimostrato grande attenzione alle mie esigenze e mi ha fornito tutte le informazioni di cui avevo bisogno.',
                'doctor_id' => 5,
            ],
            [
                'name' => 'Alice',
                'surname' => 'Neri',
                'body' => 'Il dottor Rossi mi ha seguito per un problema di salute e devo dire che è stato un medico eccellente, competente e attento. Lo consiglio vivamente.',
                'doctor_id' => 5,
            ],
            [
                'name' => 'Alessandro',
                'surname' => 'Russo',
                'body' => 'Ho fatto una visita dal dottore e devo dire che sono rimasto molto soddisfatto del suo servizio. Ha dimostrato grande professionalità e competenza nel suo lavoro.',
                'doctor_id' => 5,
            ],
            [
                'name' => 'Giulia',
                'surname' => 'Gallo',
                'body' => 'Il dottore mi ha seguito per un problema di salute e devo dire che è stato molto attento alle mie esigenze e mi ha fornito tutte le informazioni necessarie per gestire la mia patologia. Consigliato!',
                'doctor_id' => 6,
            ],
            [
                'name' => 'Fabio',
                'surname' => 'Bianchi',
                'body' => 'Ho avuto il piacere di conoscere il dottor Neri durante una visita di controllo e devo dire che è stato davvero professionale e attento alle mie esigenze. Lo consiglio vivamente.',
                'doctor_id' => 6,
            ],

            [

                'name' => 'Valentina',
                'surname' => 'Romano',
                'body' => 'Ho fatto una visita dal dottor Neri per un problema di salute e sono rimasta molto soddisfatta del suo servizio. Ha dimostrato grande professionalità e competenza nel suo lavoro.',
                'doctor_id' => 7,
            ],
            [

                'name' => 'Antonio',
                'surname' => 'Lombardi',
                'body' => 'Ho avuto la fortuna di essere seguito dal dottor Bianchi per un problema di salute e devo dire che è stato davvero un medico eccellente, attento e competente. Consigliatissimo!',
                'doctor_id' => 7,
            ],
            [

                'name' => 'Sara',
                'surname' => 'Ruggiero',
                'body' => 'Il dottore mi ha seguito per un problema di salute e devo dire che è stato molto professionale e competente nel suo lavoro. Ha dimostrato grande attenzione alle mie esigenze e mi ha fornito tutte le informazioni di cui avevo bisogno.',
                'doctor_id' => 6,
            ],
            [

                'name' => 'Luigi',
                'surname' => 'Greco',
                'body' => 'Ho fatto una visita dal dottor e sono rimasto molto soddisfatto del suo servizio. Ha dimostrato grande attenzione alle mie esigenze e mi ha fornito tutte le informazioni di cui avevo bisogno. Consigliato!',
                'doctor_id' => 7,
            ],
            [

                'name' => 'Francesca',
                'surname' => 'Ferrari',
                'body' => 'Il dottore mi ha seguito per un problema di salute e devo dire che è stato davvero un medico eccellente. Ha dimostrato grande attenzione alle mie esigenze e mi ha fornito tutte le informazioni necessarie per gestire la mia patologia. Consigliatissimo!',
                'doctor_id' => 8,
            ],
            [
                'name' => 'Giovanni',
                'surname' => 'Palumbo',
                'body' => 'Ho fatto una visita dal dottor e devo dire che è stato un medico eccellente. Ha dimostrato grande attenzione alle mie esigenze e mi ha fornito tutte le informazioni di cui avevo bisogno. Consigliato!',
                'doctor_id' => 8,
            ],
            [
                'name' => 'Marta',
                'surname' => 'De Luca',
                'body' => 'Il dottor mi ha seguito per un problema di salute e devo dire che è stato molto professionale e competente. Ha dimostrato grande attenzione alle mie esigenze e mi ha fornito tutte le informazioni di cui avevo bisogno. Lo consiglio!',
                'doctor_id' => 8,
            ],
            [
                'name' => 'Marco',
                'surname' => 'Battaglia',
                'body' => 'Ho avuto la fortuna di essere seguito dal dottor per un problema di salute e devo dire che è stato davvero un medico eccellente. Ha dimostrato grande attenzione alle mie esigenze e mi ha fornito tutte le informazioni di cui avevo bisogno. Lo consiglio vivamente!',
                'doctor_id' => 9,
            ],
            [
                'name' => 'Anna',
                'surname' => 'Longo',
                'body' => 'Ho fatto una visita dal dottor per un problema di salute e sono rimasta molto soddisfatta del suo servizio. Ha dimostrato grande attenzione alle mie esigenze e mi ha fornito tutte le informazioni di cui avevo bisogno. Consigliato!',
                'doctor_id' => 9,
            ],
            [
                'name' => 'Simone',
                'surname' => 'Vitale',
                'body' => 'Il dottor mi ha seguito per un problema di salute e devo dire che è stato un medico eccellente. Ha dimostrato grande professionalità e competenza nel suo lavoro, oltre ad essere molto disponibile e attento alle mie esigenze. Lo consiglio vivamente!',
                'doctor_id' => 9,
            ],

            [
                'name' => 'Laura',
                'surname' => 'Marini',
                'body' => 'Sono stata seguita dal dottor per un problema di salute e devo dire che è stato molto professionale e competente. Ha dimostrato grande attenzione alle mie esigenze e mi ha fornito tutte le informazioni di cui avevo bisogno. Consigliato!',
                'doctor_id' => 10,
            ],
            [
                'name' => 'Fabio',
                'surname' => 'Russo',
                'body' => 'Ho fatto una visita dal dottor e devo dire che è stato un medico eccellente. Ha dimostrato grande attenzione alle mie esigenze e mi ha fornito tutte le informazioni di cui avevo bisogno. Lo consiglio vivamente!',
                'doctor_id' => 10,
            ],
            [
                'name' => 'Giulia',
                'surname' => 'Fabbri',
                'body' => 'Il dottor mi ha seguito per un problema di salute e devo dire che è stato davvero un medico eccellente. Ha dimostrato grande attenzione alle mie esigenze e mi ha fornito tutte le informazioni di cui avevo bisogno. Lo consiglio vivamente!',
                'doctor_id' => 10,
            ],
            [
                'name' => 'Davide',
                'surname' => 'Coppola',
                'body' => 'Ho avuto la fortuna di essere seguito dal dottor per un problema di salute e devo dire che è stato un medico eccezionale. Ha dimostrato grande professionalità e competenza nel suo lavoro, oltre ad essere molto disponibile e attento alle mie esigenze. Lo consiglio vivamente!',
                'doctor_id' => 11,
            ],
            [
                'name' => 'Lorenzo',
                'surname' => 'Cannavò',
                'body' => 'Il dottor Neri mi ha seguito per un problema di salute e devo dire che è stato un medico eccellente. Ha dimostrato grande attenzione alle mie esigenze e mi ha fornito tutte le informazioni di cui avevo bisogno. Consigliato!',
                'doctor_id' => 11,
            ],

            [
                'name' => 'Carlo',
                'surname' => 'Ferrari',
                'body' => 'Ho fatto una visita medica e devo dire che sono rimasto molto soddisfatto del servizio. Il medico che mi ha seguito è stato molto professionale e competente, dimostrando grande attenzione alle mie esigenze. Consigliato!',
                'doctor_id' => 11,
            ],
            [
                'name' => 'Anna',
                'surname' => 'Romano',
                'body' => 'Sono stata seguita da un medico molto competente e professionale per un problema di salute. Ha dimostrato grande attenzione alle mie esigenze e mi ha fornito tutte le informazioni di cui avevo bisogno. Consiglio vivamente!',
                'doctor_id' => 12,
            ],
            [
                'name' => 'Marco',
                'surname' => 'Bianchi',
                'body' => 'Ho fatto una visita medica e devo dire che sono rimasto molto soddisfatto del servizio. Il medico che mi ha seguito ha dimostrato grande competenza e attenzione alle mie esigenze. Consigliato!',
                'doctor_id' => 12,
            ],
            [
                'name' => 'Chiara',
                'surname' => 'Gallo',
                'body' => 'Il medico che mi ha seguito per un problema di salute è stato molto professionale e attento alle mie esigenze. Mi ha fornito tutte le informazioni di cui avevo bisogno e mi ha fatto sentire a mio agio durante tutta la visita. Lo consiglio!',
                'doctor_id' => 12,
            ],
            [
                'name' => 'Simone',
                'surname' => 'Verdi',
                'body' => 'Ho avuto la fortuna di essere seguito da un medico molto professionale e competente per un problema di salute. Ha dimostrato grande attenzione alle mie esigenze e mi ha fornito tutte le informazioni di cui avevo bisogno. Consigliato!',
                'doctor_id' => 13,
            ],

            [
                'name' => 'Silvia',
                'surname' => 'Rizzo',
                'body' => 'Sono rimasta molto soddisfatta della visita medica che ho fatto. Il medico che mi ha seguito è stato molto professionale e attento alle mie esigenze, mi ha fornito tutte le informazioni di cui avevo bisogno e mi ha fatto sentire a mio agio durante tutta la visita. Consigliato!',
                'doctor_id' => 13,
            ],
            [
                'name' => 'Giovanni',
                'surname' => 'Rossi',
                'body' => 'Ho fatto una visita medica e devo dire che sono rimasto molto soddisfatto del servizio. Il medico che mi ha seguito ha dimostrato grande competenza e attenzione alle mie esigenze. Consigliato!',
                'doctor_id' => 13,
            ],
            [
                'name' => 'Laura',
                'surname' => 'De Luca',
                'body' => 'Il medico che mi ha seguito per un problema di salute è stato molto professionale e attento alle mie esigenze. Mi ha fornito tutte le informazioni di cui avevo bisogno e mi ha fatto sentire a mio agio durante tutta la visita. Consiglio vivamente!',
                'doctor_id' => 14,
            ],
            [
                'name' => 'Roberto',
                'surname' => 'Gialli',
                'body' => 'Sono rimasto molto soddisfatto della visita medica che ho fatto. Il medico che mi ha seguito ha dimostrato grande attenzione alle mie esigenze e mi ha fornito tutte le informazioni di cui avevo bisogno. Consigliato!',
                'doctor_id' => 14,
            ],
            [
                'name' => 'Elisa',
                'surname' => 'Neri',
                'body' => 'Ho fatto una visita medica e devo dire che sono rimasta molto soddisfatta del servizio. Il medico che mi ha seguito ha dimostrato grande competenza e attenzione alle mie esigenze, mi ha fatto sentire a mio agio durante tutta la visita. Consigliato!',
                'doctor_id' => 15,
            ],
            [
                'name' => 'Marco',
                'surname' => 'Bianchi',
                'body' => 'Il medico che mi ha seguito per un problema di salute è stato molto professionale e attento alle mie esigenze. Mi ha fornito tutte le informazioni di cui avevo bisogno e mi ha fatto sentire a mio agio durante tutta la visita. Consiglio vivamente!',
                'doctor_id' => 15,
            ],
            [
                'name' => 'Sara',
                'surname' => 'Rossi',
                'body' => 'Ho fatto una visita medica e sono rimasta molto soddisfatta del servizio. Il medico che mi ha seguito è stato molto gentile e disponibile, mi ha fornito tutte le informazioni di cui avevo bisogno e mi ha fatto sentire a mio agio durante tutta la visita. Consigliato!',
                'doctor_id' => 15,
            ],
            [
                'name' => 'Luca',
                'surname' => 'Verdi',
                'body' => 'Il medico che mi ha seguito per un problema di salute è stato molto competente e disponibile. Ha risposto a tutte le mie domande e mi ha fatto sentire a mio agio durante tutta la visita. Consigliato!',
                'doctor_id' => 16,
            ],
            [
                'name' => 'Valentina',
                'surname' => 'Russo',
                'body' => 'Sono rimasta molto soddisfatta della visita medica che ho fatto. Il medico che mi ha seguito è stato molto professionale e ha dimostrato grande attenzione alle mie esigenze. Consigliato!',
                'doctor_id' => 16,
            ],
            [
                'name' => 'Paolo',
                'surname' => 'Ferrari',
                'body' => 'Ho fatto una visita medica e sono rimasto molto soddisfatto del servizio. Il medico che mi ha seguito ha dimostrato grande competenza e attenzione alle mie esigenze, mi ha fornito tutte le informazioni di cui avevo bisogno. Consigliato!',
                'doctor_id' => 16,
            ],

            [
                'name' => 'Alice',
                'surname' => 'Neri',
                'body' => 'Il medico che mi ha seguito per un problema di salute è stato molto professionale e competente. Mi ha fornito tutte le informazioni di cui avevo bisogno e mi ha fatto sentire a mio agio durante tutta la visita. Consigliato!',
                'doctor_id' => 17,
            ],
            [
                'name' => 'Andrea',
                'surname' => 'Bianchi',
                'body' => 'Sono stato molto soddisfatto del servizio ricevuto durante la mia visita medica. Il medico che mi ha seguito ha dimostrato grande attenzione alle mie esigenze e mi ha fornito tutte le informazioni di cui avevo bisogno. Consigliato!',
                'doctor_id' => 17,
            ],
            [
                'name' => 'Giulia',
                'surname' => 'Rossi',
                'body' => 'Ho fatto una visita medica e sono rimasta molto soddisfatta del servizio. Il medico che mi ha seguito è stato molto disponibile e mi ha fatto sentire a mio agio durante tutta la visita. Consigliato!',
                'doctor_id' => 17,
            ],
            [
                'name' => 'Fabio',
                'surname' => 'Verdi',
                'body' => 'Il medico che mi ha seguito per un problema di salute è stato molto professionale e competente. Ha risposto a tutte le mie domande e mi ha fornito tutte le informazioni di cui avevo bisogno. Consigliato!',
                'doctor_id' => 18,
            ],
            [
                'name' => 'Claudia',
                'surname' => 'Russo',
                'body' => 'Sono rimasta molto soddisfatta della visita medica che ho fatto. Il medico che mi ha seguito è stato molto gentile e mi ha fatto sentire a mio agio durante tutta la visita. Consigliato!',
                'doctor_id' => 18,
            ],

            [
                'name' => 'Lorenzo',
                'surname' => 'Bianchi',
                'body' => 'Sono rimasto molto soddisfatto del servizio ricevuto durante la mia visita medica. Il medico che mi ha seguito è stato molto disponibile e professionale, ha risposto a tutte le mie domande e mi ha fatto sentire a mio agio durante tutta la visita. Consigliato!',
                'doctor_id' => 18,
            ],
            [
                'name' => 'Laura',
                'surname' => 'Neri',
                'body' => 'Ho fatto una visita medica e sono rimasta molto soddisfatta del servizio. Il medico che mi ha seguito ha dimostrato grande attenzione alle mie esigenze e mi ha fornito tutte le informazioni di cui avevo bisogno. Consigliato!',
                'doctor_id' => 19,
            ],
            [
                'name' => 'Marco',
                'surname' => 'Verdi',
                'body' => 'Sono stato molto soddisfatto della visita medica che ho fatto. Il medico che mi ha seguito è stato molto competente e professionale, ha risposto a tutte le mie domande e mi ha fornito tutte le informazioni di cui avevo bisogno. Consigliato!',
                'doctor_id' => 19,
            ],
            [
                'name' => 'Martina',
                'surname' => 'Rossi',
                'body' => 'Il medico che mi ha seguito per un problema di salute è stato molto professionale e competente. Mi ha fornito tutte le informazioni di cui avevo bisogno e mi ha fatto sentire a mio agio durante tutta la visita. Consigliato!',
                'doctor_id' => 19,
            ],
            [
                'name' => 'Luca',
                'surname' => 'Russo',
                'body' => 'Ho fatto una visita medica e sono rimasto molto soddisfatto del servizio ricevuto. Il medico che mi ha seguito è stato molto professionale e mi ha fornito tutte le informazioni di cui avevo bisogno. Consigliato!',
                'doctor_id' => 20,
            ],

            [
                'name' => 'Anna',
                'surname' => 'Verdi',
                'body' => 'Ho fatto una visita medica con il dottor Rossi e sono rimasta molto soddisfatta del servizio ricevuto. Il medico è stato molto professionale e disponibile, mi ha fornito tutte le informazioni di cui avevo bisogno e mi ha fatto sentire a mio agio durante tutta la visita. Consigliato!',
                'doctor_id' => 20,
            ],
            [
                'name' => 'Giovanni',
                'surname' => 'Neri',
                'body' => 'Sono rimasto molto soddisfatto del servizio ricevuto durante la mia visita medica con il dottor Bianchi. Il medico è stato molto competente e professionale, mi ha fornito tutte le informazioni di cui avevo bisogno e mi ha fatto sentire a mio agio durante tutta la visita. Consigliato!',
                'doctor_id' => 20,
            ],
            [
                'name' => 'Paola',
                'surname' => 'Rossi',
                'body' => 'Sono rimasta molto soddisfatta del servizio ricevuto durante la mia visita medica con il dottor Neri. Il medico è stato molto attento alle mie esigenze e mi ha fornito tutte le informazioni di cui avevo bisogno. Consigliato!',
                'doctor_id' => 21,
            ],
            [
                'name' => 'Simone',
                'surname' => 'Bianchi',
                'body' => 'Ho fatto una visita medica e sono rimasto molto soddisfatto del servizio ricevuto. Il medico che mi ha seguito è stato molto competente e disponibile, mi ha fornito tutte le informazioni di cui avevo bisogno e mi ha fatto sentire a mio agio durante tutta la visita. Consigliato!',
                'doctor_id' => 21,
            ],
            [
                'name' => 'Sara',
                'surname' => 'Neri',
                'body' => 'Ho fatto una visita medica con il dottor Bianchi e sono rimasta molto soddisfatta del servizio ricevuto. Il medico è stato molto professionale e mi ha fornito tutte le informazioni di cui avevo bisogno. Consigliato!',
                'doctor_id' => 21,
            ],
            [
                'name' => 'Giulia',
                'surname' => 'Bianchi',
                'body' => "Ho avuto l'opportunità di incontrare un medico molto professionale, capace di spiegare con chiarezza e semplicità il mio problema di salute e il percorso terapeutico da seguire. Sono rimasta molto soddisfatta della sua professionalità e lo consiglio vivamente ad altri pazienti.",
                'doctor_id' => 22,
            ],
            [
                'name' => 'Paolo',
                'surname' => 'Russo',
                'body' => 'Sono stato assistito da un medico molto competente e disponibile. Ha dimostrato grande attenzione al mio problema di salute e mi ha fornito tutte le informazioni necessarie sulle opzioni terapeutiche disponibili. Consiglio questo medico a chiunque sia alla ricerca di un professionista capace e disponibile.',
                'doctor_id' => 22,
            ],
            [
                'name' => 'Laura',
                'surname' => 'Verdi',
                'body' => "Sono rimasta molto soddisfatta dell'attenzione e della professionalità dimostrate dal medico che mi ha assistito. Ha saputo rispondere con competenza e chiarezza a tutte le mie domande e ha fornito un trattamento molto efficace per il mio problema di salute. Consiglio vivamente questo medico.",
                'doctor_id' => 22,
            ],
            [
                'name' => 'Alessandro',
                'surname' => 'Neri',
                'body' => 'Ho avuto modo di incontrare un medico molto professionale e preparato. Ha dimostrato grande attenzione al mio problema di salute e mi ha fornito tutte le informazioni necessarie sulle opzioni terapeutiche disponibili. Sono rimasto molto soddisfatto della sua professionalità e lo consiglio vivamente ad altri pazienti.',
                'doctor_id' => 23,
            ],
            [
                'name' => 'Silvia',
                'surname' => 'Gialli',
                'body' => 'Sono rimasta molto soddisfatta della competenza e della professionalità del medico che mi ha assistito. Ha saputo fornire un trattamento molto efficace per il mio problema di salute e ha dimostrato grande attenzione ai miei bisogni. Consiglio questo medico a chiunque sia alla ricerca di un professionista competente e disponibile.',
                'doctor_id' => 23,
            ],
            [
                'name' => 'Giovanni',
                'surname' => 'Bianchi',
                'body' => 'Ho avuto un\'ottima esperienza presso questa struttura sanitaria. Il personale è stato molto gentile e professionale e mi ha fatto sentire a mio agio durante tutta la visita medica. Consiglio vivamente questo luogo per chiunque stia cercando un servizio sanitario di alta qualità.',
                'doctor_id' => 23,
            ],
            [
                'name' => 'Alessia',
                'surname' => 'Neri',
                'body' => 'Sono rimasta molto soddisfatta del mio trattamento presso questa struttura sanitaria. Il personale è stato molto disponibile e mi ha fornito tutte le informazioni di cui avevo bisogno. Consiglio vivamente questa struttura sanitaria a chiunque cerchi un servizio sanitario affidabile e di alta qualità.',
                'doctor_id' => 24,
            ],
            [
                'name' => 'Luca',
                'surname' => 'Russo',
                'body' => 'Ho ricevuto un\'ottima assistenza presso questa struttura sanitaria. Il personale è stato molto gentile e premuroso e mi ha fornito tutti i consigli di cui avevo bisogno per mantenere la mia salute al meglio. Consiglio vivamente questa struttura sanitaria a chiunque stia cercando un servizio sanitario di alta qualità.',
                'doctor_id' => 24,
            ],
            [
                'name' => 'Sara',
                'surname' => 'Ferrari',
                'body' => 'Sono rimasta molto soddisfatta della mia visita presso questa struttura sanitaria. Il personale è stato molto gentile e competente, e mi ha fatto sentire a mio agio durante tutta la visita. Consiglio vivamente questa struttura sanitaria a chiunque stia cercando un servizio sanitario di alta qualità.',
                'doctor_id' => 24,
            ],
            [
                'name' => 'Marco',
                'surname' => 'Verdi',
                'body' => 'Ho avuto un\'esperienza molto positiva presso questa struttura sanitaria. Il personale è stato molto professionale e attento alle mie esigenze, e mi ha fornito tutti i consigli di cui avevo bisogno per mantenere la mia salute al meglio. Consiglio vivamente questa struttura sanitaria a chiunque stia cercando un servizio sanitario affidabile e di alta qualità.',
                'doctor_id' => 25,
            ],

            [
                'name' => 'Laura',
                'surname' => 'Neri',
                'body' => 'Ho ricevuto un ottimo servizio presso la clinica, il personale è stato molto gentile e attento alle mie esigenze. La visita è stata esaustiva e il medico mi ha saputo tranquillizzare in merito alle mie preoccupazioni. Lo consiglio vivamente.',
                'doctor_id' => 25,
            ],

            [
                'name' => 'Simone',
                'surname' => 'Rossi',
                'body' => 'Sono rimasto molto soddisfatto del servizio offerto dalla clinica. Il personale è stato molto cordiale e disponibile durante tutta la visita medica. Inoltre, l\'ambiente pulito e confortevole ha reso l\'esperienza ancora più piacevole. Consiglio questa clinica a chiunque abbia bisogno di cure mediche.',
                'doctor_id' => 25,
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
