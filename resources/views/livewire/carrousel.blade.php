<div class=" w-full bg-gray-900 xl:py-4 relative">
    <div class="relative flex justify-between">

        <div class="w-full xl:flex items-end justify-center text-white px-4 bg-cover w-1/2 border-l-8 border-gray-900"
            style="background-image: url('varios/banner.jpg')">
            <h1 class="uppercase xl:text-3xl text-center mt-8 xl:mt-1 py-4 text-gray-900 mb-2 px-4 font-bold bg-pink-50 rounded-xl">Domina las tecnologías, capacítate y aprende.</h1>
        </div>

        <div class="w-full px-4 hidden xl:flex">
            <hr>
            <div class=" flex items-center w-full justify-center ">
                <!-- Contenido de la página -->
                <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg my-20">
                    <div class="flex justify-center md:justify-end -mt-16">
                        <img class="w-20 h-20 object-cover rounded-full border-2 border-indigo-500"
                            src="/frases_fotos/{{ $frase->foto }}">
                    </div>
                    <div>
                        <h2 class="text-gray-800 text-2xl font-bold uppercase">Para recordar...</h2>
                        <p class="mt-2 text-gray-600">{{ $frase->frase }}</p>
                    </div>
                    <div class="flex justify-end mt-4">
                        <a href="#" class="text-xl font-medium text-indigo-500">{{ $frase->autor }}</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- <img class=" h-96 w-lg " src="varios/banner.jpg" alt=""> --}}
    </div>
    <hr>
            <div class=" flex xl:hidden items-center w-full justify-center ">
                <!-- Contenido de la página -->
                <div class="max-w-md py-2 px-8 bg-white shadow-lg rounded-lg mt-16 mb-4 mx-2 ">
                    <div class="flex justify-center md:justify-end -mt-16">
                        <img class="w-20 h-20 object-cover rounded-full border-2 border-indigo-500"
                            src="/frases_fotos/{{ $frase->foto }}">
                    </div>
                    <div>
                        <h2 class="text-gray-800 text-lg font-bold uppercase">Para recordar...</h2>
                        <p class="mt-2 text-gray-600">{{ $frase->frase }}</p>
                    </div>
                    <div class="flex justify-end mt-4">
                        <a href="#" class="text-lg font-medium text-indigo-500">{{ $frase->autor }}</a>
                    </div>
                </div>
            </div>
</div>
