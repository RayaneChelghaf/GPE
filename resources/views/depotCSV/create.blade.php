<x-app-layout>

    <div class="flex justify-center items-center">
        <div class="w-full sm:max-w-lg">
            <p class="text-center text-2xl pt-6 pb-2">Nouvelle demande</p>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200 mt-3">

                <form method="POST" action="{{ route('demandes.store') }}">
                    @csrf
                    <div>
                        <!-- Nom -->
                        <x-input-label for="name" :value="__('Nom de la demande')" />
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

                        <!-- Biais -->
                        <x-input-label for="biais" :value="__('biais')" />
                        <div class="input-group">
                            <x-text-input id="biais" class="block mt-1 w-full form-control" type="text" name="biais" :value="old('biais')" required autofocus/>
                        </div>
                        <x-input-error :messages="$errors->get('biais')" class="mt-2" />

                        <!-- Visibilité -->
                        <x-input-label for="visibility" :value="__('Rendre public')" />
                        <x-radio name="visibility" value="yes" id="yesRadio" />
                        <label for="yesRadio">Oui</label>
                        <x-radio name="visibility" value="no" id="noRadio" />
                        <label for="noRadio">Non</label>
                        <x-input-error :messages="$errors->get('visibility')" class="mt-2" />

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
