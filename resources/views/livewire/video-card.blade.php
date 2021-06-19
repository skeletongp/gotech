<div class="w-full xl:mx-24">
    <!-- component -->
    <div class="mt-2 mb-4 flex items-center justify-between">
        <div class="w-6/12 mr-8">
            <x-jet-input class="w-full" type="search" wire:model="search"
                placeholder="Ingrese un título y presione ENTER para buscar"></x-jet-input>
        </div>
        <div class="w-2/4">
            {{ $videos->links() }}
        </div>

    </div>

    <div>
        @if ($videos->count())
            <div class="h-100 w-full items-center justify-between bg-teal-lightest font-sans">
                <div class="bg-white rounded shadow p-6 m-1 mx-0 w-full ">

                    <div class="">
                        
                        @foreach ($videos as $video)
                     
                            <div class="flex mb-4 items-center">
                                <p class="w-3/4 text-gray-900 font-bold text-lg flex items-center">
                                    <span 
                                    class="fas fa-angle-double-right mr-2 
                                    {{App\Models\User_Video::where('user_id','=',Auth::user()->id)
                                    ->where('video_id','=',$video->idVideo)->get()
                                    ->count()>0? 'text-green-500': 'text-red-500'}}">
                                    </span> {{ $video->Titulo }}</p>
                                <span
                                    class=" text-center w-1/4 p-2 ml-2 border-2 rounded text-green font-bold border-red hover:text-white hover:bg-red">
                                    @livewire('view-video', ['video' => $video], key($video->Clave))
                                </span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @else
            <div class="flex h-full items-center justify-center w-full">
                <h1 class=" my-8 font-bold uppercase text-center xl:my-48 xl:text-xl select-none">NO SE HA ENCONTRADO
                    CONTENIDO PARA LA BÚSQUEDA</h1>
            </div>
        @endif
    </div>
    @slot('css')
        <style>
            .video-wrapper {
                position: relative;
                padding-bottom: 56.25%;
                /* 16:9 */
                padding-top: 25px;
            }

            .video-wrapper iframe {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }

        </style>
    @endslot
</div>
