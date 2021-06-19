<div>
    <div>
        <x-jet-button wire:click="toggleModal"
            class="h-16 w-16 rounded-full text-xl p-1 text-center flex justify-center bg-light shadow fixed bottom-2 right-2 z-20">
            +</x-jet-button>
    </div>
    <div>
        <x-jet-dialog-modal wire:model="open">
            @slot('title')
                <h1 class="font-bold text-lg uppercase text-center">Añadir nuevo video</h1>
            @endslot
            @slot('content')
                <div class="flex justify-between items-end ">
                    <div class="w-4/5 w-full mx-2">
                        <x-jet-label for="clave">URL del video</x-jet-label>
                        <x-jet-input type="text" name="clave" wire:model.defer="clave" class="w-full"
                            placeholder="Ingrese la url del video de Youtube"></x-jet-input>
                    </div>
                    <div class="w-1/5 mx-2 mb-1">
                    <x-jet-button wire:click="addVideo">
                        Agregar
                    </x-jet-button>
                </div>
                </div>
                <x-jet-input-error for="clave" class="m-2"></x-jet-input-error>
                
            @endslot
            @slot('footer')

            @endslot
        </x-jet-dialog-modal>
    </div>
    <style>
        .jetstream-modal {
            display: flex;
            align-items: center;
        }

    </style>
</div>
