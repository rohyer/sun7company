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
        'name' => __( 'Filtro'),
        'id' => 'sidebar-1',
        'description' => __( 'Filtro de produtos por preço, tamanho e cor.'),
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ) );
    register_sidebar(array(
        'name' => __( 'Filtro Mobile'),
        'id' => 'sidebar-2',
        'description' => __( 'Filtro de produtos por preço, tamanho e cor para tablets e smartphones.'),
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ) );
}







add_action( 'wp_enqueue_scripts', 'wc_remove_lightboxes', 99 );

  /**
   * Remove WooCommerce default prettyphoto lightbox
  */

   function wc_remove_lightboxes() {    
     // Styles
     wp_dequeue_style( 'woocommerce_prettyPhoto_css' );
     // Scripts
     wp_dequeue_script( 'prettyPhoto' );
     wp_dequeue_script( 'prettyPhoto-init' );
     wp_dequeue_script( 'fancybox' );
     wp_dequeue_script( 'enable-lightbox' );
  }


/* Customize Product Gallery */

/**
 * Click on thumbnail to view image for single product page gallery. Includes 
 * responsive image support using 'srcset' attribute introduced in WP 4.4
 * @link https://make.wordpress.org/core/2015/11/10/responsive-images-in-wordpress-4-4/
 */


function wc_remove_image_effect_support() {

   add_theme_support( 'wc-product-gallery-zoom' );
   //add_theme_support( 'wc-product-gallery-lightbox' );
   add_theme_support( 'wc-product-gallery-slider' );

}
add_action( 'after_setup_theme', 'wc_remove_image_effect_support', 100 );




// LOGIN SEPARADO
add_shortcode( 'wc_login_form_bbloomer', 'bbloomer_separate_login_form' );
  
function bbloomer_separate_login_form() {
   if ( is_admin() ) return;
   if ( is_user_logged_in() ) return; 
   ob_start();
   woocommerce_login_form( array( 'redirect' => 'https://custom.url' ) );
   return ob_get_clean();
}


// CADASTRO SEPARADO
add_shortcode( 'wc_reg_form_bbloomer', 'bbloomer_separate_registration_form' );
    
function bbloomer_separate_registration_form() {
   if ( is_admin() ) return;
   if ( is_user_logged_in() ) return;
   ob_start();
 
   // NOTE: THE FOLLOWING <FORM></FORM> IS COPIED FROM woocommerce\templates\myaccount\form-login.php
   // IF WOOCOMMERCE RELEASES AN UPDATE TO THAT TEMPLATE, YOU MUST CHANGE THIS ACCORDINGLY
 
   do_action( 'woocommerce_before_customer_login_form' );
 
   ?>
      <form method="post" class="woocommerce-form woocommerce-form-register register" <?php do_action( 'woocommerce_register_form_tag' ); ?> >
 
         <?php do_action( 'woocommerce_register_form_start' ); ?>
 
         <?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>
 
            <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
               <label for="reg_username"><?php esc_html_e( 'Username', 'woocommerce' ); ?> <span class="required">*</span></label>
               <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="reg_username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
            </p>
 
         <?php endif; ?>
 
         <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
            <label for="reg_email"><?php esc_html_e( 'Email address', 'woocommerce' ); ?> <span class="required">*</span></label>
            <input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" autocomplete="email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
         </p>
 
         <?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>
 
            <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
               <label for="reg_password"><?php esc_html_e( 'Password', 'woocommerce' ); ?> <span class="required">*</span></label>
               <input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password" id="reg_password" autocomplete="new-password" />
            </p>
 
         <?php else : ?>
 
            <p><?php esc_html_e( 'A password will be sent to your email address.', 'woocommerce' ); ?></p>
 
         <?php endif; ?>
 
         <?php do_action( 'woocommerce_register_form' ); ?>
 
         <p class="woocommerce-FormRow form-row">
            <?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
            <button type="submit" class="woocommerce-Button woocommerce-button button woocommerce-form-register__submit" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>"><?php esc_html_e( 'Register', 'woocommerce' ); ?></button>
         </p>
 
         <?php do_action( 'woocommerce_register_form_end' ); ?>
 
      </form>
 
   <?php
     
   return ob_get_clean();
}





// FUNÇÃO PARA SUPORTAR WOOCOMMERCE
add_action( 'after_setup_theme', 'setup_woocommerce_support' );

 function setup_woocommerce_support()
{
  add_theme_support('woocommerce');
}

// FUNÇÃO PARA ADICIONAR 3 COLUNAS NAS PÁGINAS DE CATEGORIA E PESQUISA
add_filter('loop_shop_columns', 'loop_columns', 999);
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 3;
	}
}


// FUNÇÃO DE PESQUISA
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

// FUNÇÃO PARA MUDAR O NOME DO BOTÃO COMPRAR
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


function verifica_acessos() {
   if ( ! is_user_logged_in() AND is_checkout() ) {
      // Executa se o usuário não está logado, se não nem a página inicial nem na de login nem na de registro
       wp_redirect( home_url( '/login-cadastro' ) );
   }
}
add_action( 'wp', 'verifica_acessos' );

function verifica_acessos_cadastro() {
   $current_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
   if ( is_user_logged_in() AND $current_link == "http://localhost/sun7company/login-cadastro/" ) {
      wp_redirect( home_url( '/minha-conta' ) );
   }

}
add_action( 'wp', 'verifica_acessos_cadastro' );




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
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap/dist/js/bootstrap.min.js');
    wp_enqueue_script('modal', get_template_directory_uri() . '/assets/js/bootstrap/modal.js');
    wp_enqueue_script('owl.carousel', get_template_directory_uri() . '/assets/js/owl/owl.carousel.js');
    wp_enqueue_script('owl.autoplay', get_template_directory_uri() . '/assets/js/owl/owl.autoplay.js', array(), '1.0', true);
    wp_enqueue_script('owl.navigation', get_template_directory_uri() . '/assets/js/owl/owl.navigation.js', array(), '1.0', true);
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0', true);

}

add_action('wp_enqueue_scripts', 'g_scripts');

require get_template_directory() . '/inc/customizer.php';


?>