<?php

new \Kirki\Panel(
	'panel_id',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Sections', 'portfolio-me' ),
		'description' => esc_html__( 'All the sections listed here.', 'portfolio-me' ),
	]
);
new \Kirki\Panel(
	'footer_id',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Footer', 'portfolio-me' ),
		'description' => esc_html__( 'Footer Field', 'portfolio-me' ),
	]
);
new \Kirki\Panel(
	'general_setting_panel',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'General settings', 'portfolio-me' ),
		'description' => esc_html__( 'General Field', 'portfolio-me' ),
	]
);


//sections 

new \Kirki\Section(
	'aboutus_id',
	[
		'title'       => esc_html__( 'About US', 'portfolio-me' ),
		'description' => esc_html__( 'About Us Section', 'portfolio-me' ),
		'panel'       => 'panel_id',
		'priority'    => 1,
	]
);
new \Kirki\Section(
	'education_id',
	[
		'title'       => esc_html__( 'Education', 'portfolio-me' ),
		'description' => esc_html__( 'Education Info', 'portfolio-me' ),
		'panel'       => 'panel_id',
		'priority'    => 2,
	]
);
new \Kirki\Section(
	'Experience_id',
	[
		'title'       => esc_html__( 'Skills & Experience', 'portfolio-me' ),
		'description' => esc_html__( 'Skills & Experience', 'portfolio-me' ),
		'panel'       => 'panel_id',
		'priority'    => 3,
	]
);

new \Kirki\Section(
	'section-themes',
	[
		'title'       => esc_html__( 'Section Thems', 'portfolio-me' ),
		'description' => esc_html__( 'Themes and Plugins', 'portfolio-me' ),
		'panel'       => 'panel_id',
		'priority'    => 4,
	]
);

new \Kirki\Section(
	'we-work-with',
	[
		'title'       => esc_html__( 'What We Do', 'portfolio-me' ),
		'description' => esc_html__( 'Design , Development and otheres', 'portfolio-me' ),
		'panel'       => 'panel_id',
		'priority'    => 5,
	]
);

new \Kirki\Section(
	'my-process',
	[
		'title'       => esc_html__( 'My Process', 'portfolio-me' ),
		'description' => esc_html__( 'Process of work', 'portfolio-me' ),
		'panel'       => 'panel_id',
		'priority'    => 6,
	]
);

new \Kirki\Section(
	'selected-work',
	[
		'title'       => esc_html__( 'Selected Work', 'portfolio-me' ),
		'description' => esc_html__( 'Selected Work', 'portfolio-me' ),
		'panel'       => 'panel_id',
		'priority'    => 7,
	]
);

new \Kirki\Section(
	'footer_section',
	[
		'title'       => esc_html__( 'Footer Setting', 'portfolio-me' ),
		'description' => esc_html__( 'Footer Setting', 'portfolio-me' ),
		'panel'       => 'footer_id',
	]
);

new \Kirki\Section(
	'general_setting_section',
	[
		'title'       => esc_html__( 'Header contact Us Button', 'portfolio-me' ),
		'description' => esc_html__( 'General Settings of website', 'portfolio-me' ),
		'panel'       => 'general_setting_panel',
	]
);

require get_template_directory(). '/inc/kirkiCustomizerControl.php';
?>