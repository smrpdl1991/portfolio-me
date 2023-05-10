<?php

// About Us section Controller start

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'switch_setting',
		'label'       => esc_html__( 'Enable/Disable', 'portfolio-me' ),
		'description' => esc_html__( 'ON/OFF', 'portfolio-me' ),
		'section'     => 'aboutus_id',
		'default'     => 'on',
		'priority'    => 1,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'portfolio-me' ),
			'off' => esc_html__( 'Disable', 'portfolio-me' ),
		],
	]
);

new \Kirki\Field\Repeater(
	[
		'settings'     => 'about-title',
		'label'        => esc_html__( 'Title', 'portfolio-me' ),
		'section'      => 'aboutus_id',
		'priority'     => 3,
		'row_label'    => [
			'type'  => 'field',
			'value' => esc_html__( 'Title', 'portfolio-me' ),
			'field' => 'text_field',
		],
		'button_label' => esc_html__( '"Add new Title" ', 'portfolio-me' ),
		'default'      => [
			[
				'text'   => esc_html__( 'Title', 'portfolio-me' ),
			],
		],
		'fields'       => [
			'text_field'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Title', 'portfolio-me' ),
				'default'     => '',
			],
		],
	]
);


new \Kirki\Field\Background(
	[
		'settings'    => 'background_setting',
		'label'       => esc_html__( 'Background Control', 'portfolio-me' ),
		'description' => esc_html__( 'Background settings for About Us Section', 'portfolio-me' ),
		'section'     => 'aboutus_id',
		'priority'     => 2,
		'default'     => [
			'background-color'      => '',
			'background-image'      => '',
			'background-repeat'     => 'no-repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'scroll',
		],
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => '.section-about',
			],
		],
	]
);

new \Kirki\Field\Textarea(
	[
		'settings'    => 'descrition',
		'label'       => esc_html__( 'Description Area', 'portfolio-me' ),
		'section'     => 'aboutus_id',
		'default'     => esc_html__( 'Desciption Area', 'portfolio-me' ),
	]
);
new \Kirki\Field\Textarea(
	[
		'settings'    => 'specialized-setting',
		'label'       => esc_html__( 'specialized Area', 'portfolio-me' ),
		'section'     => 'aboutus_id',
		'default'     => esc_html__( 'specialized Area', 'portfolio-me' ),
	]
);

new \Kirki\Field\URL(
	[
		'settings' => 'url_setting',
		'label'    => esc_html__( 'Icon Link To', 'portfolio-me' ),
		'section'  => 'aboutus_id',
		'default'  => '#section-my-work',
		'priority' => 10,
	]
);

// About Us section Controller end
// Education section Controller start

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'switch_setting2',
		'label'       => esc_html__( 'Enable/Disable', 'portfolio-me' ),
		'description' => esc_html__( 'ON/OFF', 'portfolio-me' ),
		'section'     => 'education_id',
		'default'     => 'on',
		'priority'    => 1,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'portfolio-me' ),
			'off' => esc_html__( 'Disable', 'portfolio-me' ),
		],
	]
);
new \Kirki\Field\Background(
	[
		'settings'    => 'background_setting2',
		'label'       => esc_html__( 'Background Control', 'portfolio-me' ),
		'description' => esc_html__( 'Background settings for About Us Section', 'portfolio-me' ),
		'section'     => 'education_id',
		'priority'     => 2,
		'default'     => [
			'background-color'      => '',
			'background-image'      => '',
			'background-repeat'     => 'no-repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'scroll',
		],
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => '.section-education',
			],
		],
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'title setting',
		'label'    => esc_html__( 'Title', 'portfolio-me' ),
		'section'  => 'education_id',
		'default'  => esc_html__( 'Education', 'portfolio-me' ),
		'priority' => 2,
	]
);

