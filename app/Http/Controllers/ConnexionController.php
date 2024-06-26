<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ConnexionController extends Controller
{
    public function afficherConnexion()
    {
        return view('connexion');
    }

    public function traiterConnexion(Request $request)
    {
        // Valider les données du formulaire
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Essayer de connecter l'utilisateur
        if (Auth::attempt($credentials)) {
            // Regénérer la session pour éviter les attaques de fixation de session
            $request->session()->regenerate();

            // Rediriger vers la page d'accueil ou le tableau de bord
            return redirect()->intended('accueil')->with('success', 'Connexion réussie !');
        }

        // Si la connexion échoue, retourner avec un message d'erreur
        return back()->withErrors([
            'email' => 'Les informations d\'identification fournies ne correspondent pas à nos enregistrements.',
        ])->onlyInput('email');
    }
}
