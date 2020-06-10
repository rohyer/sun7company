<?php

$args = array(
    'category_name' => 'depoimentos'
);

?>

<section id="testimonials" class="main-contents">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4>Depoimentos</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <ul class="owl-carousel owl-theme">
                    <?php
                    $query = new WP_Query( $args );
                    if ( $query->have_posts() ) {
                        while ( $query->have_posts() ) {
                            $query->the_post();
                    ?>
                    <li id="post-<?php the_ID(); ?>" class="testimonial-post">
                        <div class="testimonial-excerpt">
                        <?php
                            $excerpt = get_the_excerpt();
                            $excerpt = substr( $excerpt , 0, 80);
                            echo $excerpt . ' ...';
                        ?>
                        </div>

                        <div class="testimonial-stars">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>
                        <div class="testimonial-title">
                            <?php the_title(); ?>
                        </div>
                        <div class="testimonial-date">
                            <?php the_date('d/m/Y'); ?>
                        </div>
                    </li>
                    <?php
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</section>