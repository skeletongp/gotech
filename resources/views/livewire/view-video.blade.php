<div>
    <a role='button' wire:click="toggleModal({{ $video['idVideo'] }})"> <span class="fas fa-eye"></span> Ver contenido</a>
    @if ($video)
        <x-jet-dialog-modal wire:model="open" class="mt-8">
            @slot('title')
                <h1>{{ $video['Titulo'] }}</h1>
            @endslot
            @slot('content')
                <div
                    class="bg-white p-2 w-full sm:p-4 h-full rounded-2xl shadow-lg flex flex-row justify-center sm:flex-row gap-5  items-center wide-wrapper">
                    <div class="h-full rounded-xl bg-gray-100 bg-center bg-cover mb-8 xl:mb-2 flex items-center w-full max-w-6xl"
                        style="height:360px !important">
                        <iframe src="https://www.youtube.com/embed/{{ $video['Clave'] }}" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen class="block w-full h-full"></iframe>
                    </div>
                </div>
                <div class=" xl:flex flex-col w-full  gap-2 p-1 w-1/3 items-center justify-end overflow-ellipsis ">
                    <div class="flex justify-center items-center h-full">
                        <div>

                            <p class="text-gray-900 text-lg text-center mt-1 sm:text-base line-clamp-3 max-w-sm">
                                {{ substr($video['Descripcion'], 0, 200) . '...' }}
                            </p>
                        </div>
                    </div>
                    
                </div>
            @endslot
            @slot('footer')
            <div class="flex gap-4 mt-auto mt-4">
                <span wire:click="like({{ $isLiked }},{{ $video->idVideo }})"
                    class='{{ $isLiked ? 'cursor-default	text-green-400' : 'cursor-pointer text-blue-400' }} flex items-center gap-1 sm:text-lg border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-50 transition-colors focus:bg-gray-100 focus:outline-none focus-visible:border-gray-500 cursor-default'>
                    <span class="fas fa-thumbs-up mr-2"></span>
                    <span>{{ $likes }}</span>
                </span>
                <span
                    class='{{ $isLiked ? 'cursor-default	text-green-400' : 'cursor-pointer text-red-200' }} flex items-center gap-1 sm:text-lg border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-50 transition-colors focus:bg-gray-100 focus:outline-none focus-visible:border-gray-500'>
                    <span class="fas fa-comment-dots text-blue-300 mr-2"></span>
                    <span>0</span>
                </span>
                <a role="button"
                    title="{{ App\Models\User_Video::first()->user_video($video['Clave'])->count()
                            ? 'Marcar como NO visto'
                              : 'Marcar como visto' }}"
                    wire:click="visto('{{ $video['Clave'] }}', {{ $video['idVideo'] }})"
                    class='flex items-center gap-1 sm:text-lg border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-50 transition-colors focus:bg-gray-100 focus:outline-none focus-visible:border-gray-500'>
                    <span
                        class="fas fa-eye {{ App\Models\User_Video::first()->user_video($video['Clave'])->count()
                            ? 'text-green-300'
                            : 'text-red-300' }} mr-2"
                        wire:loading.class="hidden" wire:target="visto"></span>
                    <span wire:loading.class="hidden"
                        wire:target="visto">{{ App\Models\User_Video::first()->vistaCant($video['Clave']) }}</span>
                    <span wire:loading wire:target="visto">Wait...</span>
                </a>
            </div>
            @endslot
        </x-jet-dialog-modal>
    @endif
    <style>
        .jetstream-modal {
            display: flex;
            align-items: center;
        }

        .transition-all.bg-white {
            max-width: 100vw;
            width: 40vw;
        }

        @media screen and (max-width: 600px) {
            .transition-all.bg-white {
                max-width: 100vw;
                width: 90vw;
            }

        }

    </style>
</div>
