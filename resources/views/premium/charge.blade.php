<x-app-layout>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Paiement</title>
    </head>
    <body class="bg-gray-100">

        <div class="flex justify-center mt-10">
            <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-lg">
                <h2 class="text-2xl font-semibold text-center text-gray-700 mb-6">Paiement</h2>
                
                <!-- Résumé de la commande -->
                <div class="mb-6 p-6 bg-white rounded-lg shadow-lg">
                    <!-- Titre de l'offre -->
                    <p class="text-md font-semibold text-gray-700">
                        <span class="font-bold text-cyan-600">{{ $offerTitle }}</span>
                    </p>
                    <!-- Montant à régler -->
                    <p class="text-md text-gray-600">
                        Montant total à régler : 
                        <span class="font-semibold text-blue-500 text-xl">{{ number_format($amount / 100, 2) }} €</span>
                    </p>
                
                    <!-- Ligne de séparation -->
                    <div class="border-t-2 border-gray-200 my-3"></div>
                
                    <!-- Détails supplémentaires -->
                    <p class="text-sm text-gray-500">Tous les paiements sont sécurisés et traités via Stripe.</p>
                </div>

                <!-- Formulaire de paiement -->
                <form action="{{ route('process.payment') }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="amount" value="{{ $amount }}">
                    
                    <label for="email" class="block text-gray-600 font-semibold mb-2">Email :</label>
                    <input type="email" name="email" id="email" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent mb-4"
                        value="{{ $user_email }}">

                    <label for="card-element" class="block text-gray-600 font-semibold mb-2">Carte de crédit ou de débit</label>
                    <div id="card-element"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent mb-4">
                    </div>
                
                    <div id="card-errors" role="alert" class="text-red-600 text-sm mt-2 mb-4"></div>
                
                    <button type="submit"
                        class="w-full py-3 bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl text-white font-medium rounded-lg shadow-md transition duration-150 ease-in-out focus:ring-4 focus:ring-cyan-300 dark:focus:ring-cyan-800">
                        Soumettre le paiement
                    </button>
                </form>
                
                <div class="mt-6 text-sm text-center text-gray-500">
                    <p>En soumettant ce formulaire, vous acceptez nos <a href="#" class="text-blue-600 hover:underline">conditions générales de vente</a>.</p>
                </div>
            </div>
        </div>

        <!-- Stripe JS -->
        <script src="https://js.stripe.com/v3/"></script>
        <script>
            const stripe = Stripe('{{ $stripe_public_key }}');
            var elements = stripe.elements();

            var card = elements.create('card', { style: { base: { fontSize: '16px', color: '#32325d' }}}); 
            card.mount('#card-element');

            var form = document.querySelector('form');
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                stripe.createToken(card).then(function(result) {
                    if (result.error) {
                        document.getElementById('card-errors').textContent = result.error.message;
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
</x-app-layout>
