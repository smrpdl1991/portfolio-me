<?php

new \Kirki\Panel(
	'panel_id',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'My Panel', 'portfolio-me' ),
		'description' => esc_html__( 'My Panel Description.', 'portfolio-me' ),
	]
);

new \Kirki\Section(
	'section_id',
	[
		'title'       => esc_html__( 'My Section', 'portfolio-me' ),
		'description' => esc_html__( 'My Section Description.', 'portfolio-me' ),
		'panel'       => 'panel_id',
		'priority'    => 160,
	]
);

new \Kirki\Field\Repeater(
	[
		'settings'     => 'repeater_setting_2',
		'label'        => esc_html__( 'Repeater Control', 'portfolio-me' ),
		'section'      => 'section_id',
		'priority'     => 10,
		'row_label'    => [
			'type'  => 'field',
			'value' => esc_html__( 'Your Custom Value', 'portfolio-me' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__( '"Add new" button label (optional) ', 'portfolio-me' ),
		'default'      => [
			[
				'link_text'   => esc_html__( 'Kirki Site', 'portfolio-me' ),
				'link_url'    => 'https://kirki.org/',
			],
			[
				'link_text'   => esc_html__( 'Kirki WP', 'portfolio-me' ),
				'link_url'    => 'https://wordpress.org/plugins/kirki/',
			],
		],
		'fields'       => [
			'link_text'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Link Text', 'portfolio-me' ),
				'description' => esc_html__( 'Description', 'portfolio-me' ),
				'default'     => '',
			],
			'link_url'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'Link URL', 'portfolio-me' ),
				'description' => esc_html__( 'Description', 'portfolio-me' ),
				'default'     => '',
			],
		],
	]
);

?>