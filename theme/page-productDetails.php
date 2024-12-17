<?php

/**
 *
 * Template Name: Product details Page
 *
 * @package CMC
 */
get_header();
?>


<div class="w-full max-w-screen-xl mx-auto px-5">
    <section class="mt-24">
        <span class="text-green-qg text-base font-bold">Caribbean Modular Concept/</span>
        <h2 class="mt-2 text-h5 md:text-h2 text-black-primmary font-medium">[Nombre del producto]</h2>

        <div class="mt-10 grid grid-cols-1 lg:grid-cols-[760px_1fr] gap-4">
            <img src="<?php echo get_template_directory_uri(); ?>/images/product-img02.png" alt="products img"
                class="block w-full max-w-[1020px] max-h-[500px]">
            <div class="w-full md:max-w-[464px] pt-8 md:px-9 pb-10">
                <p class="text-m font-medium text-blue-modular">Precio desde</p>
                <span class="mt-2 text-h5 md:text-h2 text-gray-QG font-medium">RD$120,000</span>
                <p class="mt-2 text-m font-medium text-blue-modular">Estos precios están sujetos a cotización</p>
                <a href=""
                    class="rounded-lg block w-full mt-4 p-4 font-medium text-2xl text-center text-white bg-green-modular">Cotiza
                    ahora</a>
                <a href=""
                    class="rounded-lg block w-full mt-4 p-4 font-medium text-2xl text-center text-white bg-green-10">¿Tienes
                    dudas?</a>
            </div>
        </div>

        <div class="w-full max-w-[760px]">
            <div class="mt-6">
                <h4 class="text-xl-b text-black-primmary font-bold">Detalle del producto</h4>
                <p class="mt-6 text-gray-QG text-m font-medium">
                    Vorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim,
                    metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus.
                    Maecenas eget Ibbundance velit, sit amet feugiat lectus.
                    <br><br>
                    Class aptent taciti sociosqu ad litora
                    torquent per conubia nostra, per inceptos himenaeos. Praesent auctor purus luctus enim egestas,
                    ac scelerisque ante pulvinar.
                </p>
            </div>

            <div class="mt-14">
                <h4 class="text-xl-b text-black-primmary font-bold">Preguntas frecuentes</h4>

                <div id="accordion-container" class="w-full mt-2.5 flex flex-col gap-2.5">
                    <div data-accordion class="rounded-[10px] py-2.5 px-5 bg-[#F8F8F8]">
                        <button class="w-full flex flex-col gap-2.5">
                            <div class="flex flex-row items-center gap-2.5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-[30px] h-[30px] fill-gray-QG"
                                    viewBox="0 0 640 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path
                                        d="M579.8 267.7c56.5-56.5 56.5-148 0-204.5c-50-50-128.8-56.5-186.3-15.4l-1.6 1.1c-14.4 10.3-17.7 30.3-7.4 44.6s30.3 17.7 44.6 7.4l1.6-1.1c32.1-22.9 76-19.3 103.8 8.6c31.5 31.5 31.5 82.5 0 114L422.3 334.8c-31.5 31.5-82.5 31.5-114 0c-27.9-27.9-31.5-71.8-8.6-103.8l1.1-1.6c10.3-14.4 6.9-34.4-7.4-44.6s-34.4-6.9-44.6 7.4l-1.1 1.6C206.5 251.2 213 330 263 380c56.5 56.5 148 56.5 204.5 0L579.8 267.7zM60.2 244.3c-56.5 56.5-56.5 148 0 204.5c50 50 128.8 56.5 186.3 15.4l1.6-1.1c14.4-10.3 17.7-30.3 7.4-44.6s-30.3-17.7-44.6-7.4l-1.6 1.1c-32.1 22.9-76 19.3-103.8-8.6C74 372 74 321 105.5 289.5L217.7 177.2c31.5-31.5 82.5-31.5 114 0c27.9 27.9 31.5 71.8 8.6 103.9l-1.1 1.6c-10.3 14.4-6.9 34.4 7.4 44.6s34.4 6.9 44.6-7.4l1.1-1.6C433.5 260.8 427 182 377 132c-56.5-56.5-148-56.5-204.5 0L60.2 244.3z" />
                                </svg>
                                <h5 class="text-base font-lato font-bold text-gray-QG">Pregunta frecuente 1</h5>
                            </div>
                        </button>
                        <div class="hidden ml-[40px]" data-content>
                            <p>Respuesta a la pregunta frecuente 1. Aquí va el texto
                                explicativo o cualquier contenido adicional.</p>
                            <a href="" class="mt-2 flex flex-row items-center gap-2.5 font-bold text-green-10">Learn
                                more
                                <svg xmlns="http://www.w3.org/2000/svg" class="fill-green-10 w-4 h-4"
                                    viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path
                                        d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div data-accordion class="rounded-[10px] py-2.5 px-5 bg-[#F8F8F8]">
                        <button class="w-full flex flex-col gap-2.5">
                            <div class="flex flex-row items-center gap-2.5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-[30px] h-[30px] fill-gray-QG"
                                    viewBox="0 0 640 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path
                                        d="M579.8 267.7c56.5-56.5 56.5-148 0-204.5c-50-50-128.8-56.5-186.3-15.4l-1.6 1.1c-14.4 10.3-17.7 30.3-7.4 44.6s30.3 17.7 44.6 7.4l1.6-1.1c32.1-22.9 76-19.3 103.8 8.6c31.5 31.5 31.5 82.5 0 114L422.3 334.8c-31.5 31.5-82.5 31.5-114 0c-27.9-27.9-31.5-71.8-8.6-103.8l1.1-1.6c10.3-14.4 6.9-34.4-7.4-44.6s-34.4-6.9-44.6 7.4l-1.1 1.6C206.5 251.2 213 330 263 380c56.5 56.5 148 56.5 204.5 0L579.8 267.7zM60.2 244.3c-56.5 56.5-56.5 148 0 204.5c50 50 128.8 56.5 186.3 15.4l1.6-1.1c14.4-10.3 17.7-30.3 7.4-44.6s-30.3-17.7-44.6-7.4l-1.6 1.1c-32.1 22.9-76 19.3-103.8-8.6C74 372 74 321 105.5 289.5L217.7 177.2c31.5-31.5 82.5-31.5 114 0c27.9 27.9 31.5 71.8 8.6 103.9l-1.1 1.6c-10.3 14.4-6.9 34.4 7.4 44.6s34.4 6.9 44.6-7.4l1.1-1.6C433.5 260.8 427 182 377 132c-56.5-56.5-148-56.5-204.5 0L60.2 244.3z" />
                                </svg>
                                <h5 class="text-base font-lato font-bold text-gray-QG">Pregunta frecuente 1</h5>
                            </div>
                        </button>
                        <div class="hidden ml-[40px]" data-content>
                            <p>Respuesta a la pregunta frecuente 1. Aquí va el texto
                                explicativo o cualquier contenido adicional.</p>
                            <a href="" class="mt-2 flex flex-row items-center gap-2.5 font-bold text-green-10">Learn
                                more
                                <svg xmlns="http://www.w3.org/2000/svg" class="fill-green-10 w-4 h-4"
                                    viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path
                                        d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-32">
        <h2 class="text-h5 text-green-10 font-bold">Productos relacionados</h2>

        <div class="mt-10 grid md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 gap-x-5 gap-y-6 font-lato">
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
        <div class="flex justify-center">
            <button class="rounded-lg mt-20 p-4 text-2xl text-white bg-green-modular">Ver todos</button>
        </div>
    </section>
</div>

<?php
get_footer();
