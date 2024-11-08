<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PaymentConfirmationMail extends Mailable
{
    use SerializesModels;

    public $amount;
    public $email;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($amount, $email)
    {
        $this->amount = $amount;
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return \Illuminate\Mail\Mailable
     */
    public function build()
    {
        return $this->view('emails.payment_confirmation')
                    ->with([
                        'amount' => $this->amount,
                        'email' => $this->email,
                    ])
                    ->subject('Confirmation de paiement');
    }
}
