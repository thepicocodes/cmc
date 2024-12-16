<?php

/**
 *
 * Template Name: Products Page
 *
 * @package CMC
 */
get_header();
?>



<div class="w-full max-w-screen-xl mx-auto px-5">

    <h2 class="text-h5 md:text-h2 mt-10 text-green-10 font-medium">Nuestros productos</h2>
    <img src="<?php echo get_template_directory_uri(); ?>/images/product-img02.png" alt="products img"
        class="block w-full max-h-[500px] mt-10">

    <!-- Products -->
    <section class="mt-[76px]">
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

        <div class="mt-16 grid md:grid-cols-2 lg:grid-cols-3 gap-x-5 gap-y-6 font-lato">
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