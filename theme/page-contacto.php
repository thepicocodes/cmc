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
    <div
        class="relative rounded-2xl w-full max-w-[800px] mt-[-40px] mx-auto py-[30px] px-10 bg-white z-auto drop-shadow-xl">
        <p class="text-[#020026] font-normal font-lato">
            ¿Tienes un proyecto en mente o necesitas más información? Completa el formulario y nuestro equipo se pondrá
            en contacto contigo lo antes posible. ¡Estamos aquí para ayudarte!
        </p>

        <div id="contacto" class="">
            <?php echo do_shortcode('[wpforms id="22"]'); ?>
            <!-- <form action="get" class="mt-10">
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
                        class="rounded-lg border-[#E0E0E0] border-2 w-full mt-2 h-[80px] p-[18px] outline-none bg-[#f8f8f8]">
                </div>
                <button class="rounded-lg w-max mt-[30px] p-[18px] text-xl text-gray-QG font-medium bg-yellow-QG">
                    Enviar
                </button>
            </form> -->
        </div>
    </div>

    <div class="w-full max-w-[800px] mt-10 mb-[200px] mx-auto">
        <div class="grid md:grid-cols-[400px_1fr] gap-2.5 md:gap-0">
            <iframe
                class="rounded-2xl md:rounded-tr-none md:rounded-br-none md:rounded-tl-2xl md:rounded-bl-2xl w-full md:w-[400px] h-[400px]"
                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d279.74324047257994!2d-69.85365248754147!3d19.37948092665586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eae51d49d4e74e7%3A0x5157064323442a9b!2sVentanas%20Caribe%C3%B1as!5e0!3m2!1ses-419!2sdo!4v1734483609787!5m2!1ses-419!2sdo"><a
                    href="https://www.gps.ie/">gps vehicle tracker</a></iframe>
            <div
                class="rounded-2xl md:rounded-bl-none md:rounded-tl-none md:rounded-tr-2xl md:rounded-br-2xl py-[37px] px-[53px] flex flex-col justify-between bg-yellow-20 font-lato text-gray-QG">
                <div>
                    <h5 class="text-m font-extrabold">Nagua</h5>
                    <span>Avenida María Trinidad Sánchez esq. Domingo Gelabert, Nagua, República Dominicana.</span>
                </div>

                <a href="https://maps.app.goo.gl/TaoXVHqTZY8WzDej7"
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
        <div class="mt-2.5 grid md:grid-cols-[400px_1fr] gap-2.5 md:gap-0">
            <iframe
                class="rounded-2xl md:rounded-tr-none md:rounded-br-none md:rounded-tl-2xl md:rounded-bl-2xl w-full md:w-[400px] h-[400px]"
                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2247.3280057865272!2d-68.45328397836977!3d18.68462133122977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sdo!4v1734483324706!5m2!1ses-419!2sdo"><a
                    href="https://www.gps.ie/">gps vehicle tracker</a></iframe>
            <div
                class="rounded-2xl md:rounded-bl-none md:rounded-tl-none md:rounded-tr-2xl md:rounded-br-2xl py-[37px] px-[53px] flex flex-col justify-between bg-yellow-20 font-lato text-gray-QG">
                <div>
                    <h5 class="text-m font-extrabold">Punta Cana</h5>
                    <span>Calle autovía del Este, Marginal detrás de Cepem. Punta Cana - Bávaro, República
                        Dominicana.</span>
                </div>

                <a href="https://maps.app.goo.gl/AzbEjNBM2P5ftP887"
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

<?php
get_footer();
