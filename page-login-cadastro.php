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

                        <!-- <div id="first-register" class="col-6">
                            <h6>Primeira compra?</h6>
                            <a class="btn btn-primary" data-toggle="modal" data-target="#registerModal">
                                Cadastre-se
                            </a>

                            <div id="text-register">
                                <i class="fas fa-shopping-cart"></i>
                                <span>Cadastre seu endereço para facilitar nas suas próximas compras</span>
                            </div>

                            
                        </div> -->
                    </div>
                </div>
            </div>
         </div>
    </div>
</div>

<?php get_template_part('elements/e', 'modal'); ?>

<?php get_footer(); ?>