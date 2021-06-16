<x-app-layout>

    @slot('title')
        Portada
    @endslot
    <div class="inline">
        @livewire('carrousel', ['cursos'=>$cursos, "frase"=>$frase])
        <div class="w-full flex justify-center py-3">
            @livewire('video-card',
            ['clave'=>'V5-6nX53NCk', "nombre"=>'Bienvenido(a)'])
        </div>
       
    </div>

</x-app-layout>
