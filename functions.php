<?php

function my_function_admin_bar(){
    return false;
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');


// add_action( 'after_setup_theme', 'woocommerce_support' );

// function woocommerce_support()
//     add_theme_support( 'woocommerce' );
// }



// Registro das suas widgets
if ( function_exists('register_sidebar') )
{
    register_sidebar(array(
        'name' => __( 'Cores'),
        'id' => 'sidebar-1',
        'description' => __( 'Breve descrição sobre esta SIDEBAR.'),
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ) );
    register_sidebar(array(
        'name' => __( 'Label'),
        'id' => 'sidebar-2',
        'description' => __( 'Breve descrição sobre a SEGUNDA SIDEBAR.'),
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ) );
    register_sidebar(array(
        'name' => __( 'Label'),
        'id' => 'sidebar-3',
        'description' => __( 'Breve descrição sobre a SEGUNDA SIDEBAR.'),
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ) );
}


add_action( 'after_setup_theme', 'setup_woocommerce_support' );

 function setup_woocommerce_support()
{
  add_theme_support('woocommerce');
}


add_filter( 'get_product_search_form' , 'woo_custom_product_searchform' );

function woo_custom_product_searchform( $form ) {
    $form = '<form role="search" method="get" id="searchform" action="' . esc_url( home_url( '/'  ) ) . '">
    <div>
      <label class="screen-reader-text" for="s">' . __( 'Search for:', 'woocommerce' ) . '</label>
      <input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="' . __( 'My Search form', 'woocommerce' ) . '" />
      <input type="submit" id="searchsubmit" value="'. esc_attr__( 'Search', 'woocommerce' ) .'" />
      <input type="hidden" name="post_type" value="product" />
    </div>
  </form>';
  return $form;
}

// To change add to cart text on single product page
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woocommerce_custom_single_add_to_cart_text' ); 
function woocommerce_custom_single_add_to_cart_text() {
    return __( 'Comprar', 'woocommerce' ); 
}

// To change add to cart text on product archives(Collection) page
add_filter( 'woocommerce_product_add_to_cart_text', 'woocommerce_custom_product_add_to_cart_text' );  
function woocommerce_custom_product_add_to_cart_text() {
    return __( 'Comprar', 'woocommerce' );
}




// function get_the_category( $id = false ) {
//     $categories = get_the_terms( $id, 'category' );
//     if ( ! $categories || is_wp_error( $categories ) ) {
//         $categories = array();
//     }
 
//     $categories = array_values( $categories );
 
//     foreach ( array_keys( $categories ) as $key ) {
//         _make_cat_compat( $categories[ $key ] );
//     }
 
//     /**
//      * Filters the array of categories to return for a post.
//      *
//      * @since 3.1.0
//      * @since 4.4.0 Added `$id` parameter.
//      *
//      * @param WP_Term[] $categories An array of categories to return for the post.
//      * @param int|false $id         ID of the post.
//      */
//     return apply_filters( 'get_the_categories', $categories, $id );
// }


add_theme_support( 'post-thumbnails' );

function g_scripts() {

    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');

    wp_enqueue_script('jquery-3.4.1', get_template_directory_uri() . '/assets/js/jquery-3.4.1.js');
    wp_enqueue_script('index', get_template_directory_uri() . '/assets/js/bootstrap/index.js');
    wp_enqueue_script('owl.carousel', get_template_directory_uri() . '/assets/js/owl/owl.carousel.js');
    wp_enqueue_script('owl.autoplay', get_template_directory_uri() . '/assets/js/owl/owl.autoplay.js', array(), '1.0', true);
    wp_enqueue_script('owl.navigation', get_template_directory_uri() . '/assets/js/owl/owl.navigation.js', array(), '1.0', true);
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0', true);

}

add_action('wp_enqueue_scripts', 'g_scripts');

require get_template_directory() . '/inc/customizer.php';


?>