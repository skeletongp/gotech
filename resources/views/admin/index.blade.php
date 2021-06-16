<x-app-layout>

    @slot('title')
        Portada
    @endslot
    <div class="inline">
        @livewire('carrousel', ['cursos'=>$cursos, "frase"=>$frase])
        {{Youtube::getLocalizedVideoInfo('V5-6nX53NCk', 'pl')->snippet->title}}
    <div class="w-full flex justify-center py-3">
        @livewire('video-card')
    </div>
            
    </div>

</x-app-layout>
