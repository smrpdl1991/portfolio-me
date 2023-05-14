<?php if(true == get_theme_mod('switch_we_work-setting', 'on')){ ?>
<section class="section-we-work-with">
    <div class="container">
        <?php if(get_theme_mod('title_work_with')){ ?>
            <h2><?php echo esc_html(get_theme_mod('title_work_with')) ?></h2>
        <?php } ?>
        <div class="section-wrap">

            <?php 
                $workwith_item_settings = get_theme_mod( 'we-work-with-setting', array() );
                foreach ( $workwith_item_settings as $setting ) : ?>
                <div class="item">
                    <h4><?php echo $setting['title']; ?></h4>
                    <p><?php echo $setting['desc']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php } ?>