<?php
/**
 * Template Name: Portfolio Archive
 * Description: A custom template for displaying the archive of Portfolio items.
 *
 * @package Portfolio Me
 */

get_header(); 

$args = array(
    'post_type' => 'portfolio',
    'posts_per_page' => 2, 
    'paged' => get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1, // This is needed to enable pagination
);

$portfolio_query = new WP_Query( $args );
?>
<section id="primary" class="content-area">
    <div class="container">
        <main id="main" class="site-main">
    
            <?php if ( $portfolio_query->have_posts() ) : ?>
    
                <header class="page-header">
                    <h1 class="page-title"><?php esc_html_e( 'Portfolio', 'portfolio-me' ); ?></h1>
                </header>
                <div class="portfolio-wrap">
                    <?php while ( $portfolio_query->have_posts() ) : $portfolio_query->the_post(); ?>
    
                        <?php get_template_part( 'template-parts/content', 'portfolio' ); ?>
    
                    <?php endwhile; ?>
                </div>
                
                <?php echo portfolio_me_pagination(); ?>
                <?php wp_reset_postdata();?>
                
    
            <?php else : ?>
    
                <?php get_template_part( 'template-parts/content', 'none' ); ?>
    
            <?php endif; ?>
    
    
        </main><!-- #main -->
    </div>
</section><!-- #primary -->

<?php get_footer(); ?>
