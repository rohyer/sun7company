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
				if ( is_active_sidebar('sidebar-1') || is_active_sidebar('sidebar-2') ) { ?>
					<?php if ( !is_product() ) { ?>
						<div class="row">
							<div class="d-none d-lg-block col-lg-3">
								<div id="main-filter">
									<?php dynamic_sidebar('sidebar-1'); ?>
								</div>
							</div>
							<div class="col-12 d-lg-none">
								<div id="mobile-filter">
									<?php dynamic_sidebar('sidebar-2'); ?>
								</div>
							</div>
							<div class="col-12 col-lg-9">
								<div id="sun-woocommerce-content">
									<?php woocommerce_content(); ?>
								</div>
							</div>
						</div>
					<?php } else { ?>
						<?php woocommerce_content(); ?>
					<?php } ?>
				<?php }
				?>
				

				

			</div>

			

		</main><!-- #main -->
	</section><!-- #primary -->

<?php

get_template_part('elements/e', 'leads');

get_footer();
?>