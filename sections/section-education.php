<?php if(true == get_theme_mod( 'education_switch_setting', 'on')) { ?>
<section class="section-education">
    <div class="container">
        <?php if ( get_theme_mod( 'edu_title' ) ) { ?>
            <h2 class="section-title">
                <?php echo esc_html( get_theme_mod( 'edu_title' ) ); ?>
            </h2>
        <?php } ?>
        <?php
        $education_item_settings = get_theme_mod( 'education_list', array() );
        ?>
        <div class="section-wrap">
            <?php foreach ( $education_item_settings as $setting ) : ?>
                <div class="item">
                    <div class="time-spent"><?php echo $setting['date']; ?></div>
                    <div class="item-content">
                        <h4><?php echo $setting['text']; ?></h4>
                        <p><?php echo $setting['desc']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php } ?>