<div>
    <div>
        <x-jet-button wire:click="toggleModal"
            class="h-16 w-16 rounded-full text-xl p-1 text-center flex justify-center bg-blue-900 fixed bottom-2 right-2">
            +</x-jet-button>
    </div>

    <x-jet-dialog-modal wire:model="open" class="mt-8">
        @slot('title')
            <h1 class="uppercase font-bold text-center mb-2">AÑADIR CURSO</h1>
            <hr>
        @endslot

        @slot('content')
            <div class="flex ">
                <div class="w-1/6 m-2">
                    <x-jet-label for="codigo">Código</x-jet-label>
                    <x-jet-input class="w-full" type='text' name="codigo" id="codigo" wire:model="codigo">
                    </x-jet-input>
                    <x-jet-input-error for="codigo"></x-jet-input-error>
                </div>
                <div class="w-5/6 m-2">
                    <x-jet-label for="nombre">Nombre del curso</x-jet-label>
                    <x-jet-input class="w-full" type='text' name="nombre" id="nombre" wire:model="nombre">
                    </x-jet-input>
                    <x-jet-input-error for="nombre"></x-jet-input-error>
                </div>
            </div>
            <div class="flex ">
                <div class="w-full m-2">
                    <x-jet-label for="descripcion">Descripción del curso</x-jet-label>
                    <textarea
                        class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full"
                        name="descripcion" id="descripcion" wire:model="descripcion"></textarea>
                    <x-jet-input-error for="descripcion"></x-jet-input-error>
                </div>
            </div>
            <div class="flex">
                <div class="w-5/12">
                    <div class=" m-2">
                        <x-jet-label for="none">Foto del curso</x-jet-label>
                        <div class="flex">
                            <div class="w-4/6">
                                <label for="fotos"
                                    class=" w-full bg-gray-900 hover:bg-blue-dark text-white font-bold py-2 px-4 w-full inline-flex justify-center items-center">
                                    <svg fill="#FFF" height="18" viewBox="0 0 24 24" width="18"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 0h24v24H0z" fill="none" />
                                        <path d="M9 16h6v-6h4l-7-7-7 7h4zm-4 2h14v2H5z" />
                                    </svg>
                                    <span class=" text-center cursor-pointer" id="label_input">Seleccionar...</span>

                                </label>
                                <input class="cursor-pointer absolute block opacity-0 pin-r pin-t" type="file" name="fotos"
                                    id="fotos" accept="image/*" wire:model="fotos">
                                <x-jet-input-error for="fotos"></x-jet-input-error>

                            </div>
                            <div class="w-2/6 ml-1 flex items-center pb-2">
                                <div class="rounded-full ml-3">
                                    <img src="varios/icon.png" alt="" id="imagen" class="w-8 h-8">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-3/12 m-2 ">
                    <x-jet-label for="categoria_id">Categoría</x-jet-label>
                    <select
                        class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full"
                        name="categoria_id" id="categoria_id" wire:model="categoria_id">
                        <option value=""></option>
                        @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                        @endforeach
                    </select>
                    <x-jet-input-error for="categoria_id"></x-jet-input-error>

                </div>
                <div class="w-3/12 m-2 ">
                    <x-jet-label for="subcategoria_id">Subcategoría</x-jet-label>
                    <select
                        class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full"
                        name="subcategoria_id" id="subcategoria_id" wire:model="subcategoria_id">
                        <option value=""></option>
                        @foreach ($subcategorias as $subcategoria)
                            <option value="{{ $subcategoria->id }}">{{ $subcategoria->nombre }}</option>
                        @endforeach
                    </select>
                    <x-jet-input-error for="subcategoria_id"></x-jet-input-error>

                </div>
            </div>
            </form>
        @endslot
        @slot('footer')
            <x-jet-button type="button" wire:click="cursos_store" class="bg-blue-900 text-blue-900 hover:bg-gray-700">
                Guardar
            </x-jet-button>
        @endslot
    </x-jet-dialog-modal>
    @slot('css')
        <style>
            .jetstream-modal {
                display: flex;
                align-items: center;
            }

        </style>
    @endslot
    @slot('js')
        <script>
            window.addEventListener('load', function() {
                let foto_iput = document.getElementById('fotos');
                foto_iput.addEventListener('change', function(event) {
                    console.log(event)
                    let file = event.target.files[0];
                    var reader = new FileReader();
                    reader.onload = (event) => {
                        document.getElementById('label_input').innerText = file.name;
                        document.getElementById('imagen').setAttribute('src', event.target.result)
                    }
                    reader.readAsDataURL(file);
                })
            })

        </script>
    @endslot
</div>
