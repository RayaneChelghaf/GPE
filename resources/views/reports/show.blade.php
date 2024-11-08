<x-app-layout>
<<<<<<< HEAD
<p class="text-center text-2xl pt-6 pb-2">SHOW</p>
    <div class="flex justify-center pb-4">
        <a href="{{ route('reports.create') }}" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-4 py-2.5 text-center no-underline">Ajouter</a>
    </div>

    <div class="max-w-8xl mx-auto sm:px-6 lg:px-8 w-500">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 max-w-full">
                <div class="overflow-x-auto">
                    <table class="table w-full sortable">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 text-left font-semibold text-gray-700 text-center uppercase tracking-wider align-middle">Nom</th>
                                <th class="px-6 py-3 text-left font-semibold text-gray-700 text-center uppercase tracking-wider align-middle">Description</th>
                                <th class="px-6 py-3 text-left font-semibold text-gray-700 text-center uppercase tracking-wider align-middle">Résultat</th>
                                <th class="px-6 py-3 text-left font-semibold text-gray-700 text-center uppercase tracking-wider align-middle">Score</th>
                                <th class="px-6 py-3 text-left font-semibold text-gray-700 text-center uppercase tracking-wider align-middle">Actions</th>
                            </tr>
                        </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($reports as $report)
                                <tr>
                                    <td class="py-3 whitespace-nowrap description text-center align-middle">{{ $report->name }}</td>
                                    <td class="py-3 whitespace-nowrap description text-center align-middle">
                                        {!! nl2br(wordwrap($report->description, 80, "\n", true)) !!}
                                    </td>


                                    <td class="py-3 whitespace-nowrap description text-center align-middle">{{ $report->result }}</td>
                                    <td class="py-3 whitespace-nowrap description text-center align-middle" style="position: relative;">
                                        <canvas class="polarChart" 
                                            data-racism="{{ $report->racism }}" 
                                            data-sexism="{{ $report->sexism }}"
                                            data-homophobia="{{ $report->homophobia }}"
                                            data-antisemitism="{{ $report->antisemitism }}"
                                            data-islamophobia="{{ $report->islamophobia }}"
                                            width="260" height="140" style="margin: auto;">
                                        </canvas>
                                    </td>

                                    <!-- <td class="py-3 whitespace-nowrap description text-center align-middle"">{{ $report->result }}</td> -->
                                    <td class="px-3 whitespace-nowrap text-center align-middle ">
                                        <button id="dropdownMenuIconHorizontalButton" data-dropdown-toggle="dropdownDotsHorizontal{{ $report->id }}" class="inline-flex items-center p-2 text-sm font-medium  text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button"> 
                                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                                            <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                                            </svg>
                                        </button>
                                        <div id="dropdownDotsHorizontal{{ $report->id }}" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                            <div class="pt-1">
                                                <a href="{{ route('reports.edit', $report) }}" class="text-left block px-4 py-2 text-sm text-gray-800 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white w-full focus:outline-none focus:ring focus:ring-opacity-50 no-underline">Modifier</a>
                                            </div>
                                            <div class="pb-1">
                                                <form action="{{ route('reports.destroy', $report->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-left block px-4 py-2 text-sm text-red-500 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white w-full focus:outline-none focus:ring focus:ring-opacity-50 no-underline" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce compte rendu ?')">Supprimer</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        var charts = document.getElementsByClassName('polarChart');
        
        for (var i = 0; i < charts.length; i++) {
            var ctx = charts[i].getContext('2d');
            var polarChart = new Chart(ctx, {
                type: 'polarArea',
                data: {
                    labels: ['Racisme', 'Sexisme', 'Homophobie', 'Antisémtisime', 'Islamophobie'],
                    datasets: [{
                        data: [
                            charts[i].getAttribute('data-racism'),
                            charts[i].getAttribute('data-sexism'),
                            charts[i].getAttribute('data-homophobia'),
                            charts[i].getAttribute('data-antisemitism'),
                            charts[i].getAttribute('data-islamophobia'),
                        ],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.5)',
                            'rgba(54, 162, 235, 0.5)',
                            'rgba(255, 206, 86, 0.5)',
                            'rgba(75, 192, 192, 0.5)',
                            'rgba(153, 102, 255, 0.5)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: false,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'right'
                        }
                    }
                }
            });
        }
    });
</script>


    //     document.addEventListener('DOMContentLoaded', function () {
    //     var ctx = document.getElementById('myChart').getContext('2d');
    //     var myChart = new Chart(ctx, {
    //         type: 'bar',
    //         data: {
    //             labels: ['Label 1', 'Label 2', 'Label 3'],
    //             datasets: [{
    //                 label: 'Dataset Label',
    //                 data: [10, 20, 30],
    //                 backgroundColor: 'rgba(75, 192, 192, 0.2)',
    //                 borderColor: 'rgba(75, 192, 192, 1)',
    //                 borderWidth: 1
    //             }]
    //         },
    //         options: {
    //             responsive: false, // Cette option rend le graphique non réactif aux changements de taille
    //             maintainAspectRatio: false, 
    //             scales: {
    //                 y: {
    //                     beginAtZero: true
    //                 }
    //             }
    //     });
    // });
        // $(document).ready(function () {
        //     $('.sortable').DataTable({
        //         "paging": true,
        //         "searching": false,
        //         "lengthChange": false,
        //         "columnDefs": [
        //             { "orderable": false, "targets": [1] } // Désactiver le tri pour la colonne "Actions"
        //         ],
        //         "language": {
        //             "sEmptyTable":     "Aucune donnée disponible dans le tableau",
        //             "sInfo":           "Affichage de l'élément _START_ à _END_ sur _TOTAL_ éléments",
        //             "sInfoEmpty":      "Affichage de l'élément 0 à 0 sur 0 élément",
        //             "sInfoFiltered":   "(filtré à partir de _MAX_ éléments au total)",
        //             "sInfoPostFix":    "",
        //             "sInfoThousands":  ",",
        //             "sLengthMenu":     "Afficher _MENU_ éléments",
        //             "sLoadingRecords": "Chargement...",
        //             "sProcessing":     "Traitement...",
        //             "sSearch":         "Rechercher :",
        //             "sZeroRecords":    "Aucun élément correspondant trouvé",
        //             "oPaginate": {
        //                 "sFirst":    "Premier",
        //                 "sLast":     "Dernier",
        //                 "sNext":     "Suivant",
        //                 "sPrevious": "Précédent"
        //             },
        //             "oAria": {
        //                 "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
        //                 "sSortDescending": ": activer pour trier la colonne par ordre décroissant"
        //             }
        //         }
        //     });
        // });

<style>
     .sortable th:first-child,
        .sortable th:nth-child(2),
        .sortable th:last-child {
            border-color: #e2e8f0;
        }
        .sortable td {
            border-color: #e2e8f0;
        }
        table {
            border-bottom: none !important;
        }
</style>


</x-app-layout>
=======

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
    
>>>>>>> ulysse