new \Kirki\Field\Repeater(
	[
		'settings'     => 'education list',
		'label'        => esc_html__( 'Education Gained', 'portfolio-me' ),
		'section'      => 'education_id',
		'priority'     => 10,
		'row_label'    => [
			'type'  => 'field',
			'value' => esc_html__( 'Education', 'portfolio-me' ),
			'field' => 'text',
		],
		'button_label' => esc_html__( '"Add new Education you Gained" ', 'portfolio-me' ),
		
		'fields'       => [
			'text'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Education Name', 'portfolio-me' ),
				'description' => esc_html__( 'Education Name', 'portfolio-me' ),
				'default'     => '',
			],
			'desc'    => [
				'type'        => 'textarea',
				'label'       => esc_html__( 'Description of Education', 'portfolio-me' ),
				'description' => esc_html__( 'Description of Education', 'portfolio-me' ),
				'default'     => '',
			],
            'date'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'Date of Completion', 'portfolio-me' ),
				'description' => esc_html__( 'Date of Completion', 'portfolio-me' ),
				'default'     => '',
			],
		],
	]
);
// Education section Controller end
// section-skills Controller start
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'switch_setting3',
		'label'       => esc_html__( 'Enable/Disable', 'portfolio-me' ),
		'description' => esc_html__( 'ON/OFF', 'portfolio-me' ),
		'section'     => 'Experience_id',
		'default'     => 'on',
		'priority'    => 1,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'portfolio-me' ),
			'off' => esc_html__( 'Disable', 'portfolio-me' ),
		],
	]
);
new \Kirki\Field\Background(
	[
		'settings'    => 'background_setting3',
		'label'       => esc_html__( 'Background Control', 'portfolio-me' ),
		'description' => esc_html__( 'Background settings for Skills & experience', 'portfolio-me' ),
		'section'     => 'Experience_id',
		'priority'     => 2,
		'default'     => [
			'background-color'      => '',
			'background-image'      => '',
			'background-repeat'     => 'no-repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'scroll',
		],
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => '.section-skills',
			],
		],
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'title setting for experience',
		'label'    => esc_html__( 'Title', 'portfolio-me' ),
		'section'  => 'Experience_id',
		'default'  => esc_html__( 'Title', 'portfolio-me' ),
		'priority' => 2,
	]
);
new \Kirki\Field\Textarea(
	[
		'settings'    => 'textarea_setting',
		'label'       => esc_html__( 'Description', 'portfolio-me' ),
		'section'     => 'Experience_id',
		'default'     => esc_html__( 'Description', 'portfolio-me' ),
	]
);

new \Kirki\Field\Repeater(
	[
		'settings'     => 'Experience_list',
		'label'        => esc_html__( 'Experience List', 'portfolio-me' ),
		'section'      => 'Experience_id',
		'priority'     => 10,
		'row_label'    => [
			'type'  => 'field',
			'value' => esc_html__( 'Experience', 'portfolio-me' ),
			'field' => 'text',
		],
		'button_label' => esc_html__( '"Add new Experience you Gained" ', 'portfolio-me' ),
		
		'fields'       => [
			'textTitle'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Experience Name', 'portfolio-me' ),
				'description' => esc_html__( 'Experience Name', 'portfolio-me' ),
				'default'     => '',
			],
            'office'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Experienced At', 'portfolio-me' ),
				'description' => esc_html__( 'Experienced At', 'portfolio-me' ),
				'default'     => '',
			],
			'desc'    => [
				'type'        => 'textarea',
				'label'       => esc_html__( 'Description of Experience Name', 'portfolio-me' ),
				'description' => esc_html__( 'Description of Experience Name', 'portfolio-me' ),
				'default'     => '',
			],
            'date'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'Experience Time', 'portfolio-me' ),
				'description' => esc_html__( 'Experience Time (2020 - 2022)', 'portfolio-me' ),
				'default'     => '',
			],
		],
	]
);
new \Kirki\Field\Repeater(
	[
		'settings'     => 'Skills_list',
		'label'        => esc_html__( 'Skills List', 'portfolio-me' ),
		'section'      => 'Experience_id',
		'priority'     => 10,
		'row_label'    => [
			'type'  => 'field',
			'value' => esc_html__( 'Skills', 'portfolio-me' ),
			'field' => 'text',
		],
		'button_label' => esc_html__( '"Add new Skills" ', 'portfolio-me' ),
		'fields'       => [
			'text'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Skills Name', 'portfolio-me' ),
				'description' => esc_html__( 'Skills Name', 'portfolio-me' ),
				'default'     => '',
			],
            'image'   => [
				'type'        => 'image',
				'label'       => esc_html__( 'Image', 'portfolio-me' ),
				'description' => esc_html__( 'Image', 'portfolio-me' ),
				'default'     => '',
			],
			'desc'    => [
				'type'        => 'url',
				'label'       => esc_html__( 'Link', 'portfolio-me' ),
				'description' => esc_html__( 'Link', 'portfolio-me' ),
				'default'     => '',
			],
		],
	]
);
// section-skills Controller end
//section we work with controller start

