<?php get_header(); ?>

    <div id="page-checkout">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-pages">
                        <h3>Finalizar compra</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div id="main-content-checkout">
                        <?php echo do_shortcode('[woocommerce_checkout]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>