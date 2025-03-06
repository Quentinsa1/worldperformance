<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage; // Importer le modèle ContactMessage

class WebsiteController extends Controller
{
    // Afficher la page d'accueil
    public function index()
    {
        return view('website.index');
    }

    // Afficher la page de contact
    public function contact()
    {
        return view('website.contact');
    }

    // Afficher la page de l'équipe
    public function team()
    {
        return view('website.team');
    }

    // Enregistrer le message de contact dans la base de données
    public function storeContact(Request $request)
    {
        // Validation des données du formulaire
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Création d'une nouvelle instance du modèle ContactMessage
        $contactMessage = new ContactMessage();
        $contactMessage->name = $request->name;
        $contactMessage->email = $request->email;
        $contactMessage->subject = $request->subject;
        $contactMessage->message = $request->message;

        // Sauvegarde du message dans la base de données
        $contactMessage->save();

        // Retourner une réponse ou rediriger vers une autre page avec un message de succès
        return redirect()->route('website.contact')->with('success', 'Votre message a été envoyé avec succès.');
    }

    public function job(){
        view('website.job');
    }
}