//section we work with controller end
//we-work-with section controller start
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'switch_setting4',
		'label'       => esc_html__( 'Enable/Disable', 'portfolio-me' ),
		'description' => esc_html__( 'ON/OFF', 'portfolio-me' ),
		'section'     => 'we-work-with',
		'default'     => 'on',
		'priority'    => 1,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'portfolio-me' ),
			'off' => esc_html__( 'Disable', 'portfolio-me' ),
		],
	]
);
new \Kirki\Field\Background(
	[
		'settings'    => 'background_setting4',
		'label'       => esc_html__( 'Background Control', 'portfolio-me' ),
		'description' => esc_html__( 'Background settings for section', 'portfolio-me' ),
		'section'     => 'we-work-with',
		'priority'     => 2,
		'default'     => [
			'background-color'      => '',
			'background-image'      => '',
			'background-repeat'     => 'no-repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'scroll',
		],
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => '.section-we-work-with',
			],
		],
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'title setting',
		'label'    => esc_html__( 'Title', 'portfolio-me' ),
		'section'  => 'we-work-with',
		'default'  => esc_html__( 'Title', 'portfolio-me' ),
		'priority' => 3,
	]
);
new \Kirki\Field\Repeater(
	[
		'settings'     => 'we-work-with-setting',
		'label'        => esc_html__( 'we work with List', 'portfolio-me' ),
		'section'      => 'we-work-with',
		'priority'     => 10,
		'row_label'    => [
			'type'  => 'field',
			'value' => esc_html__( 'we-work-with', 'portfolio-me' ),
			'field' => 'text',
		],
		'button_label' => esc_html__( '"Add new " ', 'portfolio-me' ),
		'fields'       => [
			'title'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Title', 'portfolio-me' ),
				'description' => esc_html__( 'Title', 'portfolio-me' ),
				'default'     => '',
			],
			'desc'    => [
				'type'        => 'textarea',
				'label'       => esc_html__( 'Description', 'portfolio-me' ),
				'description' => esc_html__( 'Description', 'portfolio-me' ),
				'default'     => '',
			],
		],
	]
);

//we-work-with section controller end
//my-process section controller start

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'switch_setting5',
		'label'       => esc_html__( 'Enable/Disable', 'portfolio-me' ),
		'description' => esc_html__( 'ON/OFF', 'portfolio-me' ),
		'section'     => 'my-process',
		'default'     => 'on',
		'priority'    => 1,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'portfolio-me' ),
			'off' => esc_html__( 'Disable', 'portfolio-me' ),
		],
	]
);
new \Kirki\Field\Background(
	[
		'settings'    => 'background_setting5',
		'label'       => esc_html__( 'Background Control', 'portfolio-me' ),
		'description' => esc_html__( 'Background settings for section', 'portfolio-me' ),
		'section'     => 'my-process',
		'priority'     => 2,
		'default'     => [
			'background-color'      => '',
			'background-image'      => '',
			'background-repeat'     => 'no-repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'scroll',
		],
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => '.section-my-process',
			],
		],
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'title setting of process',
		'label'    => esc_html__( 'Title', 'portfolio-me' ),
		'section'  => 'my-process',
		'default'  => esc_html__( 'Title', 'portfolio-me' ),
		'priority' => 3,
	]
);
new \Kirki\Field\Textarea(
	[
		'settings'    => 'textarea_setting of my-process',
		'label'       => esc_html__( 'Textarea Control', 'portfolio-me' ),
		'section'     => 'my-process',
		'default'     => esc_html__( 'This is a default value', 'portfolio-me' ),
	]
);
new \Kirki\Field\Repeater(
	[
		'settings'     => 'my-process-setting',
		'label'        => esc_html__( 'my-process List', 'portfolio-me' ),
		'section'      => 'my-process',
		'priority'     => 10,
		'row_label'    => [
			'type'  => 'field',
			'value' => esc_html__( 'my-process', 'portfolio-me' ),
			'field' => 'text',
		],
		'button_label' => esc_html__( '"Add new " ', 'portfolio-me' ),
		'fields'       => [
			'title'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Title', 'portfolio-me' ),
				'description' => esc_html__( 'Title', 'portfolio-me' ),
				'default'     => '',
			],
			'desc'    => [
				'type'        => 'textarea',
				'label'       => esc_html__( 'Description', 'portfolio-me' ),
				'description' => esc_html__( 'Description', 'portfolio-me' ),
				'default'     => '',
			],
		],
	]
);
//my-process section controller end
//selected work section controller start
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'switch_setting6',
		'label'       => esc_html__( 'Enable/Disable', 'portfolio-me' ),
		'description' => esc_html__( 'ON/OFF', 'portfolio-me' ),
		'section'     => 'selected-work',
		'default'     => 'on',
		'priority'    => 1,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'portfolio-me' ),
			'off' => esc_html__( 'Disable', 'portfolio-me' ),
		],
	]
);
new \Kirki\Field\Background(
	[
		'settings'    => 'background_setting6',
		'label'       => esc_html__( 'Background Control', 'portfolio-me' ),
		'description' => esc_html__( 'Background settings for section', 'portfolio-me' ),
		'section'     => 'selected-work',
		'priority'     => 2,
		'default'     => [
			'background-color'      => '',
			'background-image'      => '',
			'background-repeat'     => 'no-repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'scroll',
		],
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => '.section-my-work',
			],
		],
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'title setting of work',
		'label'    => esc_html__( 'Title', 'portfolio-me' ),
		'section'  => 'selected-work',
		'default'  => esc_html__( 'Title', 'portfolio-me' ),
		'priority' => 3,
	]
);
new \Kirki\Field\Textarea(
	[
		'settings'    => 'textarea_setting of my work',
		'label'       => esc_html__( 'Textarea Control', 'portfolio-me' ),
		'section'     => 'selected-work',
		'default'     => esc_html__( 'This is a default value', 'portfolio-me' ),
	]
);
new \Kirki\Field\URL(
	[
		'settings' => 'More View',
		'label'    => esc_html__( 'Button Link', 'portfolio-me' ),
		'section'  => 'selected-work',
		'default'  => '',
		'priority' => 10,
	]
);
function custom_portfolio_choices() {
    // Retrieve the portfolio items dynamically
    $portfolio_items = get_posts(array(
        'post_type' => 'portfolio',
        'posts_per_page' => -1,
    ));

    $choices = array();

    foreach ($portfolio_items as $item) {
        $choices[$item->ID] = get_the_title($item->ID);
    }

    return $choices;
}
$choices = custom_portfolio_choices();

