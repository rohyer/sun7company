<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v7.0"></script>
<?php wp_body_open(); ?>
    <header>
        <div id="desktop-header">
            <div class="container">
                <div class="row">
                    <div id="logo" class="d-none justify-content-center justify-content-lg-start d-lg-flex col-lg-3 col-xl-3">
                        <h1><a href="<?php echo home_url( '/' ); ?>"><img src="/sun7company/wp-content/themes/sun7company/assets/img/cropped-logo.png"></a></h1>
                    </div>

                    <div id="main-search" class="d-none d-lg-flex col-lg-6 col-xl-6 justify-content-lg-start align-items-lg-center">

                            <?php get_template_part( 'product_search_form'); ?>

                    </div>

                    <div id="social-media-header" class="d-none d-lg-flex col-lg-3 col-xl-3 justify-content-lg-end">
                        <a href="https://pt-br.facebook.com/sun7company/?ref=page_internal"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.instagram.com/sun7company_/?hl=pt-br"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>   
        </div>

        <div id="mobile-header">
            <div class="container">
                <div class="row">
                    <div id="main-icon" class="d-flex col-3 d-lg-none">
                        <div id="btn-icon" class="menu-closed">
                            <span class="hamburger"></span>
                        </div>
                    </div>

                    <nav id="responsive-menu" class="d-lg-none">
                        <ul class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div id="menu-list">
                                        <h6><a href="<?php echo esc_url( get_page_link(11)) ?>"><i class="fas fa-user-alt"></i> Minha conta</a></h6>

                                        <div id="responsive-search">
                                            <?php get_template_part( 'product_search_form_responsive'); ?>
                                        </div>
                                        
                                        <?php

                                        $cat_args_mobile = array(
                                            'taxonomy' => 'category',
                                            'orderby' => 'menu_order',
                                            'hide_empty' => false,
                                            'exclude' => 15,
                                            'parent' => 0,
                                        );
                                        
                                        $product_categories_mobile = get_terms( 'product_cat', $cat_args_mobile );
                                        
                                        if( !empty($product_categories_mobile) ){
                                            echo '<ul id="mobile-product-categories-header" class="top-level">';
                                            
                                            foreach ($product_categories_mobile as $key => $category) {

                                                $firstTheCatIdMobile = get_term_by( 'slug', $category->name, 'product_cat' );
                                                $firstTermIdMobile = $firstTheCatIdMobile->term_id;

                                                $firstTermChildMobile = get_term_children( $firstTermIdMobile, 'product_cat');
                                                
                                                if ( !empty($firstTermChildMobile) ) {
                                                    echo '<li class="listener-second-level closed-mobile-second-level">';
                                                    echo '<a href="'.get_term_link($category).'" >' . $category->name . '</a>' . '<i class="mobile-menu-arrow-down fas fa-chevron-down"></i>';
                                                } else {
                                                    echo '<li>';
                                                    echo '<a href="'.get_term_link($category).'" >' . $category->name . '</a>';
                                                }
                                                

                                                    $theCatIdMobile = get_term_by( 'slug', $category->name, 'product_cat');
                                                    $termIdMobile = $theCatIdMobile->term_id;
                                                    
                                                    $termchildrenMobile = get_term_children( $termIdMobile, 'product_cat' );

                                                    if ( !empty($termchildrenMobile) ) {

                                                        echo '<ul class="mobile-second-level">';
                                                            foreach ( $termchildrenMobile as $child ) {
                                                                $term = get_term_by( 'id', $child, 'product_cat' );
                                                                echo '<li><a href="' . get_term_link( $child, 'product_cat' ) . '">' . $term->name . '</a></li>';
                                                            }
                                                        echo '</ul>';
                                                    }

                                                echo '</li>';
                                            }
                                            echo '</ul>';
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>

                        </ul>
                    </nav>

                    <div id="mobile-logo" class="d-flex col-6 justify-content-center d-lg-none">
                        <h1><a href="./loja"><img src="/sun7company/wp-content/themes/sun7company/assets/img/cropped-logo.png"></a></h1>
                    </div>

                    <div id="mobile-mini-cart" class="d-flex col-3 d-lg-none">
                        <?php global $woocommerce; ?>
                        <a id="mobile-header-mini-cart" href="<?php echo esc_url( get_page_link(9)) ?>">
                            <i class="fas fa-shopping-cart"></i>
                            <span class="products-quantity"><?php echo $woocommerce->cart->cart_contents_count; ?></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="bottom-header">
        <div id="bottom-header-container" class="container">
            <div class="row">
                <div class="d-none d-lg-block col-lg-12 col-xl-12">
                    <?php

                    $cat_args = array(
                        'taxonomy' => 'category',
                        'orderby' => 'menu_order',
                        'hide_empty' => false,
                        'exclude' => 15,
                        'parent' => 0,
                    );
                    
                    $product_categories = get_terms( 'product_cat', $cat_args );
                    
                    if( !empty($product_categories) ){
                        echo '<ul id="product-categories-header" class="top-level">';
                        foreach ($product_categories as $key => $category) {

                            $firstTheCatId = get_term_by( 'slug', $category->name, 'product_cat' );
                            $firstTermId = $firstTheCatId->term_id;

                            $firstTermChild = get_term_children( $firstTermId, 'product_cat');
                            
                            
                            echo '<li>';
                            echo '<a href="'.get_term_link($category).'" >';
                            if ( !empty($firstTermChild) ) {
                            echo $category->name . '<i id="menu-arrow-down" class="fas fa-chevron-down"></i>';
                            } else {
                                echo $category->name;
                            }
                            echo '</a>';

                                $theCatId = get_term_by( 'slug', $category->name, 'product_cat');
                                $termId = $theCatId->term_id;
                                
                                $termchildren = get_term_children( $termId, 'product_cat' );

                                if ( !empty($termchildren) ) {

                                    echo '<ul class="second-level">';
                                        foreach ( $termchildren as $child ) {
                                            $term = get_term_by( 'id', $child, 'product_cat' );
                                            echo '<li><a href="' . get_term_link( $child, 'product_cat' ) . '">' . $term->name . '</a></li>';
                                        }
                                    echo '</ul>';
                                }

                            echo '</li>';
                        } ?>
                        <li>
                            <a id="header-mini-cart" href="<?php echo esc_url( get_page_link(9)) ?>">
                            <i class="fas fa-shopping-cart"></i>
                            <span class="products-quantity"><?php echo $woocommerce->cart->cart_contents_count; ?></span>
                            </a>
                        </li>

                        <li><a href="<?php echo esc_url( get_page_link(11)) ?>"><i class="fas fa-user-alt"></i></a></li>

                        <?php echo '</ul>';
                    }

                    ?>
                </div>
            </div>
        </div>
    </section>