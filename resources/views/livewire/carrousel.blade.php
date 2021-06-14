<div>
    {{-- Scripts y Estilos --}}
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


    <!-- Carrousel -->
    <div class="swiper-container h-64 bg-blue-900 shadow-lg max-w-6xl mb-4">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide w-full">

                {{-- Sección de texto --}}
                <div class="flex">
                    <div class="w-2/5 flex h-64 justify-center items-center" style="background-image: url('https://images.unsplash.com/photo-1522441815192-d9f04eb0615c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=564&q=80')">
                       <div>
                            {{-- Título --}}
                        <div class=" border-b-4 border-blue-300 py-2 flex justify-center items-center w-max mx-auto mb-3">
                            <h3 class="font-bold uppercase text-gray-900 text-xl">Aprende MS Word </h3>
                        </div>
                        {{-- Descripción --}}
                        <div class="  pb-2 px-3">
                            <p class="text-gray-700 text-center text-lg font-bold"> Aprende a crear documentos, darles formato,
                                diagramar páginas, aplicar las normas APA, automatizar su contenido y muchas cosas más.
                            </p>
                        </div>
                       </div>
                    </div>

                    {{-- Sección de imagen --}}
                    <div class="w-3/5 bg-red-200 h-64 ">

                    </div>
                </div>

            </div>
            <div class="swiper-slide">
                <img src="https://source.unsplash.com/weekly?mountain">
            </div>
        </div>
    </div>

    {{-- Iniciliazando --}}
    <script>
        var mySwiper = new Swiper('.swiper-container');

    </script>
</div>
