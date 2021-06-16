<x-app-layout>

    @stack('modals')
    @slot('title')
        {{ $curso->Nombre }}
    @endslot
    @slot('header')
        Bienvenido al curso {{ $curso->Nombre }}
    @endslot
    </div>
    <div class="inline">
        <div class="mt-2 mb-4">
            {{ $videos->links() }}
        </div>
        <div class="flex shadow-inner ">
            <div class="w-1/3 shadow-inner hidden xl:flex justify-center items-center h-full py-1">
                <div>
                    <h1 class="text-xl mb-1 mt-4 uppercase font-bold text-center">Detalles del curso</h1>
                    @livewire('coursecard', ['curso' => $curso], key($curso->Id))
                </div>
            </div>
            <div class="w-full xl:w-2/3 flex shadow-md items-center xl:py-16 mb-16 h-full">
                @foreach ($videos as $video)
                    @livewire('video-card',
                    ['clave'=>$video->Clave, "nombre"=>$video->Titulo], key($vide->Id))
                @endforeach
            </div>

        </div>
    </div>

    @livewire('carrousel', ["frase"=>$frase])


</x-app-layout>
