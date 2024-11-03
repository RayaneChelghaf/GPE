<x-app-layout>
    <p class="text-center text-2xl pt-6 pb-2">Liste des comptes rendus</p>
        <div class="flex justify-center pb-4">
        </div>

        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8 w-500">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 max-w-full">
                    <div class="overflow-x-auto">
                        <table class="table w-full sortable">
                            <thead>
                                <tr>
                                    <th class="px-6 text-left font-semibold text-gray-700 text-center uppercase tracking-wider align-middle">Nom de l'IA</th>
                                    <th class="px-6 text-left font-semibold text-gray-700 text-center uppercase tracking-wider align-middle">Description</th>
                                    <th class="px-6 text-left font-semibold text-gray-700 text-center uppercase tracking-wider align-middle">Bilan</th>
                                    <th class="px-6 text-left font-semibold text-gray-700 text-center uppercase tracking-wider align-middle">Score</th>
                                    <th class="px-6 text-left font-semibold text-gray-700 text-center uppercase tracking-wider align-middle">Actions</th>
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
                <a href="{{ route('reports.create') }}" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-4 py-2.5 text-center no-underline">Ajouter</a>
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
