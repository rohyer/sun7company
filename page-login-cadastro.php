<?php get_header(); ?>

<div id="page-login-register">
    <a href="<?php echo home_url( '/carrinho' ); ?>" class="black-mask"></a>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="main-box-register">
                    <div class="title-box-register">
                        <h5>Identifique-se</h5>
                        <a href="<?php echo home_url( '/carrinho' ); ?>">
                            <i class="fas fa-times"></i>
                        </a>
                    </div>
                    <div id="content-box-register">
                        <?php echo do_shortcode('[woocommerce_my_account]'); ?>
                    </div>
                </div>
            </div>
         </div>
    </div>
</div>

<?php get_template_part('elements/e', 'modal'); ?>

<?php get_footer(); ?>