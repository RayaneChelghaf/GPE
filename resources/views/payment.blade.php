<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paiement</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="email"], input[type="card"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
        .error {
            color: red;
            font-size: 14px;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Paiement</h2>
    <p>Montant à payer : {{ $amount / 100 }} €</p> <!-- Affiche le montant à payer -->
    <form id="payment-form" action="{{ route('process.payment') }}" method="POST">
        @csrf
        <input type="hidden" name="amount" value="{{ $amount }}"> <!-- Envoie le montant -->
        <div class="form-group">
            <label for="card-element">Carte de Crédit</label>
            <div id="card-element"></div>
            <div id="card-errors" class="error" role="alert"></div>
        </div>
        <button type="submit">Payer</button>
    </form>
</div>

<script src="https://js.stripe.com/v3/"></script>
<script>
    const stripe = Stripe('{{ $stripe_public_key }}');
    const elements = stripe.elements();

    const cardElement = elements.create('card');
    cardElement.mount('#card-element');

    const form = document.getElementById('payment-form');
    form.addEventListener('submit', async (event) => {
        event.preventDefault();

        const { error, paymentIntent } = await stripe.confirmCardPayment('CLIENT_SECRET_FROM_SERVER', {
            payment_method: {
                card: cardElement,
            }
        });

        if (error) {
            document.getElementById('card-errors').textContent = error.message;
        } else {
            if (paymentIntent.status === 'succeeded') {
                // Afficher un message de succès
                alert('Paiement réussi !');
                form.submit(); // Soumettre le formulaire après succès
            }
        }
    });
</script>

</body>
</html>
