<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package portfolio-me
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<div class="container">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( '404 !!', 'portfolio-me' ); ?></h1>
					<h2><?php esc_html_e( 'Page Not Found.', 'portfolio-me' ); ?></h2>
				</header><!-- .page-header -->
	
				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below :', 'portfolio-me' ); ?></p>
				</div><!-- .page-content -->

				<div class="bttn-wrap">
					<a href="<?php echo bloginfo('url')?>">Back to home</a>
				</div>
			</div>
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
