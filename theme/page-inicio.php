<?php

/**
 *
 * Template Name: Home Page
 *
 * @package CMC
 */
get_header();
?>

<div class="px-5">
    <div class="w-full max-w-screen-xl mx-auto">
        <section class="mt-10">
            <img src="<?php echo get_template_directory_uri(); ?>/images/hero-img.png" alt="hero image"
                class="block w-full max-h-[460px]">
            <div class="w-full max-w-[840px] mx-auto mt-24">
                <h3 class="text-h5 text-black-primmary">Sobre nosotros</h3>
                <p class="mt-6 text-xl text-gray-QG">
                    Vorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a,
                    mattis
                    tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum
                    tellus
                    elit sed risus. Maecenas eget Ibbundance velit, sit amet feugiat lectus. Class aptent taciti
                    sociosqu ad
                    litora torquent per conubia nostra, per inceptos himenaeos. Praesent auctor purus luctus enim
                    egestas,
                    ac scelerisque ante pulvinar.
                </p>
                <a href="#" class="rounded-lg inline-block mt-6 p-4 text-xl text-gray-QG bg-yellow-QG">Contáctanos</a>
            </div>
        </section>

        <img src="<?php echo get_template_directory_uri(); ?>/images/about-img.png" alt="hero image"
            class="block w-full max-w-[1080px] max-h-[460px] mx-auto mt-[150px]">


        <!-- Products -->
        <section class="mt-24">
            <h2 class="text-h5 md:text-h2 text-blue-modular font-medium">Nuestros productos</h2>
            <div class="w-full mt-2 flex flex-col md:flex-row items-center gap-2.5">
                <div class="relative w-full">
                    <input type="search" class="rounded-lg border w-full h-[52px] border-gray-1000 p-[14px] text-s"
                        placeholder="¿Buscar entre mis productos?">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="absolute top-2/4 right-[17px] -translate-y-2/4 w-4 h-4" viewBox="0 0 512 512">
                        <path
                            d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                    </svg>
                </div>
                <ul class="flex flex-row items-center mt-2 md:mt-0 gap-2.5 text-[#828282]">
                    <li class="rounded-lg bg-[#f8f8f8]">
                        <button class="w-max flex flex-row items-center gap-2.5 p-4">Filtro
                            1
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-[#828282]"
                                viewBox="0 0 512 512">
                                <path
                                    d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" />
                            </svg>
                        </button>
                    </li>
                    <li class="rounded-lg bg-[#f8f8f8]">
                        <button class="w-max flex flex-row items-center gap-2.5 p-4">Filtro
                            2
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-[#828282]"
                                viewBox="0 0 512 512">
                                <path
                                    d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" />
                            </svg>
                        </button>
                    </li>
                    <li class="rounded-lg bg-[#f8f8f8]">
                        <button class="w-max flex flex-row items-center gap-2.5 p-4">Filtro
                            3
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-[#828282]"
                                viewBox="0 0 512 512">
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
                    <div class="p-5">
                        <span class="text-green-modular font-bold">Nombre del producto</span>
                        <p class="mt-2 text-m text-black-primmary leading-[30px]">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id auctor ante, sit amet
                            aliquam dui.
                        </p>
                        <a href=""
                            class="mt-2 flex flex-row items-center justify-between font-bold text-green-10">Conoce
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
                    <div class="p-5">
                        <span class="text-green-modular font-bold">Nombre del producto</span>
                        <p class="mt-2 text-m text-black-primmary leading-[30px]">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id auctor ante, sit amet
                            aliquam dui.
                        </p>
                        <a href=""
                            class="mt-2 flex flex-row items-center justify-between font-bold text-green-10">Conoce
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
                    <div class="p-5">
                        <span class="text-green-modular font-bold">Nombre del producto</span>
                        <p class="mt-2 text-m text-black-primmary leading-[30px]">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id auctor ante, sit amet
                            aliquam dui.
                        </p>
                        <a href=""
                            class="mt-2 flex flex-row items-center justify-between font-bold text-green-10">Conoce
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
                    <div class="p-5">
                        <span class="text-green-modular font-bold">Nombre del producto</span>
                        <p class="mt-2 text-m text-black-primmary leading-[30px]">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id auctor ante, sit amet
                            aliquam dui.
                        </p>
                        <a href=""
                            class="mt-2 flex flex-row items-center justify-between font-bold text-green-10">Conoce
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
                    <div class="p-5">
                        <span class="text-green-modular font-bold">Nombre del producto</span>
                        <p class="mt-2 text-m text-black-primmary leading-[30px]">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id auctor ante, sit amet
                            aliquam dui.
                        </p>
                        <a href=""
                            class="mt-2 flex flex-row items-center justify-between font-bold text-green-10">Conoce
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
                    <div class="p-5">
                        <span class="text-green-modular font-bold">Nombre del producto</span>
                        <p class="mt-2 text-m text-black-primmary leading-[30px]">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id auctor ante, sit amet
                            aliquam dui.
                        </p>
                        <a href=""
                            class="mt-2 flex flex-row items-center justify-between font-bold text-green-10">Conoce
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
                <button class="rounded-lg mt-20 p-4 text-2xl text-gray-QG bg-yellow-QG">Ver todos</button>
            </div>
        </section>


        <!-- More products -->
        <section class="mt-24">
            <h2 class="text-h5 md:text-h2 font-medium text-center text-blue-modular">Otras líneas de productos</h2>
            <p class="mt-2 text-gray-QG text-m text-center font-medium">Vorem ipsum dolor sit amet, consectetur
                adipiscing
                elit
            </p>
            <div class="relative mt-6">
                <img src="<?php echo get_template_directory_uri(); ?>/images/bgimg.png" alt="products img"
                    class="block w-full max-w-[1020px] max-h-[500px]">
                <div
                    class="rounded-2xl md:absolute flex flex-col md:top-[34px] md:right-16 md:w-[616px] h-[401px] px-10 py-[50px] bg-white">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/m-logo.png" alt="Mlogo"
                        class="block w-max">
                    <h2 class="mt-3 text-h5 text-black-primmary font-bold">Caribbean Modular Concept</h2>
                    <p class="mt-7 leading-[30px] font-lato text-gray-QG">
                        ut interdum tellus elit sed risus. Maecenas eget Ibbundance velit, sit amet feugiat lectus. ut
                        interdum tellus elit sed risus. Maecenas eget Ibbundance velit, sit amet feugiat lectus.
                    </p>
                    <a href="" class="mt-2 flex flex-row items-center self-end font-bold text-green-10">Ver
                        productos
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="fill-green-10 w-4 h-4">
                            <path
                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                        </svg>
                    </a>
                </div>
            </div>
        </section>

        <!-- Testimonials -->
        <section class="mt-24">
            <h2 class="text-h5 md:text-h2 font-medium text-center text-blue-modular">Testimonios</h2>
            <p class="mt-2 text-gray-QG text-m text-center font-medium">Vorem ipsum dolor sit amet, consectetur
                adipiscing
                elit
            </p>

            <div class="mt-5 !grid grid-cols-1 md:grid-cols-[314px_914px]">
                <div class="rounded-lg p-6 flex flex-col items-center justify-center text-center bg-yellow-20">
                    <span class="text-4xl font-bold text-[#602900]">550+</span>
                    <p class="text-brown-700 mt-2">Clientes satisfechos</p>
                </div>

                <div id="testimonial-swiper" class="swiper testimonial-swiper !ml-2.5">
                    <div class="swiper-wrapper !w-full !max-w-[914px] !h-[300px] !gap-2.5">
                        <div
                            class="swiper-slide rounded-lg p-6 !flex !flex-col !justify-center text-center text-[#602900] bg-yellow-20">
                            <p class="text-brown-800 text-xl font-medium mb-4">
                                "Have full control of your budget and avoid waste"
                            </p>
                            <p class="text-brown-600 font-semibold">Nombre del cliente</p>
                        </div>
                        <div
                            class="swiper-slide rounded-lg p-6 !flex !flex-col !justify-center text-center text-[#602900] bg-yellow-20">
                            <p class="text-brown-800 text-xl font-medium mb-4">
                                "Have full control of your budget and avoid waste"
                            </p>
                            <p class="text-brown-600 font-semibold">Nombre del cliente</p>
                        </div>
                    </div>

                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <section id="contacto"
            class="mt-[136PX] flex bg-[url('images/contact-img.png')] bg-cover bg-center bg-no-repeat md:justify-end">
            <div class="w-full max-w-[682px] py-14 md:px-10">
                <div class="rounded-2xl p-10 text-gray-QG font-lato backdrop-blur-xl bg-gray-100/75">
                    <h2 class="md:text-h2 text-4xl font-medium">Contáctanos</h2>
                    <form action="get" class="mt-10">
                        <div class="flex w-full flex-col gap-10 md:flex-row">
                            <div class="flex w-full flex-col">
                                <label for="Name" class="text-body font-bold">Nombre:</label>
                                <input type="text" name="Nombre"
                                    class="border-2 mt-2 h-[55px] w-full rounded border-[#EAEAEA] p-5 outline-none placeholder:text-[#A0A0A0]">
                            </div>
                            <div class="flex w-full flex-col">
                                <label for="Name" class="text-body font-bold">Apellido:</label>
                                <input type="text" name="Nombre"
                                    class="border-2 mt-2 h-[55px] w-full rounded border-[#EAEAEA] p-5 outline-none">
                            </div>
                        </div>
                        <div class="mt-10">
                            <label for="" class="text-body font-bold">Correo electrónico:</label>
                            <input type="email"
                                class="border-2 mt-2 h-[55px] w-full rounded border-[#EAEAEA] p-5 outline-none">
                        </div>
                        <div class="mt-10 flex w-full flex-row items-center gap-10">
                            <div class="flex w-full flex-col">
                                <label for="Name" class="text-body font-bold text-[#020026]">Mensaje:</label>
                                <div class="flex flex-col gap-x-10 md:flex-row md:items-center">
                                    <input type="text" name="Message"
                                        class="border-1 mt-2.5 h-[80px] w-full rounded border-[#EAEAEA] p-5 outline-none">
                                </div>
                                <button
                                    class="rounded-lg w-fit h-[60px] mt-10 gap-x-2 p-[18px] inline-block flex-row items-center text-xl text-gray-QG font-medium bg-yellow-QG">
                                    Enviar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>

<?php
get_footer();
