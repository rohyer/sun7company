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
        <div class="container">
            <div class="row">
                <div id="logo" class="d-flex justify-content-center justify-content-md-start col-md-3 col-lg-3 col-xl-2">
                    <h1><a href="./loja"><img src="/sun7company/wp-content/themes/sun7company/assets/img/cropped-logo.png"></a></h1>
                </div>

                <div id="main-search" class="d-none d-md-flex col-lg-7 col-xl-7 justify-content-md-end">
                </div>

                <div id="social-media-header" class="d-none d-md-flex col-lg-2 col-xl-3 justify-content-md-end">
                    <a href="https://pt-br.facebook.com/sun7company/?ref=page_internal"><i class="fab fa-facebook"></i></a>
                    <a href="https://www.instagram.com/sun7company_/?hl=pt-br"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fas fa-envelope"></i></a>
                </div>

                 <!--<div id="header-menu" class="d-none d-md-flex col-md-9 col-lg-7 offset-lg-2 col-xl-7 offset-xl-3 justify-content-md-end">
                    <?php

                    // wp_nav_menu( array(
                    //     'menu' => 'menu',
                    //     'theme_location' => 'menu'
                    // ));

                    ?>
                </div>-->
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
                        }
                        echo '</ul>';
                    }

                    
                    // $theCatId = get_term_by( 'slug', 'roupas', 'product_cat' );
                    // $theCatId = $theCatId->term_id;
                    // echo $theCatId;


                    // $term_id = 73;
                    // $taxonomy_name = 'product_cat';
                    // $termchildren = get_term_children( $term_id, $taxonomy_name );
                    
                    // echo '<ul>';
                    // foreach ( $termchildren as $child ) {
                    //     $term = get_term_by( 'id', $child, $taxonomy_name );
                    //     echo '<li><a href="' . get_term_link( $child, $taxonomy_name ) . '">' . $term->name . '</a></li>';
                        
                    // }
                    // echo '</ul>';


                    ?>
                </div>
            </div>
        </div>
    </section>