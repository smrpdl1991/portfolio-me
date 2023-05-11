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
	<footer class="site-footer"  id="colophon">
        <div class="container">
            <section class="footer-cta">
                <div class="call-to-action">
                    <h2>
                        <div class="figure-wrap support">
                        <figure>
                            <img src="assets/image/ketan.png" alt="Ketan Maharjan">
                        </figure> <span class="online-check"></span></div>Let’s talk about a project, collaboration or an idea you may have
                        
                        
                    </h2>
                </div>
                <div class="bttn-wrap">
                    <a href="mailTo:" class="bttn bttn-black bttn-small">Lets get in touch</a>
                </div>
            </section>
            <div class="footer-bottom">
				<div class="site-info">
					<?php
						printf( esc_html__( '© 2023 All Rights Reserved. Design & Coded with ❤️' ));
					?>
				</div><!-- .site-info -->
                <div class="footer-menu">
                    <nav class="footer-navigation">
                        <ul>
                            <li><a href="">Dribble</a></li>
                            <li><a href="">Behance</a></li>
                            <li><a href="">Linkedin</a></li>
                            <li><a href="">Instagram</a></li>
                            <li><a href="">Email</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
