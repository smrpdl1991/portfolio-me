<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <figure><?php the_post_thumbnail(); ?></figure>
        <div class="desc"><?php the_excerpt(); ?></div>
        <div class="link-label">
            <a href="<?php the_permalink(); ?>" class="read-more"><?php esc_html_e( 'Read More', 'portfolio-me' ); ?></a>
        </div>
    </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->