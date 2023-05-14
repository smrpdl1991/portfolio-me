<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portfolio-me
 */

get_header();
?>
	<main id="primary" class="site-main">
		<section class="section-archieve portfolio-archieve-section">
			<div class="container">
				<div class="section-wrap">
					<?php if ( have_posts() ) : ?>

						<header class="page-header">
							<?php
							the_archive_title( '<h1 class="page-title">', '</h1>' );
							?>
						</header><!-- .page-header -->
						<div class="portfolio-wrap">
							<?php
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();

								/*
								* Include the Post-Type-specific template for the content.
								* If you want to override this in a child theme, then include a file
								* called content-___.php (where ___ is the Post Type name) and that will be used instead.
								*/
								get_template_part( 'template-parts/content-article');

							endwhile;
							?>
						</div>
					<?php
						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
					?>
				</div>
		</div>
		</section>
	</main><!-- #main -->

<?php
get_footer();
