<?php get_header(); ?>

<div id="page-register">
    <div class="black-mask"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="main-box-register">
                    <div class="title-box-register">Identifique-se</div>
                    <div class="content-box-register">
                        <?php echo do_shortcode('[woocommerce_my_account]'); ?>
                    </div>
                </div>
            </div>
         </div>
    </div>
</div>

<?php get_footer(); ?>