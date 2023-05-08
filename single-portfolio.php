<?php
/**
 * The template for displaying all single posts for portfolio
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package portfolio-me
 */

get_header();
?>

	<main id="primary" class="site-main section-project-detail">

		<?php
		while ( have_posts() ) :
			the_post();

            // Display the portfolio content
			?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="container">
                    <div class="heading-wrap">
                        <div class="heading">
                            <header class="entry-header">
                                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                            </header><!-- .entry-header -->
                            <?php the_excerpt('<p>','</p>'); ?>
                        </div>
                        <div class="back-bttn">
                            <a href="<?php echo bloginfo('url')?>">Back to home</a>
                        </div>
                    </div>
                </div>
                <div class="featured-image">
                    <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('large', array('class' => 'image-full', 'alt' => 'featured image'));
                        }
                    ?>
                </div>
                <div class="container">
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div><!-- .entry-content -->
                </div>
            </article><!-- #post-<?php the_ID(); ?> -->
            <div class="container">
                <?php
                the_post_navigation(
                    array(
                        'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'portfolio-me' ) . '</span> <span class="nav-title">%title</span>',
                        'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'portfolio-me' ) . '</span> <span class="nav-title">%title</span>',
                    )
                );
                ?>
            </div>
            <?php
			

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				?> <div class="container"><?php comments_template(); ?></div>
			<?php endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
