<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mail\PaymentConfirmationMail;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

class PaymentController extends Controller
{
    public function showListOffers()
    {
        return view('premium/offers');
    }

    public function redirectToPayment($amount, Request $request)
    {
        $role = $request->input('role', 1); 
        session(['payment_amount' => $amount, 'role' => $role]);

        return redirect()->route('payment.form');
    }

    public function showPaymentForm()
    {
        $amount = session('payment_amount', 900);
        $user = Auth::user();

        $role = $user ? $user->role : null;

        $offerTitle = $role == 2 ? 'Offre premium' : ($role == 3 ? 'Offre entreprise' : 'Offre standard');

       

        return view('premium/charge', [
            'stripe_public_key' => env('STRIPE_KEY'),
            'amount' => $amount,
            'user_email' => $user ? $user->email : '',
            'offerTitle' => $offerTitle,
        ]);
    }

    public function processPayment(Request $request)
    {
        $role = session('role', 1);

        $user = Auth::user();
        User::where('email', $user->email)
            ->update([
                'role' => $role
        ]);

        $amount = $request->input('amount');
        $email = $request->input('email');

        Mail::to($email)->send(new PaymentConfirmationMail($amount, $email));

        return redirect()->route('payment.success');
    }

    public function paymentSuccess()
    {
        return redirect()->route('reports.index')
        ->with('success', 'Le paiement a été effectué avec succès.');
    }
}
