<?php
$args = array(
    'category_name' => 'banners'
);

$args2 = array(
    'category_name' => 'banners-mobile'
);
?>

<section id="main-banners">
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
</section>

<section id="main-banners-mobile">
    <ul class="owl-carousel owl-theme">
        <?php
        $query2 = new WP_Query( $args2 );
        if ( $query2->have_posts() ) {
            while ( $query2->have_posts() ) {
                $query2->the_post();
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
</section>