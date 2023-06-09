<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <figure><?php the_post_thumbnail(); ?></figure>
    <h3><?php echo the_title() ?></h3>
    <div class="entry-content">
        <div class="link-label">
            <a href="<?php the_permalink(); ?>" class="read-more"><?php esc_html_e( 'Read More', 'portfolio-me' ); ?></a>
        </div>
    </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->