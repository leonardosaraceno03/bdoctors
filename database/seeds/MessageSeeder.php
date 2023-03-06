<?php

use App\Models\Message;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $messages = [
            [
                'name' => 'Mario',
                'surname' => 'Rossi',
                'email' => 'mario.rossi@example.com',
                'body' => 'Ho bisogno di prenotare una visita dal dottor Bianchi. Potete fornirmi maggiori informazioni sulla disponibilità e sul costo della visita? Grazie.',
                'doctor_id' => 1,
            ],
            [
                'name' => 'Sara',
                'surname' => 'Verdi',
                'email' => 'sara.verdi@example.com',
                'body' => 'Vorrei prenotare una visita con il dottor Neri per la prossima settimana. Potete farmi sapere quali sono le date disponibili e quanto costa la visita? Grazie.',
                'doctor_id' => 2,
            ],
            [
                'name' => 'Alessandro',
                'surname' => 'Bianchi',
                'email' => 'alessandro.bianchi@example.com',
                'body' => 'Sono interessato ai servizi del dottor Rossi e vorrei prenotare una visita. Potete farmi sapere se ha disponibilità questa settimana e quali sono i costi della visita? Grazie.',
                'doctor_id' => 1,
            ],
            [
                'name' => 'Laura',
                'surname' => 'Gialli',
                'email' => 'laura.gialli@example.com',
                'body' => 'Sono alla ricerca di un medico di famiglia e ho sentito parlare bene del dottor Neri. Potete farmi sapere se è possibile prenotare una visita di prima accoglienza con lui? Grazie.',
                'doctor_id' => 2,
            ],
            [
                'name' => 'Marco',
                'surname' => 'Rosa',
                'email' => 'marco.rosa@example.com',
                'body' => 'Ho bisogno di prenotare una visita di controllo dal dottor Bianchi. Potete farmi sapere quali sono le date disponibili e quanto costa la visita? Grazie.',
                'doctor_id' => 1,
            ],
            [
                'name' => 'Paola',
                'surname' => 'Verdi',
                'email' => 'paola.verdi@example.com',
                'body' => 'Vorrei prenotare una visita con il dottor Neri per la prossima settimana. Potete farmi sapere quali sono le date disponibili e quanto costa la visita? Grazie.',
                'doctor_id' => 2,
            ],
            [
                'name' => 'Simone',
                'surname' => 'Bianchi',
                'email' => 'simone.bianchi@example.com',
                'body' => 'Sono alla ricerca di un medico specialista in cardiologia e mi hanno consigliato il dottor Rossi. Potete farmi sapere se è possibile prenotare una visita con lui? Grazie.',
                'doctor_id' => 1,
            ],

            [
                'name' => 'Paolo',
                'surname' => 'Verdi',
                'email' => 'paolo.verdi@example.com',
                'body' => 'Vorrei prenotare una visita con il dottor Rossi per la prossima settimana. Potete dirmi se ha disponibilità e qual è il costo della visita? Grazie.',
                'doctor_id' => 3,
            ],

            [
                'name' => 'Giuseppe',
                'surname' => 'Ferrari',
                'email' => 'giuseppe.ferrari@example.com',
                'body' => 'Buongiorno, sto cercando un medico che si occupi di dermatologia. Potreste suggerirmi il nome di un professionista e fornirmi maggiori informazioni sulle visite e sulle tariffe? Grazie.',
                'doctor_id' => 3,
            ],

            [
                'name' => 'Martina',
                'surname' => 'Esposito',
                'email' => 'martina.esposito@example.com',
                'body' => 'Ciao, avrei bisogno di una consulenza ginecologica. Potete indicarmi il nome di un medico disponibile e i costi della visita? Grazie.',
                'doctor_id' => 3,
            ],

            [
                'name' => 'Roberta',
                'surname' => 'Greco',
                'email' => 'roberta.greco@example.com',
                'body' => 'Salve, avrei bisogno di una visita oculistica. Potete indicarmi il nome di un medico specializzato e i costi della visita? Grazie.',
                'doctor_id' => 4,
            ],

            [
                'name' => 'Lorenzo',
                'surname' => 'Fabbri',
                'email' => 'lorenzo.fabbri@example.com',
                'body' => 'Buongiorno, sto cercando un medico che si occupi di malattie infettive. Potreste suggerirmi il nome di un professionista e fornirmi maggiori informazioni sulle visite e sulle tariffe? Grazie.',
                'doctor_id' => 4,
            ],

            [
                'name' => 'Marco',
                'surname' => 'Costa',
                'email' => 'marco.costa@example.com',
                'body' => 'Ciao, avrei bisogno di una consulenza psicologica. Potete indicarmi il nome di un medico specializzato e i costi della visita? Grazie.',
                'doctor_id' => 4,
            ],

            [
                'name' => 'Luigi',
                'surname' => 'Bruno',
                'email' => 'luigi.bruno@example.com',
                'body' => 'Salve, ho bisogno di prenotare una visita con un medico dermatologo per un problema di pelle. Potete consigliarmi un professionista e indicarmi i costi della visita? Grazie.',
                'doctor_id' => 5,
            ],

            [
                'name' => 'Simona',
                'surname' => 'Ricci',
                'email' => 'simona.ricci@example.com',
                'body' => 'Buongiorno, avrei bisogno di una visita con un medico gastroenterologo. Potete indicarmi il nome di un professionista e dirmi quale è il costo della visita? Grazie.',
                'doctor_id' => 5,
            ],

            [
                'name' => 'Maria',
                'surname' => 'Greco',
                'email' => 'maria.greco@example2.com',
                'body' => "Salve, sto cercando un medico che si occupi di disturbi alimentari. Potete consigliarmi un professionista e indicarmi i costi della visita? Grazie.",
                'doctor_id' => 5,
            ],

            [
                'name' => 'Marco',
                'surname' => 'Bianchi',
                'email' => 'marco.bianchi@example.com',
                'body' => 'Buongiorno, vorrei prenotare una visita con un neurologo. Potete indicarmi il nome di un professionista e dirmi quale è il costo della visita? Grazie.',
                'doctor_id' => 6,
            ],

            [
                'name' => 'Anna',
                'surname' => 'Esposito',
                'email' => 'anna.esposito@example.com',
                'body' => "Salve, sto cercando un medico specializzato in malattie dell'apparato respiratorio. Potete consigliarmi un professionista e indicarmi i costi della visita? Grazie.",
                'doctor_id' => 6,
            ],

            [
                'name' => 'Paolo',
                'surname' => 'Conti',
                'email' => 'paolo.conti@example.com',
                'body' => 'Buongiorno, ho bisogno di una visita dermatologica per un problema di acne. Potete consigliarmi un professionista e indicarmi i costi della visita? Grazie.',
                'doctor_id' => 6,
            ],

            [
                'name' => 'Paolo',
                'surname' => 'Conti',
                'email' => 'paolo.conti@example.com',
                'body' => 'Buongiorno, ho bisogno di una visita dermatologica per un problema di acne. Potete consigliarmi un professionista e indicarmi i costi della visita? Grazie.',
                'doctor_id' => 7,
            ],

            [
                'name' => 'Giuseppe',
                'surname' => 'Neri',
                'email' => 'giuseppe.neri@example.com',
                'body' => 'Buongiorno, vorrei prenotare una visita con un dentista per una pulizia dei denti. Potete consigliarmi un professionista e dirmi quale è il costo della visita? Grazie.',
                'doctor_id' => 7,
            ],

            [
                'name' => 'Federica',
                'surname' => 'Lombardi',
                'email' => 'federica.lombardi@example.com',
                'body' => 'Salve, ho bisogno di prenotare una visita con un medico oculista per un controllo della vista. Potete dirmi se ha disponibilità a breve e quale è il costo della visita? Grazie.',
                'doctor_id' => 7,
            ],

            [
                'name' => 'Anna',
                'surname' => 'Bianchi',
                'email' => 'anna.bianchi@example.com',
                'body' => 'Buongiorno, sto cercando un medico che si occupi di disturbi della tiroide. Potete consigliarmi un professionista e indicarmi i costi della visita? Grazie.',
                'doctor_id' => 8,
            ],

            [
                'name' => 'Paolo',
                'surname' => 'Esposito',
                'email' => 'paolo.esposito@example.com',
                'body' => 'Salve, ho bisogno di prenotare una visita con un medico neurologo per un problema di mal di testa. Potete consigliarmi un professionista e indicarmi i costi della visita? Grazie.',
                'doctor_id' => 8,
            ],

            [
                'name' => 'Francesca',
                'surname' => 'Russo',
                'email' => 'francesca.russo@example.com',
                'body' => 'Salve, vorrei prenotare una visita ginecologica di controllo. Potete dirmi quale è il costo della visita e se avete disponibilità nei prossimi giorni? Grazie.',
                'doctor_id' => 8,
            ],

            [
                'name' => 'Marco',
                'surname' => 'Gallo',
                'email' => 'marco.gallo@example.com',
                'body' => 'Buongiorno, ho bisogno di prenotare una visita con un dermatologo per un controllo dei nei. Potete consigliarmi un professionista e dirmi quale è il costo della visita? Grazie.',
                'doctor_id' => 9,
            ],

            [
                'name' => 'Luigi',
                'surname' => 'Marino',
                'email' => 'luigi.marino@example.com',
                'body' => 'Salve, vorrei prenotare una visita con un medico di base per un controllo generale. Potete dirmi quale è il costo della visita e se avete disponibilità nei prossimi giorni? Grazie.',
                'doctor_id' => 9,
            ],

            [
                'name' => 'Maria',
                'surname' => 'Greco',
                'email' => 'maria.greco@example1.com',
                'body' => 'Buongiorno, ho bisogno di prenotare una visita con un medico cardiologo per un controllo della pressione. Potete consigliarmi un professionista e dirmi quale è il costo della visita? Grazie.',
                'doctor_id' => 9,
            ],

            [
                'name' => 'Laura',
                'surname' => 'Neri',
                'email' => 'laura.neri@example.com',
                'body' => 'Salve, vorrei prenotare una visita con un oculista per un controllo della vista. Potete consigliarmi un professionista e dirmi quale è il costo della visita? Grazie.',
                'doctor_id' => 10,
            ],

            [
                'name' => 'Silvia',
                'surname' => 'Esposito',
                'email' => 'silvia.esposito@example.com',
                'body' => 'Salve, ho bisogno di prenotare una visita con un ortopedico per un controllo della schiena. Potete consigliarmi un professionista e dirmi quale è il costo della visita? Grazie.',
                'doctor_id' => 10,
            ],

            [
                'name' => 'Roberto',
                'surname' => 'Russo',
                'email' => 'roberto.russo@example.com',
                'body' => 'Salve, vorrei prenotare una visita con un ginecologo per un controllo di routine. Potete consigliarmi un professionista e dirmi quale è il costo della visita? Grazie.',
                'doctor_id' => 10,
            ],

            [
                'name' => 'Luca',
                'surname' => 'Gallo',
                'email' => 'luca.gallo@example.com',
                'body' => 'Buongiorno, ho bisogno di prenotare una visita con un neurologo per un problema di emicrania. Potete consigliarmi un professionista e dirmi quale è il costo della visita? Grazie.',
                'doctor_id' => 11,
            ],

            [
                'name' => 'Elena',
                'surname' => 'Bianchi',
                'email' => 'elena.bianchi@example.com',
                'body' => 'Salve, vorrei prenotare una visita con un dentista per un controllo dei denti. Potete consigliarmi un professionista e dirmi quale è il costo della visita? Grazie.',
                'doctor_id' => 11,
            ],

            [
                'name' => 'Valentina',
                'surname' => 'Rossi',
                'email' => 'valentina.rossi@example.com',
                'body' => 'Buongiorno, vorrei prenotare una visita per mia figlia di 6 anni con un pediatra per una visita di controllo generale. Potete consigliarmi un professionista e dirmi quale è il costo della visita? Grazie.',
                'doctor_id' => 11,
            ],
            [
                'name' => 'Valentina',
                'surname' => 'Rossi',
                'email' => 'valentinarossi@example.com',
                'body' => 'Buongiorno Dottore, vorrei prenotare una visita per mia figlia di 6 anni per una visita di controllo generale. Sono preoccupata per la sua salute e vorrei avere un parere medico esperto. Potrebbe indicarmi il costo della visita e la sua disponibilità? Grazie mille.',
                'doctor_id' => 12,
            ],
            [
                'name' => 'Francesca',
                'surname' => 'Bianchi',
                'email' => 'francescabianchi@example.com',
                'body' => 'Grazie mille dottore per la sua professionalità e la sua gentilezza. Mi ha fatto sentire a mio agio e ha risolto il mio problema di salute in modo rapido ed efficace. Consiglio vivamente il dottor X a chiunque abbia bisogno di una visita medica di qualità.',
                'doctor_id' => 12,
            ],
            [
                'name' => 'Laura',
                'surname' => 'Neri',
                'email' => 'lauraneri@example.com',
                'body' => 'Grazie mille dottore per la sua professionalità e la sua disponibilità. Ho trovato molto utile il suo consiglio e mi ha aiutato a risolvere il mio problema di salute in modo efficace. Consiglio vivamente il dottor Z a chiunque abbia bisogno di una visita medica di qualità.',
                'doctor_id' => 12,
            ],

            [
                'name' => 'Martina',
                'surname' => 'Gialli',
                'email' => 'martinagialli@example.com',
                'body' => 'Grazie mille dottore per la sua attenzione e la sua disponibilità. Mi ha fatto sentire a mio agio durante la visita e ha risolto il mio problema di salute in modo efficace. Consiglio vivamente il dottor V a chiunque abbia bisogno di una visita medica di qualità.',
                'doctor_id' => 13,
            ],

            [
                'name' => 'Giulia',
                'surname' => 'Verdi',
                'email' => 'giuliaverdi@example.com',
                'body' => 'Ciao dottore, volevo ringraziarla per la cura che mi ha prestato durante il mio ricovero in ospedale. Sapevo di essere in buone mani e questo mi ha permesso di superare l\'operazione con meno ansia e stress. Grazie di cuore.',
                'doctor_id' => 13,
            ],

            [
                'name' => 'Giovanni',
                'surname' => 'Rossi',
                'email' => 'giovannirossi@example.com',
                'body' => 'Buonasera, volevo lasciare un commento positivo sulla visita che ho effettuato oggi presso il vostro studio medico. Il dottore che mi ha visitato è stato molto professionale e competente, ma soprattutto ha dimostrato un grande interesse e una vera attenzione nei confronti dei suoi pazienti. Complimenti!',
                'doctor_id' => 13,
            ],
            [
                'name' => 'Ludovica',
                'surname' => 'Ferrari',
                'email' => 'ludovicaferrari@example.com',
                'body' => 'Buongiorno, sono Ludovica e volevo esprimere la mia profonda gratitudine al dottore che ha seguito la mia nonna durante la sua degenza in ospedale. La sua professionalità, umanità e gentilezza sono state fondamentali per far sentire mia nonna a suo agio e per garantirle la miglior assistenza possibile. Ancora grazie.',
                'doctor_id' => 14,
            ],
            [
                'name' => 'Francesca',
                'surname' => 'Verdi',
                'email' => 'francesca.verdi@example.com',
                'body' => 'Buongiorno, vorrei prenotare una visita con un oculista per un controllo della vista. Potete consigliarmi un professionista e dirmi quale è il costo della visita? Grazie.',
                'doctor_id' => 14,
            ],
            [
                'name' => 'Carla',
                'surname' => 'Neri',
                'email' => 'carlaneri@example.com',
                'body' => 'Buongiorno, ho bisogno di prenotare una visita con un ginecologo per un controllo di routine. Potete consigliarmi un professionista e dirmi quale è il costo della visita? Grazie.',
                'doctor_id' => 15,
            ],
            [
                'name' => 'Antonio',
                'surname' => 'Santoro',
                'email' => 'antoniosantoro@example.com',
                'body' => 'Salve, sono un paziente di lunga data e vorrei ringraziare il dottor Bianchi per la sua professionalità e per la cura che ha dimostrato durante il mio recente ricovero. Grazie di cuore.',
                'doctor_id' => 15,
            ],
            [
                'name' => 'Maria',
                'surname' => 'Esposito',
                'email' => 'mariaesposito@example.com',
                'body' => 'Salve, ho bisogno di prenotare una visita con un neurologo per dei problemi di sonno. Potete dirmi quale è il costo della visita e se c\'è disponibilità nei prossimi giorni? Grazie.',
                'doctor_id' => 15,
            ],
            [
                'name' => 'Giuseppe',
                'surname' => 'Ferrari',
                'email' => 'giuseppeferrari@example.com',
                'body' => 'Buongiorno, vorrei prenotare una visita con un cardiologo per un controllo del cuore. Potete consigliarmi un professionista e dirmi quale è il costo della visita? Grazie.',
                'doctor_id' => 16,
            ],
            [
                'name' => 'Valentina',
                'surname' => 'Rossi',
                'email' => 'valentinarossi@example.com',
                'body' => 'Buongiorno, vorrei prenotare una visita per mia figlia di 6 anni con un pediatra per una visita di controllo generale. Potete consigliarmi un professionista e dirmi quale è il costo della visita? Grazie.',
                'doctor_id' => 16,
            ],
            [
                'name' => 'Luisa',
                'surname' => 'Moretti',
                'email' => 'luisamoretti@example.com',
                'body' => 'Buongiorno, sto cercando un medico che possa aiutarmi con problemi di allergie. Potete consigliarmi un professionista e dirmi quale è il costo della visita? Grazie.',
                'doctor_id' => 16,
            ],
            [
                'name' => 'Anna',
                'surname' => 'Russo',
                'email' => 'anna.russo@example.com',
                'body' => 'Buongiorno, ho bisogno di prenotare una visita ginecologica per un controllo generale. Potete consigliarmi un professionista e dirmi quale è il costo della visita? Grazie.',
                'doctor_id' => 17,
            ],
            [
                'name' => 'Giulia',
                'surname' => 'Bianchi',
                'email' => 'giulia.bianchi@example.com',
                'body' => 'Buongiorno, ho bisogno di prenotare una visita oculistica per una possibile miopia. Potreste consigliarmi un medico specialista e dirmi quali sono i costi della visita? Grazie.',
                'doctor_id' => 17,
            ],
            [
                'name' => 'Lorenzo',
                'surname' => 'Neri',
                'email' => 'lorenzo.neri@example.com',
                'body' => 'Salve, sono interessato ad effettuare una visita cardiologica per un controllo preventivo. Potreste indicarmi un medico esperto e dirmi quali sono i costi della visita? Grazie anticipatamente.',
                'doctor_id' => 17,
            ],
            [
                'name' => 'Martina',
                'surname' => 'Verdi',
                'email' => 'martina.verdi@example.com',
                'body' => 'Buongiorno, vorrei prenotare una visita con un gastroenterologo per un controllo generale. Potreste suggerirmi un professionista e dirmi qual è il prezzo della visita? Grazie.',
                'doctor_id' => 18,
            ],
            [
                'name' => 'Andrea',
                'surname' => 'Rizzo',
                'email' => 'andrea.rizzo@example.com',
                'body' => 'Buonasera, ho bisogno di una visita con un neurologo per alcuni problemi di memoria e concentrazione. Potreste indicarmi un medico specialista e dirmi quali sono i costi della visita? Grazie mille.',
                'doctor_id' => 18,
            ],
            [
                'name' => 'Federica',
                'surname' => 'Bruno',
                'email' => 'federica.bruno@example.com',
                'body' => 'Buongiorno, vorrei prenotare una visita con un ginecologo per un controllo generale. Potreste consigliarmi un professionista e dirmi qual è il prezzo della visita? Grazie in anticipo.',
                'doctor_id' => 18,
            ]












        ];

        foreach ($messages as $message) {
            $newMessage = new Message();

            $newMessage->name = $message['name'];
            $newMessage->surname = $message['surname'];
            $newMessage->email = $message['email'];
            $newMessage->body = $message['body'];
            $newMessage->doctor_id = $message['doctor_id'];

            $newMessage->save();
        }
    }
}
