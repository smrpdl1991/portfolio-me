<?php if(true == get_theme_mod('switch_themes-setting', 'on')){ ?>
<section class="section-themes">
    <div class="container">
        <?php if(get_theme_mod('title_themes')){ ?>
        <h2><?php echo esc_html(get_theme_mod('title_themes')) ?></h2>
        <?php } ?>
        <div class="section-wrap">
            <?php 
                $workwith_item_settings = get_theme_mod( 'themes-setting', array() );
                foreach ( $workwith_item_settings as $setting ) : ?>
            <div class="item">
                <?php
                    $image_id = $setting['image'];
                    $image_alt = get_post_meta( $image_id, '_wp_attachment_image_alt', true );
                ?>
                <figure>
                    <?php
                        if ( $image_id ) {
                            echo '<img src="' . esc_url( $image_id ) . '" alt="' . esc_attr( $image_alt ) . '">';
                        }
                    ?>
                </figure>
                <div class="content">
                    <h4><?php echo $setting['title']; ?></h4>
                    <div class="description">
                        <p><?php echo $setting['desc']; ?></p>
                    </div>
                    <div class="price">
                        <span class="label">Price: </span>
                        <?php if ($setting['cutprice']) { ?>
                        <span class="cut-price"><?php echo $setting['cutprice']; ?></span>
                        <?php } ?>

                        <?php if ($setting['price']) { ?>
                        <span class="real-price"><?php echo $setting['price']; ?></span>
                        <?php } ?>
                    </div>
                    <div class="bttn-wrap">
                        <a href="<?php echo  $setting['buy']; ?>" class="bttn bttn-black bttn-small"
                            id="<?php echo $setting['buy_id']; ?>">
                            Buy Now
                        </a>
                        <a href="<?php echo $setting['detail'];  ?>" class="bttn bttn-black bttn-small">
                            Detail Page
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php } ?>