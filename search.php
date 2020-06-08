<!--<?php get_header(); ?>

<section class="search">
    <div class="container">
        <div class="row">
            <div class="page-header col-xs-12">
                <?php if ( have_posts() ) : ?>
                <h1 class="page-title"><?php printf( __( 'Resultados para: %s', 'nidi' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                <?php else : ?>
                <h1 class="page-title text-center"><?php _e( 'Sua busca não obteve nenhum resultado', 'nidi' ); ?>
                </h1>
                <i class="not-found text-center">
                    <img src="assets/img/magnifier.svg" alt="" width="50px" height="50px">
                </i>

                <?php endif; ?>
            </div>
            .page-header
        </div>
    </div>
 
    <div class="container">
        <div class="row">
        	<div class="col-xs-12">
            <?php
                if ( have_posts() ) :
                	/* Start the Loop */
                	while ( have_posts() ) : the_post(); ?>

                        <?php get_template_part( 'elements/post/p', 'products' ); ?>
                
                <?php
                	endwhile; // End of the loop.
                echo '<div class="col-xs-12 text-center">';
                	the_posts_pagination( array(
                		'<span class="screen-reader-text"></span>',
                		'<span class="screen-reader-text"></span>' .
                		'before_page_number' => '<span class="meta-nav screen-reader-text"></span>',
                	) );
                echo '</div>';
                endif;
                ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>-->