<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public $skills = [
        [
            "id" => 1,
            "name" => 'Front-End 🎨',
            "body" => "Da quando ero adolescente, ho sempre avuto una passione per il coding. Ricordo ancora il momento in cui ho scoperto le tabelle in HTML, e da quel momento non sono più riuscita a smettere. Mi affascinava l’idea di poter creare qualcosa di concreto solo con un linguaggio di programmazione. Questa curiosità iniziale mi ha spinto ad approfondire, e da allora ho continuato ad imparare e a sperimentare, affinando le mie competenze in aulab, dove ho potuto davvero comprendere le potenzialità di ciò che la programmazione può offrire.",
        ],
        [
            "id" => 2,
            "name" => 'Beck-End 🚀',
            "body" => "Il backend, invece, era un mondo completamente nuovo per me. Prima di entrare in Aulab, non avevo mai esplorato questa parte della programmazione, e mi sembrava distante dalla mia comfort zone. Ma con impegno e determinazione, sono riuscita ad apprendere le basi e a superare le difficoltà iniziali. Ogni giorno mi spingo a imparare qualcosa di nuovo, e la mia curiosità mi spinge a voler sempre di più, affrontando con entusiasmo ogni sfida.",
        ],
        [
            "id" => 3,
            "name" => 'Web Design ✨',
            "body" => "Il web design è sempre stato parte di me. Ho una passione innata per ciò che è bello e armonioso, e questo si riflette in ogni progetto che realizzo. Ho sempre avuto un buon senso estetico, che cerco di trasmettere nei miei lavori. Adoro usare Photoshop, è uno strumento fondamentale per il mio processo creativo, e mi permette di dare vita alle idee che ho in mente. Per me, il design è essenziale tanto quanto la funzionalità, e cerco di unire entrambi gli aspetti nei miei progetti.",
        ],


    ];

    public function index()
    {
        $skills = collect($this->skills);
        return view('index', ['skills' => $skills]);
    }



    public function index_submit(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $user_message = $request->user_message;

        $user_data = compact('name', 'email', 'user_message');

        Mail::to($email)->send(new ContactFormMail($user_data));

        return redirect(route('index'))->with('status', 'Messaggio inviato!');
    }
}
