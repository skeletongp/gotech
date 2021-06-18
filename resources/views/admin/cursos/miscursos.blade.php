<x-app-layout>
    @stack('modals')
    @slot('title')
        Cursos
    @endslot
    @livewire('carrousel', ['cursos'=>$cursos2, 'frase'=>$frase])
    <div class=" lg:grid grid-flow-row grid-cols-{{ $cursos->count() < 4 ? $cursos->count() : '4' }}    gap-2">
        @if ($cursos->count())
            @foreach ($cursos as $curso)
                @livewire('coursecard', ['curso' => $curso], key($curso->Id))
            @endforeach
        @else
            <div class="h-92 w-full flex justify-content items-center ">
                <h1 class="xl:text-4xl font-bold uppercase text-center my-32 w-full">Aún no tienes cursos agregados</h1>
            </div>
        @endif
        @admin
        @livewire('form-add-curso')
        @endadmin


    </div>
</x-app-layout>
