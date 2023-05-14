<?php
/**
 * Template Name: Portfolio Archive
 * Description: A custom template for displaying the archive of Portfolio items.
 *
 * @package Portfolio Me
 */

get_header(); 

$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

$args = array(
	'post_type'      => 'portfolio',
	'posts_per_page' => get_option( 'posts_per_page' ),
	'paged'          => $paged
);

$portfolio_query = new WP_Query( $args );
?>
<div id="primary" class="content-area">
    
        <main id="main" class="site-main">
            <section class="portfolio-archieve-section">
                <div class="container">
                    <div class="section-wrap">
                        <?php if ( $portfolio_query->have_posts() ) : ?>
                
                            <header class="page-header">
                                <h1 class="page-title"><?php esc_html_e( 'Portfolio', 'portfolio-me' ); ?></h1>
                            </header>
                            <div class="portfolio-wrap">
                                <?php while ( $portfolio_query->have_posts() ) : $portfolio_query->the_post(); ?>
                
                                    <?php get_template_part( 'template-parts/content', 'portfolio' ); ?>
                
                                <?php endwhile; ?>
                            </div>
                           
                           
                            <?php
                                // Display the pagination.
                                the_posts_pagination(
                                    array(
                                        'prev_text' => __( 'Previous', 'textdomain' ),
                                        'next_text' => __( 'Next', 'textdomain' ),
                                    )
                                );

                                // Restore original Post Data.
                                wp_reset_postdata();
                            ?>
                
                            <?php else : ?>
                    
                                <?php get_template_part( 'template-parts/content', 'none' ); ?>
                    
                            <?php endif; ?>
                    </div>
                </div>
            </section>
    
    
        </main><!-- #main -->
    
</div><!-- #divprimary -->

<?php get_footer(); ?>
