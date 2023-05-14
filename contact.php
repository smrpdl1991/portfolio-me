<?php
/**
 * Template Name: Contact Us
 * Description: A custom Contact Us template.
 *
 * @package Portfolio Me
 */

get_header(); 
?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">
       <section class='section-contact-us'>
            <div class="container">
                <div class="section-wrap">
                    <h1><?php the_title(); ?></h1>
                    <div class='content'><?php the_content(); ?></div>
                </div>
            </div>
       </section>
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
