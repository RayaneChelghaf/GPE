<x-app-layout>

    <div class="flex justify-center items-center">
        <div class="w-full sm:max-w-lg">
            <p class="text-center text-2xl pt-6 pb-2">Nouveau compte rendu</p>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200 mt-3">

                <form method="POST" action="{{ route('reports.store') }}">
                    @csrf
                    <div>
                        <!-- Nom -->
                        <x-input-label for="name" :value="__('Nom du compte rendu')" />
                        <div class="input-group">
                            <x-text-input id="name" class="block mt-1 w-full form-control" type="text" name="name" :value="old('name')" required autofocus/>
                        </div>
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />

                        <!-- Description -->
                        <x-input-label for="description" :value="__('Description')" />
                        <div class="input-group">
                            <x-text-area id="description" class="block mt-1 w-full form-control" name="description" required autofocus placeholder="Entrez une description..." rows="3">
                                {{ old('description') }}
                            </x-text-area>
                        </div>
                        <x-input-error :messages="$errors->get('description')" class="mt-2" />

                        <!-- Resultat -->
                        <x-input-label for="result" :value="__('Résultat')" />
                        <div class="input-group">
                            <x-text-input id="result" class="block mt-1 w-full form-control" type="text" name="result" :value="old('result')" required autofocus/>
                        </div>
                        <x-input-error :messages="$errors->get('result')" class="mt-2" />

                        <!-- racism -->
                        <div x-data="{ racism: 50 }" class="my-2">
                            <label for="racism" class="font-bold text-gray-700" x-text="`Racisme : ` + racism"></label>
                            <input type="range" min="1" name="racism" max="100" x-model="racism"
                                class="w-full h-2 bg-blue-100 appearance-none" />
                        </div>

                        <!-- Sexisme -->
                        <div x-data="{ sexisme: 50 }" class="my-2">
                            <label for="sexisme" class="font-bold text-gray-700" x-text="`Sexisme : ` + sexisme"></label>
                            <input type="range" min="1" name="sexism" max="100" x-model="sexisme" :value="sexisme"
                                class="w-full h-2 bg-blue-100 appearance-none" />
                        </div>
                        <!-- Homophobie -->
                        <div x-data="{ homophobie: 50 }" class="my-2">
                            <label for="homophobie" class="font-bold text-gray-700" x-text="`Homophobie : ` + homophobie"></label>
                            <input type="range" min="1" name="homophobia" max="100" x-model="homophobie" :value="homophobia"
                            class="w-full h-2 bg-blue-100 appearance-none" />
                        </div>
                        <!-- Islamophobie -->
                        <div x-data="{ islamophobie: 50 }" class="my-2">
                            <label for="islamophobie" class="font-bold text-gray-700" x-text="`Islamophobie : ` + islamophobie"></label>
                            <input type="range" min="1" name="islamophobia" max="100" x-model="islamophobie" :value="islamophobia"
                            class="w-full h-2 bg-blue-100 appearance-none" />
                        </div>
                        <!-- Antisemtisime -->
                        <div x-data="{ antisemitisme: 50 }" class="my-2">
                            <label for="antisemitisme" class="font-bold text-gray-700" x-text="`Antisémitisme : ` + antisemitisme"></label>
                            <input type="range" min="1" name="antisemitism" max="100" x-model="antisemitisme" :value="antisemitism"
                            class="w-full h-2 bg-blue-100 appearance-none" />
                        </div>

                        <!-- Save -->
                        <div class="flex justify-end mt-4">
                            <x-primary-button>
                                {{ __('Enregistrer') }}
                            </x-primary-button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
