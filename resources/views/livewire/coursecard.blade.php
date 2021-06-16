<div class="flex mt-4 lg:mt-1 ">

    <div class="m-auto lg:px-4 py-2 max-w-md ">
        <div class="bg-white shadow-2xl  border-red-400">
            <div class="w-full h-48 border-4 border-green-300 mx-auto py-3 bg-cover relative grid items-start pt-4 justify-center px-3"
                style="background-image: url('varios/darklaptop.jpg')">
                <div>
                    <h2 class="font-bold text-lg text-white uppercase text-center lg:text-2xl ">{{ $curso->Nombre }}
                    </h2>
                    <div
                        class="w-full h-8 shadow-lg rounded-lg ml-auto absolute bottom-1 right-2 flex space-x-1 justify-end items-center text-yellow">
                        <span class="fas fa-star {{ $rating['rate'] > 0 ? 'text-yellow' : 'text-gray-400' }}"></span>
                        <span class="fas fa-star {{ $rating['rate'] > 1 ? 'text-yellow' : 'text-gray-400' }}"></span>
                        <span class="fas fa-star {{ $rating['rate'] > 2 ? 'text-yellow' : 'text-gray-400' }}"></span>
                        <span class="fas fa-star {{ $rating['rate'] > 3 ? 'text-yellow' : 'text-gray-400' }}"></span>
                        <span class="fas fa-star {{ $rating['rate'] > 4 ? 'text-yellow' : 'text-gray-400' }}"></span>
                        <span class="text-white">{{ $rating['total'] . ' votos' }} </span>
                    </div>
                </div>
            </div>
            <div class="px-4 py-2 mt-2 bg-white ">

                <p class="text-md xl:text-xl  text-center text-gray-900 lg:px-2 mr-1 my-3 h-32 flex items-center">
                    {{ $curso->Descripcion }}
                </p>
                <div class="user flex justify-between items-center -ml-3 mt-4 mb-2">
                    <div class="user-logo">
                        <img class="w-10 h-10 sm:w-12 sm:h-12 object-cover rounded-full mx-4 shadow"
                            src="cursos_fotos/{{ $curso->Fotos }}" alt="avatar">
                    </div>
                    {{-- Botón de edición --}}
                    @admin
                    <a role="button"
                        class="bg-red-100 w-8 h-8 rounded-full flex justify-center items-center text-green-700 hover:bg-green-700 hover:text-red-200">
                        <span class="fas fa-pen ">
                        </span>
                    </a>
                    @endadmin
                    <x-jet-button class="px-1 mx-1 bg-gray-900">Detalles</x-jet-button>
                </div>
            </div>
        </div>
    </div>
</div>
