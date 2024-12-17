<?php
/**
 * CMC functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package CMC
 */

if ( ! defined( 'CMC_VERSION' ) ) {
	/*
	 * Set the theme’s version number.
	 *
	 * This is used primarily for cache busting. If you use `npm run bundle`
	 * to create your production build, the value below will be replaced in the
	 * generated zip file with a timestamp, converted to base 36.
	 */
	define( 'CMC_VERSION', '0.1.0' );
}

if ( ! defined( 'CMC_TYPOGRAPHY_CLASSES' ) ) {
	/*
	 * Set Tailwind Typography classes for the front end, block editor and
	 * classic editor using the constant below.
	 *
	 * For the front end, these classes are added by the `cmc_content_class`
	 * function. You will see that function used everywhere an `entry-content`
	 * or `page-content` class has been added to a wrapper element.
	 *
	 * For the block editor, these classes are converted to a JavaScript array
	 * and then used by the `./javascript/block-editor.js` file, which adds
	 * them to the appropriate elements in the block editor (and adds them
	 * again when they’re removed.)
	 *
	 * For the classic editor (and anything using TinyMCE, like Advanced Custom
	 * Fields), these classes are added to TinyMCE’s body class when it
	 * initializes.
	 */
	define(
		'CMC_TYPOGRAPHY_CLASSES',
		'prose prose-neutral max-w-none prose-a:text-primary'
	);
}

