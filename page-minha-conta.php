<?php get_header(); ?>

    <div id="page-account">
        <div class="container">
            <div class="row">
                <div class="col-12">
                <div class="title-pages">
                        <h3>Minha conta</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div id="main-content-account">
                        <?php echo do_shortcode('[woocommerce_my_account]'); ?>
                        <?php //echo do_shortcode('[wc_login_form_bbloomer]'); ?>
                        <?php //echo do_shortcode('[wc_reg_form_bbloomer]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>