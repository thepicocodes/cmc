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
                    Quality Guard es líder en la fabricación de ventanas de seguridad con reja integrada, ofreciendo protección confiable y duradera para hogares y empresas. Con una planta de producción avanzada en República Dominicana, combinamos experiencia, innovación y calidad excepcional para garantizar la tranquilidad de nuestros clientes.
                    <br><br>
                    Operamos bajo nuestra marca registrada ERIMAR INDUSTRIAL, dedicada al diseño de troqueles y fabricación de maquinarias, mientras que nuestra línea de cocinas modulares está representada por Caribbean Modular Concepts. En Quality Guard, protegemos lo que más importa con soluciones diseñadas para superar los estándares de la industria.
                </p>
                <a href="#" class="rounded-lg inline-block mt-6 p-4 text-xl text-gray-QG bg-yellow-QG">Contáctanos</a>
            </div>
        </section>

        <img src="<?php echo get_template_directory_uri(); ?>/images/about-img.png" alt="hero image"
            class="block w-full max-w-[1080px] max-h-[460px] mx-auto mt-[150px]">


        <!-- Products -->
        <section class="mt-32">
            <h2 class="text-h5 md:text-h2 text-blue-modular font-medium">Nuestros productos</h2>
            <div class="w-full mt-2 flex flex-col md:flex-row items-center gap-2.5">
                <div class="relative w-full">
                    <form action="/productos" method="GET" class="relative flex flex-col md:flex-row items-center gap-2.5">
                        <div class="relative w-full">
                            <input type="search" 
                                   name="s" 
                                   class="rounded-lg border w-full h-[52px] border-gray-1000 p-[14px] text-s"
                                   placeholder="¿Buscar entre mis productos?">
                            <button type="submit" class="absolute top-2/4 right-[17px] -translate-y-2/4 bg-white">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-4 h-4" 
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                                </svg>
                            </button>
                        </div>
                        
                        <ul class="flex flex-row items-center mt-2 md:mt-0 gap-2.5 text-[#828282]">
                            <li class="rounded-lg bg-[#f8f8f8]">
                                <select name="line" class="w-max flex flex-row items-center gap-2.5 p-4 bg-transparent cursor-pointer">
                                    <option value="">Línea de producto</option>
                                    <option value="qg">Quality Guard</option>
                                    <option value="cmc">CMC</option>
                                </select>
                            </li>
                            <li class="rounded-lg bg-[#f8f8f8]">
                                <select name="category" class="w-max flex flex-row items-center gap-2.5 p-4 bg-transparent cursor-pointer">
                                    <option value="">Categoría</option>
                                    <option value="cat1">Categoría 1</option>
                                    <option value="cat2">Categoría 2</option>
                                    <option value="cat3">Categoría 3</option>
                                </select>
                            </li>
                        </ul>
                    </form>
                </div>
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
                    <div class="py-5 px-5 pb-10">
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
                    <div class="py-5 px-5 pb-10">
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
                    <div class="py-5 px-5 pb-10">
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
                    <div class="py-5 px-5 pb-10">
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
                    <div class="py-5 px-5 pb-10">
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
        <section class="mt-32">
            <h2 class="text-h5 md:text-h2 font-medium text-center text-blue-modular">Otras líneas de productos</h2>
            <p class="mt-2 text-gray-QG text-m text-center font-medium">
                Soluciones integrales para cada espacio de tu hogar.
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
                        Diseñamos muebles innovadores y duraderos con materiales exclusivos como el HDF, ideales para cocinas, baños y closets. Con sede en Bávaro-Punta Cana y tienda en Nagua, ofrecemos calidad y personalización en toda República Dominicana y el Caribe.
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
        <section class="mt-32">
            <h2 class="text-h5 md:text-h2 font-medium text-center text-blue-modular">Testimonios</h2>
            <p class="mt-2 text-gray-QG text-m text-center font-medium">
                La confianza de nuestros clientes, nuestro mayor respaldo.
            </p>

            <div class="mt-5 !grid grid-cols-1 xl:grid-cols-[314px_914px] gap-2.5">
                <div
                    class="rounded-lg border-4 border-[#0000000A] p-6 flex flex-col items-center justify-center text-center bg-yellow-20">
                    <span class="text-4xl font-bold text-[#602900]">550+</span>
                    <p class="text-brown-700 mt-2">Clientes satisfechos</p>
                </div>

                <div id="testimonial-swiper"
                    class="swiper testimonial-swiper rounded-lg w-full">
                    <div class="swiper-wrapper !h-[300px] !gap-2.5">
                        <div class="swiper-slide rounded-lg p-6 !flex !flex-col !justify-center text-center text-[#602900] bg-yellow-20 border-4 border-[#0000000A]">
                            <p class="mb-4 text-[#602900] text-2xl font-medium">
                                "Have full control of your budget and avoid waste"
                            </p>
                            <p class="text-[#602900] text-m font-lato font-bold">Nombre del cliente</p>
                        </div>
                        <div class="swiper-slide rounded-lg p-6 !flex !flex-col !justify-center text-center text-[#602900] bg-yellow-20 border-4 border-[#0000000A]">
                            <p class="mb-4 text-[#602900] text-xl font-medium">
                                "Have full control of your budget and avoid waste"
                            </p>
                            <p class="text-[#602900] text-m font-lato font-bold">Nombre del cliente</p>
                        </div>
                    </div>

                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <section id="contacto"
            class="mt-[136PX] px-5  flex bg-[url('images/contact-img.png')] bg-cover bg-center bg-no-repeat md:justify-end">
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
                                        class="border mt-2.5 h-[80px] w-full rounded border-[#C4C4C4] p-5 outline-none">
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