new \Kirki\Field\Select(
	[
		'settings'    => 'select_setting_2',
		'label'       => esc_html__( 'Select the portfolio items', 'portfolio-me' ),
		'description' => esc_html__( 'Multiselect example', 'portfolio-me' ),
		'section'     => 'selected-work',
		'default'     => 'option-3',
        'priority' => 4,
		'multiple'    => 4,
		'choices'     => $choices,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'cta title',
		'label'    => esc_html__( 'Title', 'portfolio-me' ),
		'section'  => 'selected-work',
		'default'  => esc_html__( 'Title', 'portfolio-me' ),
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'cta desc',
		'label'    => esc_html__( 'Description', 'portfolio-me' ),
		'section'  => 'selected-work',
		'default'  => esc_html__( 'Title', 'portfolio-me' ),
	]
);

//selected work section controller end

//footer start

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'switch_setting footer',
		'label'       => esc_html__( 'Enable/Disable', 'portfolio-me' ),
		'description' => esc_html__( 'ON/OFF', 'portfolio-me' ),
		'section'     => 'footer_section',
		'default'     => 'on',
		'priority'    => 1,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'portfolio-me' ),
			'off' => esc_html__( 'Disable', 'portfolio-me' ),
		],
	]
);
new \Kirki\Field\Background(
	[
		'settings'    => 'background setting Footer',
		'label'       => esc_html__( 'Background Control', 'portfolio-me' ),
		'description' => esc_html__( 'Background settings for Footer', 'portfolio-me' ),
		'section'     => 'footer_section',
		'priority'     => 2,
		'default'     => [
			'background-color'      => '',
			'background-image'      => '',
			'background-repeat'     => 'no-repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'scroll',
		],
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => '.site-footer',
			],
		],
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'title footer',
		'label'    => esc_html__( 'Title', 'portfolio-me' ),
		'section'  => 'footer_section',
		'default'  => esc_html__( 'Title', 'portfolio-me' ),
		'priority' => 3,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'Button Title',
		'label'    => esc_html__( 'Button Title', 'portfolio-me' ),
		'section'  => 'footer_section',
		'default'  => esc_html__( 'Title', 'portfolio-me' ),
		'priority' => 3,
	]
);

new \Kirki\Field\URL(
	[
		'settings' => 'Button Url',
		'label'    => esc_html__( 'Button URL', 'portfolio-me' ),
		'section'  => 'footer_section',
		'priority' => 10,
	]
);

new \Kirki\Field\Image(
	[
		'settings'    => 'image_setting_url for footer Person',
		'label'       => esc_html__( 'Person Image', 'portfolio-me' ),
		'description' => esc_html__( 'Image URL', 'kirki' ),
		'section'     => 'footer_section',
		'default'     => '',
	]
);

//footer end

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'switch_setting footer',
		'label'       => esc_html__( 'Enable/Disable', 'portfolio-me' ),
		'description' => esc_html__( 'ON/OFF', 'portfolio-me' ),
		'section'     => 'general_setting_section',
		'default'     => 'on',
		'priority'    => 1,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'portfolio-me' ),
			'off' => esc_html__( 'Disable', 'portfolio-me' ),
		],
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'Button Title',
		'label'    => esc_html__( 'Button Title', 'portfolio-me' ),
		'section'  => 'general_setting_section',
		'default'  => esc_html__( 'Title', 'portfolio-me' ),
		'priority' => 2,
	]
);

new \Kirki\Field\URL(
	[
		'settings' => 'Button Url',
		'label'    => esc_html__( 'Button URL', 'portfolio-me' ),
		'section'  => 'general_setting_section',
		'priority' => 3,
	]
);
?>