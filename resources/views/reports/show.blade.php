<x-app-layout>

    <div class="container mx-auto p-6">
        <!-- Section principale -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <!-- En-tête -->
            <div class="bg-gradient-to-r from-blue-600 to-teal-500 text-white p-6 rounded-t-lg">
                <h1 class="text-4xl font-semibold">Rapport IA - Assistant Virtuel</h1>
                <p class="mt-2 text-lg">12 Oct, 2024 - Rapport détaillé de l'IA testée</p>
            </div>
    
            <!-- Description de l'IA -->
            <div class="p-6">
                <h2 class="text-3xl font-semibold text-gray-800">Description de l'IA testée</h2>
                <p class="mt-4 text-lg text-gray-700">Cette IA est un assistant virtuel conçu pour répondre aux questions des utilisateurs, fournir des recommandations, et effectuer des tâches de traitement de texte et d'informations générales.</p>
            </div>
    
            <!-- Détail de l'évaluation -->
            <div class="p-6 bg-gray-50 rounded-lg shadow-inner">
                <h2 class="text-3xl font-semibold text-gray-800">Détail de l'évaluation</h2>
                <ul class="mt-4 text-lg text-gray-700 space-y-2">
                    <li><strong class="text-blue-600">Critère de Performance :</strong> 85</li>
                    <li><strong class="text-blue-600">Robustesse :</strong> 78</li>
                    <li><strong class="text-blue-600">Adaptabilité :</strong> 90</li>
                    <li><strong class="text-blue-600">Facilité d'utilisation :</strong> 92</li>
                </ul>
            </div>
    
            <!-- Conseils d'utilisation -->
            <div class="p-6 bg-gradient-to-r from-indigo-500 to-purple-600 text-white rounded-lg shadow-md">
                <h2 class="text-3xl font-semibold">Conseils d'utilisation</h2>
                <ul class="mt-4 list-disc pl-6 text-lg">
                    <li><strong>Optimisez les données d'entrée</strong> : Assurez-vous de bien formater les données d'entrée pour obtenir des résultats plus précis.</li>
                    <li><strong>Testez dans différents contextes</strong> : L'IA peut avoir des performances variées selon l'environnement.</li>
                    <li><strong>Vérifiez régulièrement les mises à jour</strong> : Les algorithmes d'IA sont en constante évolution, et les améliorations peuvent significativement influencer les performances.</li>
                </ul>
            </div>
    
            <!-- Score de l'IA -->
            <div class="p-6 bg-white rounded-lg shadow-md mt-6">
                <h2 class="text-3xl font-semibold text-gray-800">Score de l'IA</h2>
                <div class="flex items-center justify-between mt-4">
                    <p class="text-xl font-bold text-gray-700">Score Global</p>
                    <p class="text-4xl text-blue-600 font-extrabold">88 / 100</p>
                </div>
                <div class="mt-4">
                    <div class="w-full bg-gray-300 h-2.5 rounded-full">
                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 88%"></div>
                    </div>
                </div>
            </div>
    
            <!-- Comparaison des scores -->
            <div class="p-6 mt-6 bg-gray-50 rounded-lg shadow-md">
                <h2 class="text-3xl font-semibold text-gray-800">Comparaison avec d'autres IA</h2>
                <div class="mt-4">
                    <h3 class="text-2xl text-gray-700">IA sélectionnée : Assistant AI v2</h3>
                    <p class="mt-2 text-lg text-gray-600">Le score de l'IA testée est comparé avec l'IA la plus utilisée dans cette catégorie :</p>
                    
                    <div class="mt-6 flex items-center justify-between">
                        <div class="text-gray-700 w-1/3 text-center">
                            <p class="text-lg font-semibold">IA Choisie</p>
                            <p class="mt-2 text-4xl font-bold text-blue-600">88 / 100</p>
                        </div>
                        <div class="text-gray-700 w-1/3 text-center">
                            <p class="text-lg font-semibold">IA Standard</p>
                            <p class="mt-2 text-4xl font-bold text-gray-600">75 / 100</p>
                        </div>
                    </div>
    
                    <div class="mt-6">
                        <p class="text-lg text-gray-600">Voici une comparaison graphique entre les performances des deux IA :</p>
                        <div class="mt-4 flex justify-between items-center">
                            <div class="w-1/3 text-center text-blue-600">
                                <div class="text-lg font-bold">Assistant AI v2</div>
                                <div class="mt-2 bg-blue-100 p-2 rounded-full">
                                    88 / 100
                                </div>
                            </div>
                            <div class="w-1/3 text-center text-gray-600">
                                <div class="text-lg font-bold">IA Standard</div>
                                <div class="mt-2 bg-gray-200 p-2 rounded-full">
                                    75 / 100
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
    </div>
    
    </x-app-layout>
    