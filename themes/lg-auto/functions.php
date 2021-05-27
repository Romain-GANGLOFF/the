<?php
/**
 * lgauto functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package lgauto
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'lgauto_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function lgauto_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on lgauto, use a find and replace
		 * to change 'lgauto' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'lgauto', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-header' => esc_html__( 'Header', 'lgauto' ),
				'menu-footer' => esc_html__( 'Footer-concession', 'lgauto' ),
				'menu-footer2' => esc_html__( 'Footer-menu', 'lgauto' ),
				'menu-mention' => esc_html__( 'Mentions', 'lgauto' ),
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

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'lgauto_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'lgauto_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lgauto_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'lgauto_content_width', 640 );
}
add_action( 'after_setup_theme', 'lgauto_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lgauto_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'lgauto' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'lgauto' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'lgauto_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function lgauto_styles() { //CSS
	// ADMIN COMPRIS
	wp_enqueue_style( 'lgauto-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'lgauto-style', 'rtl', 'replace' );
	
	if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) { // TOUTES PAGES (HORS ADMIN)
		wp_register_style('lgauto-all', get_template_directory_uri() . '/assets/css/base.css', array(), '1.0', 'all');
		wp_enqueue_style('lgauto-all'); 
		wp_register_script('lgauto-contact', get_template_directory_uri() . '/js/custom/replace-form.js', array('jquery'), '1.0.0'); 
        wp_enqueue_script('lgauto-contact');
        wp_register_style('lg_contact', get_template_directory_uri() . '/assets/css/faq.css', array(), '1.0', 'all');
        wp_enqueue_style('lg_contact');
	}
	if(is_front_page() || is_home() || is_post_type_archive("faq") || is_page(8)){
		wp_register_style('lgauto-home', get_template_directory_uri() . '/assets/css/home.css', array(), '1.0', 'all');
		wp_enqueue_style('lgauto-home');
		wp_register_style('lgauto-swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), '1.0', 'all');
		wp_enqueue_style('lgauto-swiper');
	}
	if(is_page("qui-sommes-nous")){
		wp_register_style('lg-groupe', get_template_directory_uri() . '/assets/css/lg-groupe.css', array(), '1.0', 'all');
		wp_enqueue_style('lg-groupe');
		wp_register_style('lgauto-swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), '1.0', 'all');
		wp_enqueue_style('lgauto-swiper');

	}
	if(is_page("histoire")){
		wp_register_style('lg-groupe', get_template_directory_uri() . '/assets/css/story.css', array(), '1.0', 'all');
		wp_enqueue_style('lg-groupe');
		wp_register_style('lgauto-swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), '1.0', 'all');
		wp_enqueue_style('lgauto-swiper');
        
	}
	if(is_singular("cars")){
		wp_register_style('single-cars', get_template_directory_uri() . '/assets/css/single-cars.css', array(), '1.0', 'all');
		wp_enqueue_style('single-cars');
		wp_register_style('lgauto-swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), '1.0', 'all');
		wp_enqueue_style('lgauto-swiper');
	}
    if(is_page("lg-mercedes-benz")){
		wp_register_style('lgauto-swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), '1.0', 'all');
		wp_enqueue_style('lgauto-swiper');
        wp_register_style('single-cars', get_template_directory_uri() . '/assets/css/single-cars.css', array(), '1.0', 'all');
		wp_enqueue_style('single-cars');
	}
    if(is_singular("concessions")){
		wp_register_style('concessions', get_template_directory_uri() . '/assets/css/concessions.css', array(), '1.0', 'all');
		wp_enqueue_style('concessions');
	}
    if(is_page("vehicule") || is_page("motos")){
        wp_register_style("lgauto-single-occasion", get_template_directory_uri()."/assets/css/occasion-single.css", array(), '1.0', 'all');
        wp_enqueue_style("lgauto-single-occasion");
        wp_register_style('lgauto-swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), '1.0', 'all');
		wp_enqueue_style('lgauto-swiper');
    }
}
add_action( 'wp_enqueue_scripts', 'lgauto_styles' );

function lgauto_scripts() //JS
{
	// ADMIN COMPRIS
	wp_enqueue_script( 'lgauto-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	
	if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) { // TOUTES PAGES (HORS ADMIN)
		wp_register_script('lgauto-theme', get_template_directory_uri() . '/js/custom/theme.js', array('jquery'), '1.0.0'); 
		wp_enqueue_script('lgauto-theme');
	}
	
	if(is_front_page() || is_home() || is_post_type_archive("faq") || is_page(8)){
		wp_register_script('lgauto-swiper-js', get_template_directory_uri() . '/js/swiper/swiper-bundle.min.js', array('jquery'), '1.0.0'); 
		wp_enqueue_script('lgauto-swiper-js');
		wp_register_script('lgauto-actuality', get_template_directory_uri() . '/js/custom/actuality.js', array('jquery'), '1.0.0'); 
		wp_enqueue_script('lgauto-actuality');
		wp_register_script('lgauto-occas', get_template_directory_uri() . '/js/custom/occas.js', array('jquery'), '1.0.0'); 
		wp_enqueue_script('lgauto-occas');
		
	}
	if(is_page("qui-sommes-nous")){
		wp_register_script('lgauto-swiper-js', get_template_directory_uri() . '/js/swiper/swiper-bundle.min.js', array('jquery'), '1.0.0'); 
		wp_enqueue_script('lgauto-swiper-js');
		wp_register_script('lgauto-brands', get_template_directory_uri() . '/js/custom/brands.js', array('jquery'), '1.0.0');
		wp_enqueue_script("lgauto-brands");
	}

	if(is_page("histoire")){
		wp_register_script('lgauto-swiper-js', get_template_directory_uri() . '/js/swiper/swiper-bundle.min.js', array('jquery'), '1.0.0'); 
		wp_enqueue_script('lgauto-swiper-js');
		wp_register_script('lgauto-story', get_template_directory_uri() . '/js/custom/story.js', array('jquery'), '1.0.0');
		wp_enqueue_script("lgauto-story");
	}
	
	if(is_singular("cars")){
		wp_register_script('lgauto-swiper-js', get_template_directory_uri() . '/js/swiper/swiper-bundle.min.js', array('jquery'), '1.0.0'); 
		wp_enqueue_script('lgauto-swiper-js');
		wp_register_script('lgauto-actuality', get_template_directory_uri() . '/js/custom/actuality.js', array('jquery'), '1.0.0'); 
		wp_enqueue_script('lgauto-actuality');
	}
    if(is_page("lg-mercedes-benz")){
		wp_register_script('lgauto-swiper-js', get_template_directory_uri() . '/js/swiper/swiper-bundle.min.js', array('jquery'), '1.0.0'); 
		wp_enqueue_script('lgauto-swiper-js');
		wp_register_script('lgauto-actuality', get_template_directory_uri() . '/js/custom/actuality.js', array('jquery'), '1.0.0'); 
		wp_enqueue_script('lgauto-actuality');
	}
    if(is_page("vehicule") || is_page("motos")){
        wp_register_script('lgauto-swiper-js', get_template_directory_uri() . '/js/swiper/swiper-bundle.min.js', array('jquery'), '1.0.0'); 
		wp_enqueue_script('lgauto-swiper-js');
    }

}
add_action('wp_footer', 'lgauto_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

//******************** */ FONCTION DEBUG *****************//
function debug($val)
{
    $debug = debug_backtrace();
    echo '<em>'.$debug[0]['file'].' : '.$debug[0]['line'].'</em>';
    echo '<pre>';
    var_dump($val);
    echo '</pre>';
}
function dd($val)
{
    debug($val);
    die();
}

