<?php
/**
 * Template Name: Homepage
 * Description: A custom Homepage template.
 *
 * @package Portfolio Me
 */

get_header(); 
?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
            $files = array(
                'section-about.php',
                'section-education.php',
                'section-skills.php',
                'section-we-work-with.php',
                'section-my-process.php',
                'section-my-work.php',
            );

            foreach ($files as $file) {
                require_once get_template_directory() . '/sections/' . $file;
            }
        ?>
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
