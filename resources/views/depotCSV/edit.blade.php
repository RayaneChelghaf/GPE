<x-app-layout>

    <div class="flex justify-center items-center mt-3">
        <div class="w-full sm:max-w-lg">
            <p class="text-center text-2xl pt-6 pb-2">Modifier le compte rendu</p>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 mt-3">
                    <form method="POST" action="{{ route('demandes.update', $demande) }}">
                        @csrf
                        @method('PUT')
                        <div>
                            <!-- Nom -->
                            <x-input-label class="mt-2" for="name" :value="__('Nom du compte rendu')" />
                            <div class="input-group">
                                <x-text-input id="name" class="block mt-1 w-full form-control" type="text" name="name" :value="$demande->name" required autofocus/>
                            </div>

                            <!-- Description -->
                            <x-input-label for="description" :value="__('Description')" />
                            <div class="input-group">
                                <x-text-area id="description" class="block mt-1 w-full form-control" name="description" :value="$demande->description" required autofocus placeholder="Entrez une description..." rows="3">
                                    {{ old('description') }}
                                </x-text-area>
                            </div>
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />

                            <!-- Biais -->
                            <x-input-error :messages="$errors->get('biais')" class="mt-2" />
                            <x-input-label class="mt-2" for="biais" :value="__('Biais')" />
                            <div class="input-group">
                                <x-text-input id="biais" class="block mt-1 w-full form-control" type="text" name="biais" :value="$demande->biais" required autofocus/>
                            </div>
                            <x-input-error :messages="$errors->get('biais')" class="mt-2" />

                            <!-- Visibilité -->
                            <x-input-label for="visibility" :value="__('Rendre public')" />
                            <x-radio name="visibility" value="yes" id="yesRadio" :checked="$demande->visibility === 1" />
                            <label for="yesRadio">Oui</label>
                            <x-radio name="visibility" value="no" id="noRadio" :checked="$demande->visibility === 0" />
                            <label for="noRadio">Non</label>
                            <x-input-error :messages="$errors->get('visibility')" class="mt-2" />


                            <div class="flex justify-end mt-4">
                                <x-primary-button>
                                    Modifier
                                </x-primary-button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>