if ( ! function_exists( 'cmc_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function cmc_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on CMC, use a find and replace
		 * to change 'cmc' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'cmc', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => __( 'Primary', 'cmc' ),
				'menu-2' => __( 'Footer Menu', 'cmc' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );
		add_editor_style( 'style-editor-extra.css' );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Remove support for block templates.
		remove_theme_support( 'block-templates' );
	}
endif;
add_action( 'after_setup_theme', 'cmc_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cmc_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Footer', 'cmc' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your footer.', 'cmc' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'cmc_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function cmc_scripts() {
	wp_enqueue_style( 'cmc-style', get_stylesheet_uri(), array(), CMC_VERSION );
	wp_enqueue_script( 'cmc-script', get_template_directory_uri() . '/js/script.min.js', array(), CMC_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cmc_scripts' );

/**
 * Enqueue the block editor script.
 */
function cmc_enqueue_block_editor_script() {
	if ( is_admin() ) {
		wp_enqueue_script(
			'cmc-editor',
			get_template_directory_uri() . '/js/block-editor.min.js',
			array(
				'wp-blocks',
				'wp-edit-post',
			),
			CMC_VERSION,
			true
		);
		wp_add_inline_script( 'cmc-editor', "tailwindTypographyClasses = '" . esc_attr( CMC_TYPOGRAPHY_CLASSES ) . "'.split(' ');", 'before' );
	}
}
add_action( 'enqueue_block_assets', 'cmc_enqueue_block_editor_script' );

/**
 * Add the Tailwind Typography classes to TinyMCE.
 *
 * @param array $settings TinyMCE settings.
 * @return array
 */
function cmc_tinymce_add_class( $settings ) {
	$settings['body_class'] = CMC_TYPOGRAPHY_CLASSES;
	return $settings;
}
add_filter( 'tiny_mce_before_init', 'cmc_tinymce_add_class' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

function register_producto_post_type() {
	$args = array(
		'public' => true,
		'label'  => 'Productos',
		'rewrite' => array(
			'slug' => 'productos/%producto_category%',
			'with_front' => false
		),
		'taxonomies' => array('producto_category'),
	);
	register_post_type('producto', $args);

	// Register the custom taxonomy with radio button selection
	$taxonomy_args = array(
		'hierarchical' => true,
		'labels' => array(
			'name' => 'Linea de Productos',
			'singular_name' => 'Linea de Producto',
		),
		'show_ui' => true,
		'show_admin_column' => false,
		'query_var' => true,
		'rewrite' => array('slug' => 'producto-category'),
		'meta_box_cb' => 'producto_category_meta_box', // Custom meta box callback
	);
	register_taxonomy('producto_category', 'producto', $taxonomy_args);
}
add_action('init', 'register_producto_post_type');

// Custom meta box to force radio button selection
function producto_category_meta_box($post, $box) {
	$defaults = array('taxonomy' => 'producto_category');
	if (!isset($box['args']) || !is_array($box['args']))
		$args = array();
	else
		$args = $box['args'];
	extract(wp_parse_args($args, $defaults), EXTR_SKIP);
	$tax = get_taxonomy($taxonomy);
	
	$selected = wp_get_object_terms($post->ID, $taxonomy, array('fields' => 'ids'));
	// Set default value if empty
	$selected_id = !empty($selected) ? (int)$selected[0] : 0;
	
	$terms = get_terms($taxonomy, array('hide_empty' => false));
	?>
	<div class="categorydiv">
		<p class="description">* Campo requerido</p>
		<ul>
			<?php foreach ($terms as $term) : ?>
				<li>
					<input type="radio" name="tax_input[<?php echo $taxonomy ?>][]" 
						   id="<?php echo $term->slug ?>" 
						   value="<?php echo $term->term_id ?>"
						   <?php checked($selected_id, $term->term_id) ?>
						   required>
					<label for="<?php echo $term->slug ?>"><?php echo $term->name ?></label>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
	<?php
}

// Ensure only one category is saved
function save_producto_category($post_id) {
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) 
		return;
	
	if (!isset($_POST['tax_input']['producto_category']))
		return;
		
	$term_id = is_array($_POST['tax_input']['producto_category']) ? 
			   reset($_POST['tax_input']['producto_category']) : 
			   $_POST['tax_input']['producto_category'];
			   
	wp_set_object_terms($post_id, (int)$term_id, 'producto_category');
}
add_action('save_post_producto', 'save_producto_category');

// Keep the permalink structure
function producto_permalink_structure($post_link, $post) {
	if (is_object($post) && $post->post_type == 'producto') {
		$terms = wp_get_object_terms($post->ID, 'producto_category');
		if ($terms) {
			$post_link = str_replace('%producto_category%', $terms[0]->slug, $post_link);
		} else {
			$post_link = str_replace('%producto_category%', 'uncategorized', $post_link);
		}
	}
	return $post_link;
}
add_filter('post_type_link', 'producto_permalink_structure', 10, 2);

// Add validation when saving the post
function validate_producto_category($post_id) {
	// Skip autosave
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) 
		return $post_id;
	
	// Check if this is a producto post
	if ('producto' !== get_post_type($post_id))
		return $post_id;
		
	// Skip if this is a revision
	if (wp_is_post_revision($post_id))
		return $post_id;

	// Skip if we're not trying to publish
	if (!isset($_POST['post_status']) || $_POST['post_status'] !== 'publish')
		return $post_id;
		
	// Verify if a category was selected
	if (!isset($_POST['tax_input']['producto_category']) || empty($_POST['tax_input']['producto_category'])) {
		// Don't save as publish
		remove_action('save_post', 'validate_producto_category');
		
		wp_update_post(array(
			'ID' => $post_id,
			'post_status' => 'draft'
		));
		
		add_action('save_post', 'validate_producto_category');
		
		// Add an error message
		add_filter('redirect_post_location', function($location) {
			return add_query_arg('message', 'category-required', $location);
		});
	}
}
add_action('save_post', 'validate_producto_category');

// Display admin notice for missing category
function producto_admin_notices() {
	if (isset($_GET['message']) && $_GET['message'] == 'category-required') {
		?>
		<div class="error">
			<p><?php _e('Se requiere seleccionar una categoría para el producto.', 'cmc'); ?></p>
		</div>
		<?php
	}
}
add_action('admin_notices', 'producto_admin_notices');
