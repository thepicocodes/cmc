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
            <div class="slide-in rounded-2xl md:absolute flex flex-col md:top-[34px] md:right-16 md:w-[616px]  px-10 py-[50px] bg-white">
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
    <section class="mt-32">
        <h2 class="text-h5 md:text-h2 text-blue-modular font-medium">Nuestros productos</h2>
        <div class="w-full mt-2 flex flex-col md:flex-row items-center gap-2.5">
            <div class="relative w-full">
                <form action="/" method="GET" class="relative flex flex-col md:flex-row items-center gap-2.5">
                    <div class="relative w-full">
                        <input type="text" name="line" value="cmc" hidden>
                        <input type="search" 
                                name="s" 
                                class="rounded-lg border w-full h-[52px] border-gray-1000 p-[14px] text-base"
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
                </form>
            </div>
        </div>

        <div class="mt-6 grid md:grid-cols-2 lg:grid-cols-3 gap-x-5 gap-y-6 font-lato">
            <?php
            $args = array(
                'post_type' => 'producto',
                'posts_per_page' => 6,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'producto_category',
                        'field'    => 'slug',
                        'terms'    => 'cmc'
                    ),
                )
            );

            $products = new WP_Query($args);

            if ($products->have_posts()) :
                while ($products->have_posts()) : $products->the_post();
            ?>
                <div class="rounded-br-2xl rounded-bl-2xl bg-white drop-shadow-xl">
                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"
                            class="block w-full object-cover h-[300px] rounded-tl-xl rounded-tr-xl">
                    <?php else : ?>
                        <div class="block w-full object-cover h-[300px] bg-neutral-200 rounded-tl-xl rounded-tr-xl"></div>
                    <?php endif; ?>

                    <div class="py-5 px-5 pb-10">
                        <span class="text-green-modular font-bold"><?php the_title(); ?></span>

                        <p class="mt-2 text-m text-black-primmary leading-[30px] min-h-20">
                            <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                        </p>

                        <a href="<?php the_permalink(); ?>"
                            class="mt-2 flex flex-row items-center justify-between font-bold text-green-10">
                            Conoce más
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="fill-green-10 w-4 h-4">
                                <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                            </svg>
                        </a>
                    </div>
                </div>
            <?php 
                endwhile;
                wp_reset_postdata();
            else:
            ?>
                <div class="col-span-full text-center text-gray-QG py-40">
                    No existen productos.
                </div>
            <?php
            endif;
            ?>
        </div>
        <div class="flex justify-center">
            <a href="/?s=&line=cmc" class="rounded-lg mt-20 p-4 text-2xl text-gray-QG bg-yellow-QG">Ver todos</a>
        </div>
    </section>
</div>




<?php
get_footer();
