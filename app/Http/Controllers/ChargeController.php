<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChargeController extends Controller
{
    // Afficher le formulaire de paiement
    public function index()
    {
        return view('charge')->with([
            'stripe_public_key' => env('STRIPE_KEY'),
        ]);
    }

    // Traiter le paiement
    public function store(Request $request)
    {
        // Définir la clé API de Stripe
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        // Obtenir le montant et l'email du formulaire
        $amount = $request->input('amount') * 100; // Convertir en cents
        $email = $request->input('email');

        // Créer un nouveau client Stripe
        $customer = \Stripe\Customer::create([
            'email' => $email,
            'source' => $request->input('stripeToken'),
        ]);

        // Créer un nouveau paiement Stripe
        $charge = \Stripe\Charge::create([
            'customer' => $customer->id,
            'amount' => $amount,
            'currency' => 'usd',
        ]);

        // Afficher un message de succès à l'utilisateur
        return 'Payment successful!';
    }
}
