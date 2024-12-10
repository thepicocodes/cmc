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

    <!-- Products -->
    <section class="mt-24">
        <h2 class="text-h5 md:text-h2 text-green-10 font-medium">Nuestros productos</h2>
        <img src="<?php echo get_template_directory_uri(); ?>/images/product-img02.png" alt="products img"
            class="block w-full max-h-[500px] mt-10">

        <div class="w-full mt-20 flex flex-col md:flex-row items-center">
            <div class="relative w-full">
                <input type="search" class="rounded-lg border w-full border-gray-1000 py-[18px] px-[14px] text-s"
                    placeholder="¿Qué andas buscando?">
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-2/4 right-[17px] -translate-y-2/4 w-4 h-4"
                    viewBox="0 0 512 512">
                    <path
                        d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                </svg>
            </div>
            <ul class="flex flex-row items-center mt-2 md:mt-0 text-[#828282]">
                <li>
                    <a href="" class="w-max flex flex-row items-center gap-2.5 p-4">Filtro
                        1
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-[#828282]" viewBox="0 0 512 512">
                            <path
                                d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="" class="w-max flex flex-row items-center gap-2.5 p-4">Filtro
                        2
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-[#828282]" viewBox="0 0 512 512">
                            <path
                                d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="" class="w-max flex flex-row items-center gap-2.5 p-4">Filtro
                        3
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-[#828282]" viewBox="0 0 512 512">
                            <path
                                d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" />
                        </svg>
                    </a>
                </li>
            </ul>
        </div>

        <div class="mt-12 grid md:grid-cols-2 lg:grid-cols-3 gap-x-5 gap-y-6 font-lato">
            <div class="">
                <img src="<?php echo get_template_directory_uri(); ?>/images/product-img.png" alt="hero image"
                    class="block w-full max-w-[1080px] max-h-[460px] mx-auto">
                <div class="p-5">
                    <span class="text-green-modular font-bold">Nombre del producto</span>
                    <p class="mt-2 text-m text-black-primmary leading-[30px]">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id auctor ante, sit amet
                        aliquam dui.
                    </p>
                    <a href="" class="mt-2 flex flex-row items-center justify-between font-bold text-[#3C6E71]">Conoce
                        más
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="fill-[#3C6E71] w-4 h-4">
                            <path
                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="">
                <img src="<?php echo get_template_directory_uri(); ?>/images/product-img.png" alt="hero image"
                    class="block w-full max-w-[1080px] max-h-[460px] mx-auto">
                <div class="p-5">
                    <span class="text-green-modular font-bold">Nombre del producto</span>
                    <p class="mt-2 text-m text-black-primmary leading-[30px]">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id auctor ante, sit amet
                        aliquam dui.
                    </p>
                    <a href="" class="mt-2 flex flex-row items-center justify-between font-bold text-[#3C6E71]">Conoce
                        más
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="fill-[#3C6E71] w-4 h-4">
                            <path
                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="">
                <img src="<?php echo get_template_directory_uri(); ?>/images/product-img.png" alt="hero image"
                    class="block w-full max-w-[1080px] max-h-[460px] mx-auto">
                <div class="p-5">
                    <span class="text-green-modular font-bold">Nombre del producto</span>
                    <p class="mt-2 text-m text-black-primmary leading-[30px]">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id auctor ante, sit amet
                        aliquam dui.
                    </p>
                    <a href="" class="mt-2 flex flex-row items-center justify-between font-bold text-[#3C6E71]">Conoce
                        más
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="fill-[#3C6E71] w-4 h-4">
                            <path
                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="">
                <img src="<?php echo get_template_directory_uri(); ?>/images/product-img.png" alt="hero image"
                    class="block w-full max-w-[1080px] max-h-[460px] mx-auto">
                <div class="p-5">
                    <span class="text-green-modular font-bold">Nombre del producto</span>
                    <p class="mt-2 text-m text-black-primmary leading-[30px]">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id auctor ante, sit amet
                        aliquam dui.
                    </p>
                    <a href="" class="mt-2 flex flex-row items-center justify-between font-bold text-[#3C6E71]">Conoce
                        más
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="fill-[#3C6E71] w-4 h-4">
                            <path
                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="">
                <img src="<?php echo get_template_directory_uri(); ?>/images/product-img.png" alt="hero image"
                    class="block w-full max-w-[1080px] max-h-[460px] mx-auto">
                <div class="p-5">
                    <span class="text-green-modular font-bold">Nombre del producto</span>
                    <p class="mt-2 text-m text-black-primmary leading-[30px]">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id auctor ante, sit amet
                        aliquam dui.
                    </p>
                    <a href="" class="mt-2 flex flex-row items-center justify-between font-bold text-[#3C6E71]">Conoce
                        más
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="fill-[#3C6E71] w-4 h-4">
                            <path
                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="">
                <img src="<?php echo get_template_directory_uri(); ?>/images/product-img.png" alt="hero image"
                    class="block w-full max-w-[1080px] max-h-[460px] mx-auto">
                <div class="p-5">
                    <span class="text-green-modular font-bold">Nombre del producto</span>
                    <p class="mt-2 text-m text-black-primmary leading-[30px]">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id auctor ante, sit amet
                        aliquam dui.
                    </p>
                    <a href="" class="mt-2 flex flex-row items-center justify-between font-bold text-[#3C6E71]">Conoce
                        más
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="fill-[#3C6E71] w-4 h-4">
                            <path
                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="flex items-center justify-center space-x-2 mt-14">
            <button class="px-3 py-1 text-gray-600 rounded">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 fill-black-primmary"
                    viewBox="0 0 320 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path
                        d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z" />
                </svg>
            </button>

            <button class="px-3 py-1 border-2 border-green-modular text-green-modular rounded font-bold">
                1
            </button>

            <button class="px-3 py-1 border border-green-modular text-green-modular rounded">
                2
            </button>

            <span class="px-3 py-1 text-green-modular">...</span>

            <button class="px-3 py-1 border border-green-modular text-green-modular rounded">
                9
            </button>
            <button class="px-3 py-1 border border-green-modular text-green-modular rounded">
                10
            </button>

            <button class="px-3 py-1 text-green-modular rounded">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 fill-black-primmary"
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
