<?php

/**
 *
 * Template Name: CMC Page
 *
 * @package CMC
 */
get_header();
?>


<div class="w-full max-w-screen-xl mx-auto px-5">
    <section class="mt-24">
        <div class="relative mt-6">
            <img src="<?php echo get_template_directory_uri(); ?>/images/bgimg.png" alt="products img"
                class="block w-full max-w-[1020px] max-h-[500px]">
            <div
                class="rounded-2xl md:absolute flex flex-col md:top-[34px] md:right-16 md:w-[616px]  px-10 py-[50px] bg-white">
                <img src="<?php echo get_template_directory_uri(); ?>/images/m-logo.png" alt="Mlogo"
                    class="block w-max">
                <h2 class="mt-3 text-h5 text-black-primmary font-bold">Caribbean Modular Concept</h2>
                <p class="mt-7 leading-[30px] font-lato text-gray-QG">
                    Diseñamos muebles innovadores y duraderos con materiales exclusivos como el HDF, ideales para cocinas, baños y closets. Con sede en Bávaro-Punta Cana y tienda en Nagua, ofrecemos calidad y personalización en toda República Dominicana y el Caribe.
                </p>

                <a href="" class="rounded-lg w-max mt-7 p-4 font-bold text-white bg-green-modular">Cotiza con nosotros</a>
            </div>
        </div>

        <div class="w-full max-w-[840px] mx-auto mt-24">
            <h3 class="text-h5 text-black-primmary">Sobre nosotros</h3>

            <p class="mt-6 text-xl text-gray-QG">
                En Caribbean Modular Concept diseñamos y fabricamos soluciones de mobiliario innovadoras y de alta calidad para cocinas, baños, vestidores y closets, adaptándonos a las necesidades específicas de cada cliente. Con presencia en República Dominicana y Puerto Rico, y planes de expansión por todo el Caribe, nos destacamos por ofrecer materiales de alta resistencia, como el HDF con laminados exclusivos, ideales para ambientes con alta humedad. Nuestra fábrica, equipada con maquinaria de última generación, garantiza acabados impecables y un estricto control de calidad que respalda la confianza de nuestros clientes en cada proyecto.
                <br><br>
                Desde nuestra central en Bávaro-Punta Cana y nuestra tienda en Nagua, cubrimos todo el país, brindando atención personalizada y soluciones que transforman espacios en experiencias únicas. Nuestro compromiso con la excelencia y la innovación, respaldado por una trayectoria de crecimiento constante, nos permite ofrecer diseños vanguardistas, acabados dinámicos y la capacidad de personalizar cada detalle. Caribbean Modular Concept no solo crea muebles, crea ambientes que reflejan estilo, funcionalidad y durabilidad.
            </p>

            <a href="#" class="rounded-lg inline-block mt-6 p-4 text-xl text-white bg-green-modular">Contáctanos</a>
        </div>
    </section>

    <!-- Products -->
    <section class="mt-24">
        <h2 class="text-h5 md:text-h2 text-blue-modular font-medium">Nuestros productos</h2>
        <div class="w-full mt-2 flex flex-col md:flex-row items-center gap-2.5">
            <div class="relative w-full">
                <input type="search" class="rounded-lg border w-full h-[52px] border-gray-1000 p-[14px] text-s"
                    placeholder="¿Buscar entre mis productos?">
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-2/4 right-[17px] -translate-y-2/4 w-4 h-4"
                    viewBox="0 0 512 512">
                    <path
                        d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                </svg>
            </div>
            <ul class="flex flex-row items-center mt-2 md:mt-0 gap-2.5 text-[#828282]">
                <li class="rounded-lg bg-[#f8f8f8]">
                    <button class="w-max flex flex-row items-center gap-2.5 p-4">Filtro
                        1
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-[#828282]" viewBox="0 0 512 512">
                            <path
                                d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" />
                        </svg>
                    </button>
                </li>
                <li class="rounded-lg bg-[#f8f8f8]">
                    <button class="w-max flex flex-row items-center gap-2.5 p-4">Filtro
                        2
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-[#828282]" viewBox="0 0 512 512">
                            <path
                                d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" />
                        </svg>
                    </button>
                </li>
                <li class="rounded-lg bg-[#f8f8f8]">
                    <button class="w-max flex flex-row items-center gap-2.5 p-4">Filtro
                        3
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-[#828282]" viewBox="0 0 512 512">
                            <path
                                d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" />
                        </svg>
                    </button>
                </li>
            </ul>
        </div>

        <div class="mt-6 grid md:grid-cols-2 lg:grid-cols-3 gap-x-5 gap-y-6 font-lato">
            <div class="rounded-br-2xl rounded-bl-2xl bg-white drop-shadow-xl">
                <img src="<?php echo get_template_directory_uri(); ?>/images/product-img.png" alt="hero image"
                    class="block w-full max-w-[1080px] max-h-[460px] mx-auto">
                <div class="py-5 px-5 pb-10">
                    <span class="text-green-modular font-bold">Nombre del producto</span>
                    <p class="mt-2 text-m text-black-primmary leading-[30px]">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id auctor ante, sit amet
                        aliquam dui.
                    </p>
                    <a href="" class="mt-2 flex flex-row items-center justify-between font-bold text-green-10">Conoce
                        más
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="fill-green-10 w-4 h-4">
                            <path
                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="rounded-br-2xl rounded-bl-2xl bg-white drop-shadow-xl">
                <img src="<?php echo get_template_directory_uri(); ?>/images/product-img.png" alt="hero image"
                    class="block w-full max-w-[1080px] max-h-[460px] mx-auto">
                <div class="py-5 px-5 pb-10">
                    <span class="text-green-modular font-bold">Nombre del producto</span>
                    <p class="mt-2 text-m text-black-primmary leading-[30px]">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id auctor ante, sit amet
                        aliquam dui.
                    </p>
                    <a href="" class="mt-2 flex flex-row items-center justify-between font-bold text-green-10">Conoce
                        más
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="fill-green-10 w-4 h-4">
                            <path
                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="rounded-br-2xl rounded-bl-2xl bg-white drop-shadow-xl">
                <img src="<?php echo get_template_directory_uri(); ?>/images/product-img.png" alt="hero image"
                    class="block w-full max-w-[1080px] max-h-[460px] mx-auto">
                <div class="py-5 px-5 pb-10">
                    <span class="text-green-modular font-bold">Nombre del producto</span>
                    <p class="mt-2 text-m text-black-primmary leading-[30px]">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id auctor ante, sit amet
                        aliquam dui.
                    </p>
                    <a href="" class="mt-2 flex flex-row items-center justify-between font-bold text-green-10">Conoce
                        más
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="fill-green-10 w-4 h-4">
                            <path
                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="rounded-br-2xl rounded-bl-2xl bg-white drop-shadow-xl">
                <img src="<?php echo get_template_directory_uri(); ?>/images/product-img.png" alt="hero image"
                    class="block w-full max-w-[1080px] max-h-[460px] mx-auto">
                <div class="py-5 px-5 pb-10">
                    <span class="text-green-modular font-bold">Nombre del producto</span>
                    <p class="mt-2 text-m text-black-primmary leading-[30px]">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id auctor ante, sit amet
                        aliquam dui.
                    </p>
                    <a href="" class="mt-2 flex flex-row items-center justify-between font-bold text-green-10">Conoce
                        más
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="fill-green-10 w-4 h-4">
                            <path
                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="rounded-br-2xl rounded-bl-2xl bg-white drop-shadow-xl">
                <img src="<?php echo get_template_directory_uri(); ?>/images/product-img.png" alt="hero image"
                    class="block w-full max-w-[1080px] max-h-[460px] mx-auto">
                <div class="py-5 px-5 pb-10">
                    <span class="text-green-modular font-bold">Nombre del producto</span>
                    <p class="mt-2 text-m text-black-primmary leading-[30px]">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id auctor ante, sit amet
                        aliquam dui.
                    </p>
                    <a href="" class="mt-2 flex flex-row items-center justify-between font-bold text-green-10">Conoce
                        más
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="fill-green-10 w-4 h-4">
                            <path
                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="rounded-br-2xl rounded-bl-2xl bg-white drop-shadow-xl">
                <img src="<?php echo get_template_directory_uri(); ?>/images/product-img.png" alt="hero image"
                    class="block w-full max-w-[1080px] max-h-[460px] mx-auto">
                <div class="py-5 px-5 pb-10">
                    <span class="text-green-modular font-bold">Nombre del producto</span>
                    <p class="mt-2 text-m text-black-primmary leading-[30px]">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id auctor ante, sit amet
                        aliquam dui.
                    </p>
                    <a href="" class="mt-2 flex flex-row items-center justify-between font-bold text-green-10">Conoce
                        más
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="fill-green-10 w-4 h-4">
                            <path
                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="flex items-center justify-center space-x-2 mt-[56px]">
            <button class="rounded w-[36px] h-[36px] text-center px-3 py-1 bg-gray-200 text-gray-600 hover:bg-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-2 fill-black-primmary"
                    viewBox="0 0 320 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path
                        d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z" />
                </svg>
            </button>

            <button
                class="rounded w-[36px] h-[36px] text-center border px-3 py-1 border-green-modular text-green-modular font-bold">
                1
            </button>

            <button
                class="border w-[36px] h-[36px] text-center rounded px-3 py-1 border-gray-300 text-green-modular hover:bg-gray-200">
                2
            </button>

            <span class="rounded border w-[36px] h-[36px] text-center border-gray-300 p-[6px] text-gray-600">...</span>

            <button
                class="rounded border w-[36px] h-[36px] text-center px-3 py-1 border-gray-300 text-green-modular hover:bg-gray-200">
                9
            </button>
            <button
                class="rounded border w-[36px] h-[36px] text-center px-3 py-1 border-gray-300 text-green-modular hover:bg-gray-200">
                10
            </button>

            <button
                class="rounded w-[36px] h-[36px] text-center px-3 py-1 bg-gray-200 text-green-modular hover:bg-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-2 fill-black-primmary"
                    viewBox="0 0 320 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path
                        d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                </svg>
            </button>
        </div>

    </section>

</div>




<?php
get_footer();
