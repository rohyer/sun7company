<?php get_header(); ?>

	<section id="primary" class="content-area page-not-found">
        <div class="container">
            <main id="main" class="site-main">

                <div class="error-404 not-found">
                    <header class="page-header">
                        <h1 class="page-title"><?php _e( 'Oops! Essa página não foi encontrada.', 'sun7company' ); ?></h1>
                    </header><!-- .page-header -->

                    <div class="page-content">
                        <p><?php _e( 'Parece que nada foi encontrado aqui. Tente voltar a página principal', 'sun7company' ); ?></p>
                        <p><a href="<?php echo home_url( '/' ); ?>">Voltar</a></p>
                    </div><!-- .page-content -->
                </div><!-- .error-404 -->

            </main><!-- #main -->
        </div>
	</section><!-- #primary -->

<?php
get_footer();
