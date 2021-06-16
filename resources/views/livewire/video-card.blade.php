<div class="w-full xl:mx-24">
    <!-- component -->
    <h1 class="uppercase text-xl text-center mb-4 font-bold">{{ $nombre }}</h1>

    <div
        class="bg-white p-2 w-full sm:p-4 h-full rounded-2xl shadow-lg flex flex-col justify-center sm:flex-row gap-5 select-none vide-wrapper">
        <div class="sm:h-full rounded-xl bg-gray-100 bg-center bg-cover mb-8 xl:mb-2 flex items-center w-full"
            style="height:360px !important">
            <iframe src="https://www.youtube.com/embed/{{ $clave }}" title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen class="block w-full h-full"></iframe>
        </div>
        <div class="hidden xl:flex flex-col  gap-2 p-1 w-1/3 items-center justify-center">
            <div class="flex justify-center items-center h-full">
                <div>
                    <h1 class="text-lg sm:text-xl font-bold uppercase text-center text-gray-900">
                        {{ $titulo }}
                    </h1>
                    <p class="text-gray-900 text-lg text-center mt-4    sm:text-base line-clamp-3">
                        {{ $descripcion }}
                    </p>
                </div>
            </div>
            <div class="flex gap-4 mt-auto">
                <span
                    class=' flex items-center gap-1 sm:text-lg border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-50 transition-colors focus:bg-gray-100 focus:outline-none focus-visible:border-gray-500 cursor-default'>
                    <span class="fas fa-thumbs-up text-blue-400 mr-2"></span>
                    <span>{{ $likes }}</span>
                </span>
                <span
                    class='cursor-default	 flex items-center gap-1 sm:text-lg border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-50 transition-colors focus:bg-gray-100 focus:outline-none focus-visible:border-gray-500'>
                    <span class="fas fa-comment-dots text-blue-300 mr-2"></span>
                    <span>{{ $comentarios ? $comentarios : 0 }}</span>
                </span>
                <button title="Marcar como visto" wire:click="{{ $visto->count() ? 'no_visto' : 'visto' }}"
                    class='flex items-center gap-1 sm:text-lg border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-50 transition-colors focus:bg-gray-100 focus:outline-none focus-visible:border-gray-500'>
                    <span class="fas fa-eye {{ $visto->count() ? 'text-green-300' : 'text-red-300' }} mr-2"></span>
                    <span>{{ $vistaCant }}</span>
                </button>
            </div>
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
