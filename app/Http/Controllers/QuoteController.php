<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quote;

class QuoteController extends Controller
{
    public function store(Request $request)
    {
        // Validation des données
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'service' => 'nullable|string|max:255',
            'note' => 'nullable|string',
        ]);

        // Enregistrement du devis
        Quote::create($request->all());

        // Redirection avec un message de succès
        return redirect()->back()->with('success', 'Votre demande de devis a été envoyée avec succès !');
    }
}
