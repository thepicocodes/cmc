<?php

/**
 *
 * Template Name: Contacto Page
 *
 * @package CMC
 */
get_header();
?>



<div class="w-full max-w-screen-xl mx-auto px-5">

    <img src="<?php echo get_template_directory_uri(); ?>/images/product-img02.png" alt="products img"
        class="block w-full max-h-[500px] mt-10">
    <div class="relative rounded-2xl w-full max-w-[800px] mt-[-40px] mx-auto py-[30px] px-10 bg-white z-auto">
        <p class="text-[#020026] font-normal font-lato">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Proin
            id auctor ante, sit amet aliquam dui. Vivamus
            vel odio quis est condimentum malesuada et a nibh.</p>

        <div id="contacto" class="">
            <form action="get" class="mt-10">

                <div class="flex w-full flex-col gap-10 md:flex-row">
                    <div class="flex w-full flex-col">
                        <label for="Name" class="text-base text-gray-QG font-bold">Nombre:</label>
                        <input type="text" placeholder="" name="Nombre"
                            class="rounded-lg border-[#E0E0E0] border-2 w-full mt-2 h-[60px] p-[18px] outline-none placeholder:text-[#A0A0A0]">
                    </div>
                    <div class="flex w-full flex-col">
                        <label for="Name" class="text-base text-gray-QG font-bold">Apellido:</label>
                        <input type="text" placeholder="" name="Nombre"
                            class="rounded-lg border-[#E0E0E0] border-2 w-full mt-2 h-[60px] p-[18px] outline-none">
                    </div>
                </div>

                <div class="mt-10">
                    <label for="" class="text-base text-gray-QG font-bold">Correo electrónico:</label>
                    <input type="email" placeholder=""
                        class="rounded-lg border-[#E0E0E0] border-2 w-full mt-2 h-[60px] p-[18px] outline-none">
                </div>

                <div class="mt-10">
                    <label for="" class="text-base text-gray-QG font-bold">Mensaje:</label>
                    <input type="email" placeholder=""
                        class="rounded-lg border-[#E0E0E0] border-2 w-full mt-2 h-[80px] p-[18px] outline-none">
                </div>
                <button class="rounded-lg w-max mt-[30px] p-[18px] text-xl text-gray-QG font-medium bg-yellow-QG">
                    Enviar
                </button>
            </form>
        </div>
    </div>

    <div class="w-full max-w-[800px] mt-10 mx-auto">
        <div class="h-[400px]">
            <div class="grid md:grid-cols-[400px_1fr]">
                <iframe width="400px" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                    src="https://maps.google.com/maps?width=400px25&amp;height=400&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                        href="https://www.gps.ie/">gps vehicle tracker</a></iframe>
                <div
                    class="rounded-2xl py-[37px] px-[53px] flex flex-col justify-between bg-yellow-20 font-lato text-gray-QG">
                    <div>
                        <h5 class="text-m font-extrabold">Nagua</h5>
                        <span> [Dirección aquí]</span>
                    </div>

                    <a href=""
                        class="mt-2 flex flex-row items-center justify-between self-end gap-2.5 font-bold text-green-qg">Mirar
                        ubicación
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-[18px] fill-green-qg"
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

<?php
get_footer();
