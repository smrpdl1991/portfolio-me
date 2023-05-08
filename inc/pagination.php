<?php function portfolio_me_pagination() {
    the_posts_pagination( array(
        'mid_size' => 2,
        'prev_text' => __( 'Previous', 'portfolio-me' ),
        'next_text' => __( 'Next', 'portfolio-me' ),
        'screen_reader_text' => __( 'Posts navigation', 'portfolio-me' ),
    ) );
}
?>
