<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portfolio-me
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'portfolio-me' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="hgroup">
				<div class="site-branding">
					<?php
					the_custom_logo();
					if ( is_front_page() && is_home() ) :
						?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
					else :
						?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
					endif;
					$portfolio_me_description = get_bloginfo( 'description', 'display' );
					if ( $portfolio_me_description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo $portfolio_me_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->
				<div class="navbar">
					<?php if ( true == get_theme_mod( 'header_button_switch', 'on' ) ) : ?>
						<div class="header-information">
							<a href="<?php echo esc_html(get_theme_mod( 'header_button_url' )) ?>" class="bttn bttn-black bttn-large">
								<?php echo esc_html(get_theme_mod( 'header_button_text' )) ?>
							</a>
						</div>
					<?php endif; ?>
					<nav id="site-navigation" class="main-navigation">
						<span class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
							<svg width='30' height='30' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="menu"><g data-name="Layer 2"><g data-name="menu"><rect width="18" height="2" x="3" y="11" rx=".95" ry=".95"/><rect width="18" height="2" x="3" y="16" rx=".95" ry=".95"/><rect width="18" height="2" x="3" y="6" rx=".95" ry=".95"/></g></g></svg>
						</span>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
						?>
					</nav><!-- #site-navigation -->
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
<div class="site-content">
