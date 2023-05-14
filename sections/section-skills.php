<?php
    $experience_item_settings = get_theme_mod( 'Experience_list', array() );
    $skills_item_settings = get_theme_mod( 'Skills_list', array() );
?>
<?php if(true == get_theme_mod( 'switch_setting_skills', 'on')) { ?>
    <section class="section-skills">
                <div class="container">
                    <div class="heading">
                        <?php if(get_theme_mod('title_experience')){ ?>
                            <h2 class="section-title"><?php echo esc_html(get_theme_mod('title_experience')) ?></h2>
                        <?php } ?>
                        <?php if(get_theme_mod('desc_experience')){ ?>
                            <div class="desc">
                                <p>
                                    <?php echo esc_html(get_theme_mod('desc_experience')) ?>
                                </p>
                            </div>
                        <?php } ?>
                    </div>
                    <?php if($experience_item_settings){ ?>
                        <div class="experience-wrap">
                            <?php foreach ( $experience_item_settings as $setting ) : ?>
                                <div class="item">
                                    <div class="time-experienced">
                                        <p><?php echo $setting['date']; ?></p>
                                    </div>
                                    <div class="content">
                                        <div class="accordian-title">
                                            <div class="experienced-at">
                                                <h4><?php echo $setting['textTitle']; ?></h4>
                                                <p><?php echo $setting['office']; ?></p>
                                            </div>
                                            <div class="icon">
                                                <span class="plus">
                                                    <svg width="26" height="25" viewBox="0 0 26 25" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M24.0001 14.8332H14.8334V23.9998C14.8334 25.0082 14.0084 25.8332 13.0001 25.8332C11.9917 25.8332 11.1667 25.0082 11.1667 23.9998V14.8332H2.00008C0.991748 14.8332 0.166748 14.0082 0.166748 12.9998C0.166748 11.9915 0.991748 11.1665 2.00008 11.1665H11.1667V1.99984C11.1667 0.991504 11.9917 0.166504 13.0001 0.166504C14.0084 0.166504 14.8334 0.991504 14.8334 1.99984V11.1665H24.0001C25.0084 11.1665 25.8334 11.9915 25.8334 12.9998C25.8334 14.0082 25.0084 14.8332 24.0001 14.8332Z"
                                                            fill="black" />
                                                    </svg>

                                                </span>
                                                <span class="cross">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" version="1.1" id="Capa_1" width="800px" height="800px" viewBox="0 0 348.333 348.334" xml:space="preserve">
                                                    <g>
                                                        <path d="M336.559,68.611L231.016,174.165l105.543,105.549c15.699,15.705,15.699,41.145,0,56.85   c-7.844,7.844-18.128,11.769-28.407,11.769c-10.296,0-20.581-3.919-28.419-11.769L174.167,231.003L68.609,336.563   c-7.843,7.844-18.128,11.769-28.416,11.769c-10.285,0-20.563-3.919-28.413-11.769c-15.699-15.698-15.699-41.139,0-56.85   l105.54-105.549L11.774,68.611c-15.699-15.699-15.699-41.145,0-56.844c15.696-15.687,41.127-15.687,56.829,0l105.563,105.554   L279.721,11.767c15.705-15.687,41.139-15.687,56.832,0C352.258,27.466,352.258,52.912,336.559,68.611z"/>
                                                    </g>
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="desc">
                                            <p>
                                                <?php echo $setting['office']; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php } ?>
                    
                    <?php if ( $skills_item_settings ) { ?>
                        <div class="skills-wrap">
                            <?php foreach ( $skills_item_settings as $setting ) : ?>
                                <div class="skill-item">
                                    <figure>
                                        <?php
                                        $image_id = $setting['image'];
                                        $image_url = wp_get_attachment_image_url( $image_id, 'full' );
                                        if ( $image_url ) {
                                            echo '<img src="' . esc_url( $image_url ) . '" alt="">';
                                        }
                                        ?>
                                    </figure>
                                    <p><?php echo $setting['text']; ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php } ?>

                </div>
    </section>
<?php } ?>