<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Stripe\PaymentIntent;
use Stripe\Stripe;

class PaymentController extends Controller
{
    public function showPaymentForm()
    {
        dump("hello");
        $amount = 100; // Montant en centimes (1,00 €)

        return view('payment')->with([
            'stripe_public_key' => env('STRIPE_KEY'),
            'amount' => $amount, // Montant à payer
        ]);
    }

    public function processPayment(Request $request)
    {
        dump("test");
        Log::debug("test");
        Stripe::setApiKey(env('STRIPE_SECRET'));

        try {
            // Créer un PaymentIntent
            $paymentIntent = PaymentIntent::create([
                'amount' => $request->amount, // Montant en centimes
                'currency' => 'eur',
                'payment_method_types' => ['card'],
            ]);

            return response()->json([
                'client_secret' => $paymentIntent->client_secret, // Retourner le client_secret
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