/*************************** META BOX *********************************/
function lgauto_meta_boxes()
{
	add_meta_box('meta-box-movie', __('Lien vidéo ', 'lgauto'), 'lgauto_meta_movie', ['page', 'cars']);
	add_meta_box('meta-box-specials', __('Bloc ventes spéciales', 'lgauto'), 'lgauto_meta_special', ['cars']);
}

function lgauto_meta_movie(){
    global $post;

    require __DIR__.'/template-parts/metabox/movie-form.php';
}
function lgauto_meta_special(){
	global $post;
	$options = [
		["name" => "Oui", "value" => 1],
		["name" => "Non", "value" => 0]
	];
	require __DIR__.'/template-parts/metabox/special-form.php';

}
add_action('add_meta_boxes', 'lgauto_meta_boxes');


function lgauto_save_meta_box($post_id)
{
	if (array_key_exists('movie', $_POST)) {
        update_post_meta(
            $post_id,
            'movie',
            html_entity_decode($_POST['movie'])
        );
	}
	if(array_key_exists('special', $_POST)){
		update_post_meta(
			$post_id,
			'special',
			$_POST['special']
		);
	}
}
add_action('save_post', 'lgauto_save_meta_box');

/*************************** POST-TYPE *******************************/
function create_post_type_cars()
{
    register_post_type('cars',
		array(
			'labels' => array(
			'name' => __('Pages Véhicules'),
			'singular_name' => __('Page Véhicule'),
			),
			'supports' => array(
				'title',
				'editor',
				'thumbnail',
			),
			'public' => true,
			'has_archive' => false,
			'show_in_rest' => true, 
			'menu_icon' => 'dashicons-car',
			'menu_position' => 21,
			'rewrite' => array('slug' => 'vehicule','with_front' => false),
		)
    );
}
add_action('init', 'create_post_type_cars');

