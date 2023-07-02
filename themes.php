<?php
/**
 * Template Name: Theme
 * Description: A custom Theme template.
 *
 * @package Portfolio Me
 */

get_header(); 
?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
            $files = array(
                'section-theme.php',
                'section-my-work.php',
            );

            foreach ($files as $file) {
                require_once get_template_directory() . '/sections/' . $file;
            }
        ?>
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
