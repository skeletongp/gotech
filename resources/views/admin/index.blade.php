<x-app-layout>

    @slot('title')
        Portada
    @endslot
    <div class="inline">
        @livewire('carrousel', ['cursos'=>$cursos, "frase"=>$frase])
        <div class=" w-full flex flex-col-reverse xl:flex-row justify-center items-center py-3">
            <div>
                @livewire('coursecard', ['curso' => $curso1])
            </div>
            <div
                class="bg-white p-2 w-full xl:w-1/2 sm:p-4 h-full rounded-2xl shadow-lg flex flex-row justify-center sm:flex-row gap-5  items-center wide-wrapper">
                <div class="h-full rounded-xl bg-gray-100 bg-center bg-cover mb-8 xl:mb-2 flex items-center w-full max-w-6xl"
                    style="height:360px !important">
                    <iframe src="https://www.youtube.com/embed/BhTon_iCqPQ?autoplay=1" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen class="block w-full h-full"></iframe>
                </div>
            </div>
           
        </div>

    </div>

</x-app-layout>
