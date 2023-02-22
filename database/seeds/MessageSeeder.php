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
