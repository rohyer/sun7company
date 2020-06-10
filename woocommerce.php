<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">

				<?php
				if ( is_active_sidebar('sidebar-1') ) {
					dynamic_sidebar('sidebar-1');
				}
				if ( is_active_sidebar('sidebar-2') ) {
					dynamic_sidebar('sidebar-2');
				}
				if ( is_active_sidebar('sidebar-3') ) {
					dynamic_sidebar('sidebar-3');
				}
				?>
				

				<?php woocommerce_content(); ?>

			</div>

			

		</main><!-- #main -->
	</section><!-- #primary -->

<?php

get_template_part('elements/e', 'leads');

get_footer();
?>