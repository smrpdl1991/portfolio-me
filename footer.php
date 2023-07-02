<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portfolio-me
 */

?>
</div>
    <?php if ( true == get_theme_mod( 'switch_setting_for_footer', 'on' ) ) : ?>
        <footer class="site-footer"  id="colophon">
            <div class="container">
                <section class="footer-cta">
                    <div class="call-to-action">
                        <h2>
                            <div class="figure-wrap support">
                            <figure>
                                <?php 
                                    $image_id = get_theme_mod( 'footer_profile_image' ); 
                                    // var_dump('image-id', $image_id);
                                    $image_url = wp_get_attachment_image_url( $image_id, 'full' ); 
                                    // var_dump('image-id', $image_url);
                                    if ( $image_id ) {
                                        echo '<img src="' . esc_url( $image_id ) . '" alt="My Image">';
                                    }
                                ?>
                            </figure> 
                            <span class="online-check" style="background-color:<?php echo get_theme_mod( 'online_check', '#ff000f' ); ?>"></span>
                        </div>
                        <?php echo esc_html(get_theme_mod( 'title_footer' )) ?>
                        </h2>
                    </div>
                    <div class="bttn-wrap">
                        <a href="<?php echo esc_html(get_theme_mod( 'footer_button_url' )) ?>" class="bttn bttn-black bttn-small">
                            <?php echo esc_html(get_theme_mod( 'footer_button_label' )) ?>
                        </a>
                    </div>
                </section>
                <div class="footer-bottom">
                    <div class="site-info">
                        <?php
                            printf( esc_html__( '© 2023 All Rights Reserved.' ));
                        ?>
                    </div><!-- .site-info -->
                    <div class="footer-menu">
                    <?php
                        if (has_nav_menu('menu-2')) {
                            wp_nav_menu(array(
                                'theme_location' => 'menu-2',
                                'container' => 'nav',
                                'container_class' => 'footer-navigation',
                                'depth' => 1, // Set the depth to 1
                            ));
                        }
                        ?>
                    </div>
                </div>
            </div>
        </footer>
    <?php endif ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