function create_post_type_concessions()
{
    register_post_type('concessions',
        array(
        'labels' => array(
          'name' => __('Page Concessions'),
          'singular_name' => __('Concession'),
        ),
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
        ),
        'public' => true,
		'has_archive' => true,
		'show_in_rest' => true, 
		'menu_icon' => 'dashicons-location-alt',
		'menu_position' => 22,
		'rewrite' => array('slug' => 'lg-contact','with_front' => false),
        )
    );
    register_taxonomy(
        'ville',
        array('concessions'),
        array(
          'label' => 'Ville',
          'labels' => array(
          'name' => 'Ville',
          'singular_name' => 'Ville',
          'all_items' => 'Toutes les Ville',
          'edit_item' => 'Éditer la Ville',
          'view_item' => 'Voir la Ville',
          'update_item' => 'Mettre à jour la Ville',
          'add_new_item' => 'Ajouter une Ville',
          'new_item_name' => 'Nouvelle Ville',
          'search_items' => 'Rechercher parmi les Villes',
          'popular_items' => 'Villes les plus utilisés'
        ),
        'hierarchical' => true,
        'show_in_rest' => true,
        'show_in_menu'        => false,
		'show_in_nav_menus'   => false,
		'show_in_admin_bar'   => false,
        'supports' => array('title', 'thumbnail', 'editor'),
        )
    );
    register_taxonomy_for_object_type( 'taxonomy', 'concessions' );
}
add_action('init', 'create_post_type_concessions');

function create_post_type_offers()
{
    register_post_type('offers',
        array(
        'labels' => array(
          'name' => __('Ventes spéciale'),
          'singular_name' => __('Vente spéciale'),
        ),
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
        ),
        'public' => true,
		'has_archive' => false,
		'show_in_rest' => true, 
		'menu_icon' => 'dashicons-cart',
		'menu_position' => 26,
      )
    );
	register_taxonomy(
        'univers_cat',
        array('actualitys', 'offers'),
        array(
          'label' => 'Catégories',
          'labels' => array(
          'name' => 'Catégories',
          'singular_name' => 'Catégories',
          'all_items' => 'Toutes les catégories',
          'edit_item' => 'Éditer la catégorie',
          'view_item' => 'Voir la catégorie',
          'update_item' => 'Mettre à jour la catégorie',
          'add_new_item' => 'Ajouter une catégorie',
          'new_item_name' => 'Nouvelle catégorie',
          'search_items' => 'Rechercher parmi les catégories',
          'popular_items' => 'catégories les plus utilisés'
        ),
        'hierarchical' => true,
        'show_in_rest' => true, 
        'supports' => array('title', 'thumbnail', 'editor'),
        )
    );
    register_taxonomy_for_object_type( 'taxonomy', 'offers' );
}
add_action('init', 'create_post_type_offers');

function create_post_type_faq()
{
    register_post_type('faq',
        array(
        'labels' => array(
          'name' => __('FAQ'),
          'singular_name' => __('FAQ'),
        ),
        'supports' => array(
            'title',
            'editor',
        ),
        'public' => true,
		'has_archive' => true,
		'show_in_rest' => true, 
		'menu_icon' => 'dashicons-welcome-learn-more',
		'menu_position' => 27,
		'rewrite' => array('slug' => 'faq','with_front' => false),
      )
	);
	register_taxonomy(
        'faq_cat',
        array('faq'),
        array(
          'label' => 'Catégories',
          'labels' => array(
          'name' => 'Catégories',
          'singular_name' => 'Catégories',
          'all_items' => 'Toutes les catégories',
          'edit_item' => 'Éditer la catégorie',
          'view_item' => 'Voir la catégorie',
          'update_item' => 'Mettre à jour la catégorie',
          'add_new_item' => 'Ajouter une catégorie',
          'new_item_name' => 'Nouvelle catégorie',
          'search_items' => 'Rechercher parmi les catégories',
          'popular_items' => 'catégories les plus utilisés'
        ),
        'hierarchical' => true,
        'show_in_rest' => true, 
        'supports' => array('title', 'thumbnail', 'editor'),
        )
    );
    register_taxonomy_for_object_type( 'taxonomy', 'faq');
}
add_action('init', 'create_post_type_faq');

function create_post_type_actualitys()
{
    register_post_type('actualitys',
        array(
        'labels' => array(
          'name' => __('Actualités'),
          'singular_name' => __('Actualité'),
        ),
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
        ),
        'public' => true,
		'has_archive' => true,
		'show_in_rest' => true, 
		'menu_icon' => 'dashicons-admin-site',
		'menu_position' => 23,
		'rewrite' => array('slug' => 'actualite','with_front' => false),
      )
	);
}
add_action('init', 'create_post_type_actualitys');



