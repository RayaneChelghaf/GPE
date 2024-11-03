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
            width: 400px; /* Largeur augmentée pour un meilleur espace */
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px; /* Taille de police pour le titre */
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold; /* Mettre le texte des labels en gras */
        }
        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 15px; /* Espace entre les champs */
            transition: border-color 0.3s; /* Animation pour le focus */
        }
        input[type="text"]:focus, input[type="email"]:focus {
            border-color: #007bff; /* Couleur de la bordure au focus */
            outline: none; /* Retirer le contour par défaut */
        }
        #card-element {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 15px; /* Espace entre le champ de carte et le bouton */
        }
        #card-errors {
            color: red; /* Couleur pour les erreurs */
            margin-top: 10px; /* Espace au-dessus des erreurs */
            font-size: 14px; /* Taille de police pour les erreurs */
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745; /* Couleur de fond pour le bouton */
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s; /* Animation pour le hover */
        }
        button:hover {
            background-color: #218838; /* Couleur de fond au survol */
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Paiement</h2>
    <form action="/charge" method="POST">
        {{ csrf_field() }}
        <label for="amount">
            Montant (en centimes) :
            <input type="text" name="amount" id="amount" required>
        </label>

        <label for="email">
            Email :
            <input type="email" name="email" id="email" required>
        </label>

        <label for="card-element">
            Carte de crédit ou de débit
        </label>
        <div id="card-element">
            <!-- A Stripe Element will be inserted here. -->
        </div>

        <!-- Used to display form errors. -->
        <div id="card-errors" role="alert"></div>

        <button type="submit">Soumettre le paiement</button>
    </form>
</div>

<!-- Stripe JS -->
<script src="https://js.stripe.com/v3/"></script>
<script>
    const stripe = Stripe('{{ $stripe_public_key }}');
    var elements = stripe.elements();

    var card = elements.create('card');
    card.mount('#card-element');

    card.on('change', function(event) {
        var displayError = document.getElementById('card-errors');
        if (event.error) {
            displayError.textContent = event.error.message;
        } else {
            displayError.textContent = '';
        }
    });

    var form = document.querySelector('form');
    form.addEventListener('submit', function(event) {
        event.preventDefault();

        stripe.createToken(card).then(function(result) {
            if (result.error) {
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = result.error.message;
            } else {
                var hiddenInput = document.createElement('input');
                hiddenInput.setAttribute('type', 'hidden');
                hiddenInput.setAttribute('name', 'stripeToken');
                hiddenInput.setAttribute('value', result.token.id);
                form.appendChild(hiddenInput);
                form.submit();
            }
        });
    });
</script>

</body>
</html>
