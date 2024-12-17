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
    <section class="mt-32">
        <h2 class="text-h5 md:text-h2 text-blue-modular font-medium">Nuestros productos</h2>
        <div class="w-full mt-2 flex flex-col md:flex-row items-center gap-2.5">
            <div class="relative w-full">
                <form action="/productos" method="GET" class="relative flex flex-col md:flex-row items-center gap-2.5">
                    <div class="relative w-full">
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
                    
                    <ul class="flex flex-row items-center mt-2 md:mt-0 gap-2.5 text-[#828282]">
                        <li class="rounded-lg bg-[#f8f8f8]">
                            <select name="line" class="w-max flex flex-row items-center gap-2.5 p-4 bg-transparent cursor-pointer">
                                <option value="">Línea de producto</option>
                                <option value="qg">Quality Guard</option>
                                <option value="cmc">CMC</option>
                            </select>
                        </li>
                    </ul>
                </form>
            </div>
        </div>

        <div class="mt-6 grid md:grid-cols-2 lg:grid-cols-3 gap-x-5 gap-y-6 font-lato">
            <?php
            // Get current page
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

            // Base query args
            $args = array(
                'post_type' => 'producto',
                'posts_per_page' => 9,
                'paged' => $paged,
            );

            // Add search query if search term exists
            if (isset($_GET['s']) && !empty($_GET['s'])) {
                $args['s'] = sanitize_text_field($_GET['s']);
            }

            // Add taxonomy query if line parameter exists
            if (isset($_GET['line']) && !empty($_GET['line'])) {
                $term = $_GET['line'] === 'qg' ? 'quality-guard' : 'cmc';
                $args['tax_query'] = array(
                    array(
                        'taxonomy' => 'producto_category',
                        'field'    => 'slug',
                        'terms'    => $term
                    ),
                );
            }

            $products = new WP_Query($args);

            if ($products->have_posts()) :
                while ($products->have_posts()) : $products->the_post();
            ?>
                <a href="<?php the_permalink(); ?>" class="rounded-br-2xl rounded-bl-2xl bg-white drop-shadow-xl">
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

                        <div class="mt-2 flex flex-row items-center justify-between font-bold text-green-10">
                            Conoce más
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="fill-green-10 w-4 h-4">
                                <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                            </svg>
                        </div>
                    </div>
                </a>
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

        <?php if ($products->max_num_pages > 1) : ?>
            <div class="flex items-center justify-center space-x-2 mt-[56px]">
                <?php
                    $big = 999999999;
                    // Get current URL with query parameters
                    $pagenum_link = html_entity_decode(get_pagenum_link($big));
                    // Remove page number from the URL
                    $base = str_replace($big, '%#%', $pagenum_link);
                    
                    echo paginate_links(array(
                        'base' => $base,
                        'format' => '',
                        'current' => max(1, get_query_var('paged')),
                        'total' => $products->max_num_pages,
                        'add_args' => array(
                            's' => get_query_var('s'), // Preserve search query
                            'line' => get_query_var('line') // Preserve line filter
                        ),
                        'prev_text' => '<svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-2 fill-black-primmary" viewBox="0 0 320 512"><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z" /></svg>',
                        'next_text' => '<svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-2 fill-black-primmary" viewBox="0 0 320 512"><path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" /></svg>',
                        'type' => 'list'
                    ));
                ?>
            </div>
        <?php endif; ?>
    </section>
</div>

<?php
get_footer();