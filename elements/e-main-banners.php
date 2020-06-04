<?php
$args = array(
    'category_name' => 'banners'
);
?>

<section id="main-banners">
    <div class="row">
        <div class="col-12">
            <ul class="owl-carousel owl-theme">
                <?php
                $query = new WP_Query( $args );
                if ( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                        $query->the_post();
                ?>
                <li id="post-<?php the_ID(); ?>" class="banners-post">
                    <div class="banner-img">
                        <?php the_post_thumbnail(); ?>
                    </div>
                </li>
                <?php
                    }
                }
                ?>
            </ul>
        </div>
    </div>

</section>