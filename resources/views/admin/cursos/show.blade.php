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
        <div class="flex shadow-inner ">
            <div class="w-1/3 shadow-inner hidden xl:flex justify-center items-center h-full py-1">
                <div>
                    <h1 class="text-xl mb-1 mt-4 uppercase font-bold text-center">Detalles del curso</h1>
                    @livewire('coursecard', ['curso' => $curso], key($curso->Id))
                </div>
            </div>
            <div class="w-full xl:w-2/3 flex shadow-md items-center xl:py-16 mb-16 h-full">
                @livewire('video-card',
                ['slug'=>$slug, "cursos"=>$curso], key($curso->Id))
            </div>
        </div>
    </div>
        
    @if (session('agregado'))
        <div class="container fixed bottom-1 right-1 z-20 w-max .slide-left" id="alertbox">
            <div class="container bg-green-100 flex items-center text-gray-900 font-bold px-4 py-3 relative mx-4"
                role="alert">
                <p class="text-lg">{{ session('agregado') }}</p>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3 closealertbutton cursor-pointer">
                    <span class="fas fa-times text-blue-700"></span>
                </span>
            </div>
        </div>
    @endif
    @if (session('eliminado'))
        <div class="container fixed bottom-1 right-1 z-20 w-max .slide-left agregado" id="alertbox">
            <div class="container bg-red-100 flex items-center text-gray-900 font-bold px-4 py-3 relative mx-4"
                role="alert">
                <p class="text-lg">{{ session('eliminado') }}</p>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3 closealertbutton cursor-pointer">
                    <span class="fas fa-times text-blue-700"></span>
                </span>
            </div>
        </div>
    @endif
    @livewire('carrousel', ["frase"=>$frase])
    @slot('js')
        <script>
            $(".closealertbutton").click(function(e) {
                $(this).parent().parent().hide(500)

            })
            setTimeout(() => {
                $('.closealertbutton').each(function(e) {
                    $(this).parent().parent().hide(500)
                })
            }, 3200);

        </script>
    @endslot
    @slot('css')

    @endslot
</x-app-layout>
