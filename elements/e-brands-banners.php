<?php
$args = array(
    'category_name' => 'brands-banners'
);
?>

<section id="brands-banners">
    <ul class="owl-carousel owl-theme">
        <?php
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
                        $query->the_post();
        ?>
        <?php
            
        $content = $post->post_content;
        $no_tags_content = strip_tags($content);
        $final_content = trim($no_tags_content);
            
        ?>
        
        <li id="post-<?php the_ID(); ?>" class="banners-post">
                <div class="banner-img">
                    <a href="<?php echo esc_url( home_url( "/" ))?><?php echo $final_content; ?>">
                        <?php the_post_thumbnail(); ?>
                    </a>
                </div>
            
        </li>
        <?php
            }
        }
        ?>
    </ul>
</section>