/*************************** SHORTCODE ******************************/

function actu_shortcode($atts = [], $content = null, $tag = '')
{
	$term = get_term_by('slug', $atts['brand'], 'univers_cat');
	$actualitys = new WP_Query(array(
		'post-type' => 'actuality',
		'order' => 'DESC',
		'posts_per_page' => 6,
		'tax_query' => [
			[
				'taxonomy' => 'univers_cat',
				'field' => 'term_id',
				'terms' => $term->term_id,
			],
		],
	));
	
    ob_start();
    require __DIR__.'/template-parts/swiper/actuality.php';
    $output = ob_get_clean();

    return $output;
}
add_shortcode('actu_lg', 'actu_shortcode');

function faq_shortcode($atts = [], $content = null, $tag = ''){
	ob_start();
	require __DIR__.'/template-parts/faq.php';
	$output = ob_get_clean();

	return $output;
}
add_shortcode('faq_lg', 'faq_shortcode');

function contact_shortcode($atts = [], $content = null, $tag = ""){
    ob_start();
    require __DIR__."/template-parts/contact.php";
    $output = ob_get_clean();
    return $output;
} 
add_shortcode('contact_lg','contact_shortcode');

function brands_shortcode($atts = [], $content = null, $tag = ''){
	ob_start();
	require __DIR__."/template-parts/swiper/brands.php";
	$output = ob_get_clean();

	return $output;
}

add_shortcode('brands_lg', 'brands_shortcode');

