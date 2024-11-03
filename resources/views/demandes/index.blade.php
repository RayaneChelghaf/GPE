<x-app-layout>

<p class="text-center text-2xl pt-6 pb-2">Liste de mes demandes</p>
    <div class="flex justify-center pb-4">
        <a href="{{ route('demandes.create') }}" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-4 py-2.5 text-center no-underline">Ajouter</a>
    </div>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 max-w-full">
                <div class="overflow-x-auto">
                    <table class="table w-full sortable">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 text-left font-semibold text-gray-700 text-center uppercase tracking-wider align-middle">Nom</th>
                                <th class="px-6 py-3 text-left font-semibold text-gray-700 text-center uppercase tracking-wider align-middle">Description</th>
                                <th class="px-6 py-3 text-left font-semibold text-gray-700 text-center uppercase tracking-wider align-middle">Biais</th>
                                <th class="px-6 py-3 text-left font-semibold text-gray-700 text-center uppercase tracking-wider align-middle">Visibilité</th>
                                <th class="px-6 py-3 text-left font-semibold text-gray-700 text-center uppercase tracking-wider align-middle">Premium</th>
                                <th class="px-6 py-3 text-left font-semibold text-gray-700 text-center uppercase tracking-wider align-middle">Actions</th>
                            </tr>
                        </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($demandes as $demande)
                                <tr>
                                    <td class="py-3 whitespace-nowrap description text-center align-middle"">{{ $demande->name }}</td>
                                    <td class="py-3 whitespace-nowrap description text-center align-middle"">{{ $demande->description }}</td>
                                    <td class="py-3 whitespace-nowrap description text-center align-middle">{{ $demande->biais }}</td>
                                    <td class="py-3 whitespace-nowrap description text-center align-middle">{{ $demande->visibility ? 'oui' : 'non' }}</td>
                                    <td class="py-3 whitespace-nowrap description text-center align-middle"">{{ $demande->premium ? 'oui' : 'non' }}</td>   
                                    <td class="px-3 whitespace-nowrap text-center align-middle ">
                                        <button id="dropdownMenuIconHorizontalButton" data-dropdown-toggle="dropdownDotsHorizontal{{ $demande->id }}" class="inline-flex items-center p-2 text-sm font-medium  text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button"> 
                                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                                            <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                                            </svg>
                                        </button>
                                        <div id="dropdownDotsHorizontal{{ $demande->id }}" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                            <div class="pt-1">
                                                <a href="{{ route('demandes.edit', $demande) }}" class="text-left block px-4 py-2 text-sm text-gray-800 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white w-full focus:outline-none focus:ring focus:ring-opacity-50 no-underline">Modifier</a>
                                            </div>
                                            <div class="pb-1">
                                                <form action="{{ route('demandes.destroy', $demande->id) }}" method="POST">
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
        $(document).ready(function () {
            $('.sortable').DataTable({
                "paging": true,
                "searching": false,
                "lengthChange": false,
                "columnDefs": [
                    { "orderable": false, "targets": [1] } // Désactiver le tri pour la colonne "Actions"
                ],
                "language": {
                    "sEmptyTable":     "Aucune donnée disponible dans le tableau",
                    "sInfo":           "Affichage de l'élément _START_ à _END_ sur _TOTAL_ éléments",
                    "sInfoEmpty":      "Affichage de l'élément 0 à 0 sur 0 élément",
                    "sInfoFiltered":   "(filtré à partir de _MAX_ éléments au total)",
                    "sInfoPostFix":    "",
                    "sInfoThousands":  ",",
                    "sLengthMenu":     "Afficher _MENU_ éléments",
                    "sLoadingRecords": "Chargement...",
                    "sProcessing":     "Traitement...",
                    "sSearch":         "Rechercher :",
                    "sZeroRecords":    "Aucun élément correspondant trouvé",
                    "oPaginate": {
                        "sFirst":    "Premier",
                        "sLast":     "Dernier",
                        "sNext":     "Suivant",
                        "sPrevious": "Précédent"
                    },
                    "oAria": {
                        "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
                        "sSortDescending": ": activer pour trier la colonne par ordre décroissant"
                    }
                }
            });
        });

</script>
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
