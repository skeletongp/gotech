<x-app-layout>
    @stack('modals')
    @slot('title')
        Cursos
    @endslot
    @livewire('carrousel', ['cursos'=>$cursos2, 'frase'=>$frase])
   <div class=" lg:grid grid-flow-row grid-cols-{{$cursos->count()<4 ?$cursos->count(): '4' }}    gap-2">
    @foreach ($cursos as $curso)
        @livewire('coursecard', ['curso' => $curso], key($curso->Id))
    @endforeach
    @admin
    @livewire('form-add-curso')
   
    @endadmin
    

   </div>
</x-app-layout>