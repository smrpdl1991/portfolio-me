<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <figure>
        <?php portfolio_me_post_thumbnail(); ?>       
    </figure>
	<?php
		the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
	?>
    <div class="entry-content">
        <div class="link-label">
            <a href="<?php the_permalink(); ?>" class="read-more"><?php esc_html_e( 'Read More', 'portfolio-me' ); ?></a>
        </div>
    </div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->