function contactChangeRecipient($contact_form){
    $arrayUser = [
        "Cars" => [
            "Brands" => [
                "Mercedes-Benz" => [
                    "Location" => [
                        "LG Albi Automobiles" => [
                            "E-Mails" => ["CARS-MB-ALBI-1@gmail.com","CARS-MB-ALBI-2@gmail.com","CARS-MB-ALBI-3@gmail.com"]
                        ],
                        "LG Beziers Automobiles" => [
                            "E-Mails" => ["CARS-MB-BEZIERS-1@gmail.com","CARS-MB-BEZIERS-2@gmail.com","CARS-MB-BEZIERS-3@gmail.com"]
                        ], 
                        "LG Carcassonne Automobiles" => [
                            "E-Mails" => ["CARS-MB-CARCA-1@gmail.com","CARS-MB-CARCA-2@gmail.com","CARS-MB-CARCA-3@gmail.com"]
                        ],
                        "LG Castres Automobiles" => [
                            "E-Mails" => ["CARS-MB-CASTRES-1@gmail.com","CARS-MB-CASTRES-2@gmail.com","CARS-MB-CASTRES-3@gmail.com"]
                        ],
                        "LG Narbonne Automobiles" => [
                            "E-Mails" => ["CARS-MB-GAVATX-1@gmail.com","CARS-MB-GAVATX-2@gmail.com","CARS-MB-GAVATX-3@gmail.com"]
                        ],
                        "LG Muret Automobiles" => [
                            "E-Mails" => ["CARS-MB-MURET-1@gmail.com","CARS-MB-MURET-2@gmail.com","CARS-MB-MURET-3@gmail.com"]
                        ],
                        "LG Toulouse Automobiles" => [
                            "E-Mails" => ["CARS-MB-TOULOUSE-1@gmail.com","CARS-MB-TOULOUSE-2@gmail.com","CARS-MB-TOULOUSE-3@gmail.com"]
                        ],
                        "LG Monopole Automobiles" => [
                            "E-Mails" => ["CARS-MB-MONOPOLE-1@gmail.com","CARS-MB-MONOPOLE-2@gmail.com","CARS-MB-MONOPOLE-3@gmail.com"]
                        ],
                    ]
                ],
                "smart" => [
                    "Location" => [
                        "LG Albi Automobiles" => [
                            "E-Mails" => ["CARS-SMART-ALBI-1@gmail.com","CARS-SMART-ALBI-2@gmail.com","CARS-SMART-ALBI-3@gmail.com"]
                        ],
                        "LG Beziers Automobiles" => [
                            "E-Mails" => ["CARS-SMART-BEZIERS-1@gmail.com","CARS-SMART-BEZIERS-2@gmail.com","CARS-SMART-BEZIERS-3@gmail.com"]
                        ], 
                        "LG Carcassonne Automobiles" => [
                            "E-Mails" => ["CARS-SMART-CARCA-1@gmail.com","CARS-SMART-CARCA-2@gmail.com","CARS-SMART-CARCA-3@gmail.com"]
                        ],
                        "LG Narbonne Automobiles" => [
                            "E-Mails" => ["CARS-SMART-GAVATX-1@gmail.com","CARS-SMART-GAVATX-2@gmail.com","CARS-SMART-GAVATX-3@gmail.com"]
                        ],
                        "LG Muret Automobiles" => [
                            "E-Mails" => ["CARS-SMART-MURET-1@gmail.com","CARS-SMART-MURET-2@gmail.com","CARS-SMART-MURET-3@gmail.com"]
                        ],
                        "LG Toulouse Automobiles" => [
                            "E-Mails" => ["CARS-SMART-TOULOUSE-1@gmail.com","CARS-SMART-TOULOUSE-2@gmail.com","CARS-SMART-TOULOUSE-3@gmail.com"]
                        ],
                        "LG Monopole Automobiles" => [
                            "E-Mails" => ["CARS-SMART-MONOPOLE-1@gmail.com","CARS-SMART-MONOPOLE-2@gmail.com","CARS-SMART-MONOPOLE-3@gmail.com"]
                        ],
                    ]
                ],
                "Jeep" => [
                    "Location" => [
                        "LG Beziers Automobiles" => [
                            "E-Mails" => ["CARS-JEEP-BEZIERS-1@gmail.com","CARS-JEEP-BEZIERS-2@gmail.com","CARS-JEEP-BEZIERS-3@gmail.com"]
                        ],
                        "LG Carcassonne Automobiles" => [
                            "E-Mails" => ["CARS-JEEP-CARCA-1@gmail.com","CARS-JEEP-CARCA-2@gmail.com","CARS-JEEP-CARCA-3@gmail.com"]
                        ],
                        "LG Narbonne Automobiles" => [
                            "E-Mails" => ["CARS-JEEP-GAVATX-1@gmail.com","CARS-JEEP-GAVATX-2@gmail.com","CARS-JEEP-GAVATX-3@gmail.com"]
                        ],
                        "Prestige Automobiles" => [
                            "E-Mails" => ["CARS-JEEP-PRESTIGE-1@gmail.com","CARS-JEEP-PRESTIGE-2@gmail.com","CARS-JEEP-PRESTIGE-3@gmail.com"]
                        ]
                    ]
                ],
            ],
        ],
        "Utilities" => [
            "Brands" => [
                "Mercedes-Benz" => [
                    "Location" => [
                        "LG Beziers Automobiles" => [
                            "E-Mails" => ["UTILITY-MB-BEZIERS-1@gmail.com","UTILITY-MB-BEZIERS-2@gmail.com","UTILITY-MB-BEZIERS-3@gmail.com"]
                        ], 
                        "LG Carcassonne Automobiles" => [
                            "E-Mails" => ["UTILITY-MB-CARCA-1@gmail.com","UTILITY-MB-CARCA-2@gmail.com","UTILITY-MB-CARCA-3@gmail.com"]
                        ],
                        "LG Narbonne Automobiles" => [
                            "E-Mails" => ["UTILITY-MB-GAVATX-1@gmail.com","UTILITY-MB-GAVATX-2@gmail.com","UTILITY-MB-GAVATX-3@gmail.com"]
                        ],
                        "LG Muret Automobiles" => [
                            "E-Mails" => ["UTILITY-MB-MURET-1@gmail.com","UTILITY-MB-MURET-2@gmail.com","UTILITY-MB-MURET-3@gmail.com"]
                        ],
                        "LG Monopole Automobiles" => [
                            "E-Mails" => ["UTILITY-MB-MONOPOLE-1@gmail.com","UTILITY-MB-MONOPOLE-2@gmail.com","UTILITY-MB-MONOPOLE-3@gmail.com"]
                        ],
                    ]
                ],
            ]
        ],
        "Trucks" => [
            "Brands" => [
                "Mercedes-Benz" => [
                    "Location" => [
                        "LG Beziers Automobiles" => [
                            "E-Mails" => ["TRUCKS-MB-BEZIERS-1@gmail.com","TRUCKS-MB-BEZIERS-2@gmail.com","TRUCKS-MB-BEZIERS-3@gmail.com"]
                        ], 
                        "LG Carcassonne Automobiles" => [
                            "E-Mails" => ["TRUCKS-MB-CARCA-1@gmail.com","TRUCKS-MB-CARCA-2@gmail.com","TRUCKS-MB-CARCA-3@gmail.com"]
                        ],
                        "LG Narbonne Automobiles" => [
                            "E-Mails" => ["TRUCKS-MB-GAVATX-1@gmail.com","TRUCKS-MB-GAVATX-2@gmail.com","TRUCKS-MB-GAVATX-3@gmail.com"]
                        ],
                        "LG Monopole Automobiles" => [
                            "E-Mails" => ["TRUCKS-MB-MONOPOLE-1@gmail.com","TRUCKS-MB-MONOPOLE-2@gmail.com","TRUCKS-MB-MONOPOLE-3@gmail.com"]
                        ],
                    ]
                ],
                "Fuso" => [
                    "Location" => [
                        "LG Beziers Automobiles" => [
                            "E-Mails" => ["TRUCKS-FUSO-BEZIERS-1@gmail.com","TRUCKS-FUSO-BEZIERS-2@gmail.com","TRUCKS-FUSO-BEZIERS-3@gmail.com"]
                        ], 
                        "LG Carcassonne Automobiles" => [
                            "E-Mails" => ["TRUCKS-FUSO-CARCA-1@gmail.com","TRUCKS-FUSO-CARCA-2@gmail.com","TRUCKS-FUSO-CARCA-3@gmail.com"]
                        ],
                        "LG Monopole Automobiles" => [
                            "E-Mails" => ["TRUCKS-FUSO-MONOPOLE-1@gmail.com","TRUCKS-FUSO-MONOPOLE-2@gmail.com","TRUCKS-FUSO-MONOPOLE-3@gmail.com"]
                        ],
                    ]
                ],
                "Evobus" => [
                    "Location" => [
                        "LG Monopole Automobiles" => [
                            "E-Mails" => ["TRUCKS-EVOBUS-MONOPOLE-1@gmail.com","TRUCKS-EVOBUS-MONOPOLE-2@gmail.com","TRUCKS-EVOBUS-MONOPOLE-3@gmail.com"]
                        ],
                    ]
                ],
                "Unimog" => [
                    "Location" => [
                        "LG Carcassonne Automobiles" => [
                            "E-Mails" => ["TRUCKS-UNIMOG-CARCA-1@gmail.com","TRUCKS-UNIMOG-CARCA-2@gmail.com","TRUCKS-UNIMOG-CARCA-3@gmail.com"]
                        ],
                        "LG Monopole Automobiles" => [
                            "E-Mails" => ["TRUCKS-UNIMOG-MONOPOLE-1@gmail.com","TRUCKS-UNIMOG-MONOPOLE-2@gmail.com","TRUCKS-UNIMOG-MONOPOLE-3@gmail.com"]
                        ],
                    ]
                ],
            ]
        ],
        "Bikes" => [
            "Brands" => [
                "Indian" => [
                    "Location" => [
                        "Indian Perpignan" => [
                            "E-Mails" => ["BIKES-INDIAN-PERPI-1@gmail.com","BIKES-INDIAN-PERPI-2@gmail.com","BIKES-INDIAN-PERPI-3@gmail.com"]
                        ],
                    ]
                ],
                "Yamaha" => [
                    "Location" => [
                        "Yam66 Perpignan" => [
                            "E-Mails" => ["BIKES-YAMAHA-PERPI-1@gmail.com","BIKES-YAMAHA-PERPI-2@gmail.com","BIKES-YAMAHA-PERPI-3@gmail.com"]
                        ],
                    ]
                ],
            ]
        ]
    ];

    $title = $contact_form->title;
    $submission = WPCF7_Submission::get_instance();
    $mail = $contact_form->prop('mail');

    if($submission){
        $posted_data = $submission->get_posted_data();
    }
    switch ($posted_data["typeVehicule"][0]) {
        case 'Voitures':
            switch($posted_data["marque"][0]){
                case 'Mercedes-Benz':
                    // $recipient = implode(",",$arrayUser["Cars"]["Brands"]["Mercedes-Benz"]["Location"]["LG Monopole Automobiles"]["E-Mails"]);
                    switch($posted_data["lieuIntervention"][0]){
                        case "LG Albi Automobiles":
                            $recipient = implode(",",$arrayUser["Cars"]["Brands"]["Mercedes-Benz"]["Location"]["LG Albi Automobiles"]["E-Mails"]);
                        break;
                        case "LG Beziers Automobiles":
                            $recipient = implode(",",$arrayUser["Cars"]["Brands"]["Mercedes-Benz"]["Location"]["LG Beziers Automobiles"]["E-Mails"]);
                        break;
                        case "LG Carcassonne Automobiles":
                            $recipient = implode(",",$arrayUser["Cars"]["Brands"]["Mercedes-Benz"]["Location"]["LG Carcassonne Automobiles"]["E-Mails"]);
                        break;
                        case "LG Castres Automobiles":
                            $recipient = implode(",",$arrayUser["Cars"]["Brands"]["Mercedes-Benz"]["Location"]["LG Castres Automobiles"]["E-Mails"]);
                        break;
                        case "LG Narbonne Automobiles":
                            $recipient = implode(",",$arrayUser["Cars"]["Brands"]["Mercedes-Benz"]["Location"]["LG Narbonne Automobiles"]["E-Mails"]);
                        break;
                        case "LG Muret Automobiles":
                            $recipient = implode(",",$arrayUser["Cars"]["Brands"]["Mercedes-Benz"]["Location"]["LG Muret Automobiles"]["E-Mails"]);
                        break;
                        case "LG Toulouse Automobiles":
                            $recipient = implode(",",$arrayUser["Cars"]["Brands"]["Mercedes-Benz"]["Location"]["LG Toulouse Automobiles"]["E-Mails"]);
                        break;
                        case "LG Monopole Automobiles":
                            $recipient = implode(",",$arrayUser["Cars"]["Brands"]["Mercedes-Benz"]["Location"]["LG Monopole Automobiles"]["E-Mails"]);
                        break;
                    }
                break;
                case 'smart' : 
                    switch($posted_data["lieuIntervention"][0]){
                        case "LG Albi Automobiles":
                            $recipient = implode(",",$arrayUser["Cars"]["Brands"]["smart"]["Location"]["LG Albi Automobiles"]["E-Mails"]);
                        break;
                        case "LG Beziers Automobiles":
                            $recipient = implode(",",$arrayUser["Cars"]["Brands"]["smart"]["Location"]["LG Beziers Automobiles"]["E-Mails"]);
                        break;
                        case "LG Carcassonne Automobiles":
                            $recipient = implode(",",$arrayUser["Cars"]["Brands"]["smart"]["Location"]["LG Carcassonne Automobiles"]["E-Mails"]);
                        break;
                        case "LG Narbonne Automobiles":
                            $recipient = implode(",",$arrayUser["Cars"]["Brands"]["smart"]["Location"]["LG Narbonne Automobiles"]["E-Mails"]);
                        break;
                        case "LG Muret Automobiles":
                            $recipient = implode(",",$arrayUser["Cars"]["Brands"]["smart"]["Location"]["LG Muret Automobiles"]["E-Mails"]);
                        break;
                        case "LG Toulouse Automobiles":
                            $recipient = implode(",",$arrayUser["Cars"]["Brands"]["smart"]["Location"]["LG Toulouse Automobiles"]["E-Mails"]);
                        break;
                        case "LG Monopole Automobiles":
                            $recipient = implode(",",$arrayUser["Cars"]["Brands"]["smart"]["Location"]["LG Monopole Automobiles"]["E-Mails"]);
                        break;
                    }
                break;
                case 'Jeep' : 
                    switch($posted_data["lieuIntervention"][0]){
                        case "LG Beziers Automobiles":
                            $recipient = implode(",",$arrayUser["Cars"]["Brands"]["Jeep"]["Location"]["LG Beziers Automobiles"]["E-Mails"]);
                        break;
                        case "LG Carcassonne Automobiles":
                            $recipient = implode(",",$arrayUser["Cars"]["Brands"]["Jeep"]["Location"]["LG Carcassonne Automobiles"]["E-Mails"]);
                        break;
                        case "LG Narbonne Automobiles":
                            $recipient = implode(",",$arrayUser["Cars"]["Brands"]["Jeep"]["Location"]["LG Narbonne Automobiles"]["E-Mails"]);
                        break;
                        case "Prestige Automobiles":
                            $recipient = implode(",",$arrayUser["Cars"]["Brands"]["Jeep"]["Location"]["Prestige Automobiles"]["E-Mails"]);
                        break;
                    }
                break;
            }
        break;
        case 'Camions':
            switch($posted_data["marque"][0]){
                case 'Mercedes-Benz':
                    // $recipient = implode(",",$arrayUser["Cars"]["Brands"]["Mercedes-Benz"]["Location"]["LG Monopole Automobiles"]["E-Mails"]);
                    switch($posted_data["lieuIntervention"][0]){
                        case "LG Beziers Automobiles":
                            $recipient = implode(",",$arrayUser["Trucks"]["Brands"]["Mercedes-Benz"]["Location"]["LG Beziers Automobiles"]["E-Mails"]);
                        break;
                        case "LG Carcassonne Automobiles":
                            $recipient = implode(",",$arrayUser["Trucks"]["Brands"]["Mercedes-Benz"]["Location"]["LG Carcassonne Automobiles"]["E-Mails"]);
                        break;
                        case "LG Narbonne Automobiles":
                            $recipient = implode(",",$arrayUser["Trucks"]["Brands"]["Mercedes-Benz"]["Location"]["LG Narbonne Automobiles"]["E-Mails"]);
                        break;
                        case "LG Monopole Automobiles":
                            $recipient = implode(",",$arrayUser["Trucks"]["Brands"]["Mercedes-Benz"]["Location"]["LG Monopole Automobiles"]["E-Mails"]);
                        break;
                    }
                break;
                case 'Fuso' : 
                    switch($posted_data["lieuIntervention"][0]){
                        case "LG Beziers Automobiles":
                            $recipient = implode(",",$arrayUser["Trucks"]["Brands"]["Fuso"]["Location"]["LG Beziers Automobiles"]["E-Mails"]);
                        break;
                        case "LG Carcassonne Automobiles":
                            $recipient = implode(",",$arrayUser["Trucks"]["Brands"]["Fuso"]["Location"]["LG Carcassonne Automobiles"]["E-Mails"]);
                        break;
                        case "LG Monopole Automobiles":
                            $recipient = implode(",",$arrayUser["Trucks"]["Brands"]["Fuso"]["Location"]["LG Monopole Automobiles"]["E-Mails"]);
                        break;
                    }
                break;
                case 'Evobus' : 
                    switch($posted_data["lieuIntervention"][0]){
                        case "LG Monopole Automobiles":
                            $recipient = implode(",",$arrayUser["Trucks"]["Brands"]["Evobus"]["Location"]["LG Monopole Automobiles"]["E-Mails"]);
                        break;
                    }
                break;
                case 'Unimog' : 
                    switch($posted_data["lieuIntervention"][0]){
                        case "LG Monopole Automobiles":
                            $recipient = implode(",",$arrayUser["Trucks"]["Brands"]["Unimog"]["Location"]["LG Monopole Automobiles"]["E-Mails"]);
                        break;
                        case "LG Carcassonne Automobiles":
                            $recipient = implode(",",$arrayUser["Trucks"]["Brands"]["Unimog"]["Location"]["LG Monopole Automobiles"]["E-Mails"]);
                        break;
                    }
                break;
                
            }
        break;
        case 'Motos':
            switch($posted_data["marque"][0]){
                case 'Indian':
                    // $recipient = implode(",",$arrayUser["Cars"]["Brands"]["Mercedes-Benz"]["Location"]["LG Monopole Automobiles"]["E-Mails"]);
                    switch($posted_data["lieuIntervention"][0]){
                        case "Indian Perpignan":
                            $recipient = implode(",",$arrayUser["Bikes"]["Brands"]["Indian"]["Location"]["Indian Perpignan"]["E-Mails"]);
                        break;
                    }
                break;
                case 'Yamaha':
                    // $recipient = implode(",",$arrayUser["Cars"]["Brands"]["Mercedes-Benz"]["Location"]["LG Monopole Automobiles"]["E-Mails"]);
                    switch($posted_data["lieuIntervention"][0]){
                        case "Yamaha Perpignan":
                            $recipient = implode(",",$arrayUser["Bikes"]["Brands"]["Yamaha"]["Location"]["Yam66 Perpignan"]["E-Mails"]);
                        break;
                    }
                break;
            }
        break;
        case 'Utilitaires':
            switch($posted_data["marque"][0]){
                case 'Mercedes-Benz':
                    // $recipient = implode(",",$arrayUser["Cars"]["Brands"]["Mercedes-Benz"]["Location"]["LG Monopole Automobiles"]["E-Mails"]);
                    switch($posted_data["lieuIntervention"][0]){
                        case "LG Beziers Automobiles":
                            $recipient = implode(",",$arrayUser["Utilities"]["Brands"]["Mercedes-Benz"]["Location"]["LG Beziers Automobiles"]["E-Mails"]);
                        break;
                        case "LG Carcassonne Automobiles":
                            $recipient = implode(",",$arrayUser["Utilities"]["Brands"]["Mercedes-Benz"]["Location"]["LG Carcassonne Automobiles"]["E-Mails"]);
                        break;
                        case "LG Narbonne Automobiles":
                            $recipient = implode(",",$arrayUser["Utilities"]["Brands"]["Mercedes-Benz"]["Location"]["LG Narbonne Automobiles"]["E-Mails"]);
                        break;
                        case "LG Muret Automobiles":
                            $recipient = implode(",",$arrayUser["Utilities"]["Brands"]["Mercedes-Benz"]["Location"]["LG Muret Automobiles"]["E-Mails"]);
                        break;
                        case "LG Monopole Automobiles":
                            $recipient = implode(",",$arrayUser["Utilities"]["Brands"]["Mercedes-Benz"]["Location"]["LG Monopole Automobiles"]["E-Mails"]);
                        break;
                    }
                break;
                
            }
        break;
        
        default:
            false;
        break;
    }
    $mail['recipient'] = $recipient;
    $contact_form->set_properties(['mail'=>$mail]);
}
add_action("wpcf7_before_send_mail", "contactChangeRecipient");




/***************************** AJAX ******************************/