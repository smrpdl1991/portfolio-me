<?php if(true == get_theme_mod('selected_work_switch', 'on')) { ?>
<section class="section-my-work" id="section-my-work">
    <div class="container">
        <div class="heading">
            <h2 class="section-title"><?php echo get_theme_mod('selected_work_title'); ?></h2>
            <div class="desc">
                <p><?php echo get_theme_mod('selected_work_desc'); ?></p>
            </div>
        </div>
        <div class="section-wrap">
            <?php
            // Retrieve the selected portfolio items
            $selected_items = get_theme_mod('selected_work_select', array());

            if (is_array($selected_items)) {
                foreach ($selected_items as $item_id) {
                    $item = get_post($item_id);
                    if ($item) {
                        $item_title = get_the_title($item);
                        $item_description = get_the_excerpt($item);
                        $item_image = get_the_post_thumbnail_url($item, 'thumbnail');
                        ?>
                        <div class="work-item">
                            <div class="item-headings">
                                <h4><?php echo $item_title; ?></h4>
                                <div class="desc"><?php echo $item_description; ?></div>
                            </div>
                            <div class="date">/22</div>
                            <div class="project-info">
                                <a href="<?php echo get_permalink($item); ?>">
                                    <img src="<?php echo $item_image; ?>" alt="<?php echo $item_title; ?>">
                                </a>
                            </div>
                        </div>
                        <?php
                    }
                }
            }
            ?>
        </div>
        <div class="view-more-bttn">
            <a href="<?php echo get_theme_mod('selected_work_view_more_link'); ?>" class="bttn"><?php echo get_theme_mod('selected_work_view_more_label'); ?></a>
        </div>
        <div class="see-more">
            <h2><?php echo get_theme_mod('cta_title_work'); ?></h2>
            <span><?php echo esc_html__('cta_desc_work'); ?> <a href="<?php echo esc_url(get_theme_mod('cta_desc_link')); ?>"><?php echo get_theme_mod('cta_desc_link_label'); ?></a></span>
        </div>
    </div>
</section>
<?php } ?>