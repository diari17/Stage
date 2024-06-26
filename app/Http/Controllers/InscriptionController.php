<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class InscriptionController extends Controller
{
    public function showInscriptionForm()
    {
        return view('inscription');
    }

    public function traiterInscription(Request $request)
    {
        // Valider les données du formulaire
        $validator = Validator::make($request->all(), [
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'departement' => 'required|string|max:255',
            'telephone' => 'required|string|max:15',
            'adresse' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Créer un nouvel utilisateur dans la base de données
        $user = User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'departement' => $request->departement,
            'telephone' => $request->telephone,
            'adresse' => $request->adresse,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Rediriger l'utilisateur vers la page de connexion avec un message de succès
        return redirect()->route('connexion')->with('success', 'Inscription réussie. Vous pouvez maintenant vous connecter.');
    }
}
