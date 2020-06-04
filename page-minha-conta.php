<?php get_header(); ?>

    <div class="back-image-page">
        <?php get_template_part('elements/parts/part', 'secondary-image'); ?>
        <div class="container-custom-h">
            <h3>Programas & Eventos</h3>
        </div>
    </div>


    <section id="main-schedules">
        <div id="title-schedules" class="d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h6>Programas</h6>
                    </div>
                </div>
            </div>
        </div>

    
    </section>

    <?php echo do_shortcode('[woocommerce_my_account]'); ?>

<?php get_footer(); ?>