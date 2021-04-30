<?php if (!defined('ABSPATH')) exit;
/**
 * Customizer panels.
 *
 * @since 1.0.0
 */

/*------------------------------------------
 => Panel 
------------------------------------------*/


Kirki::add_panel('general_options', array(
	'priority'    => 5,
	'title'       => esc_html__('General Settings', 'churel'),
));

Kirki::add_panel('header_options', array(
	'priority'    => 10,
	'title'       => esc_html__('Header Settings', 'churel'),
));

Kirki::add_panel('page_options', array(
	'priority'    => 15,
	'title'       => esc_html__('Page Settings', 'churel'),
));

Kirki::add_panel('blog_options', array(
	'priority'    => 20,
	'title'       => esc_html__('Blog Settings', 'churel'),
));

Kirki::add_panel('typography', array(
	'priority'    => 25,
	'title'       => esc_html__('Typograhy', 'churel'),
));

Kirki::add_panel('color_options', array(
	'priority'    => 30,
	'title'       => esc_html__('Color', 'churel'),
));
Kirki::add_panel('footer_options', array(
	'priority'    => 35,
	'title'       => esc_html__('Footer', 'churel'),
));
Kirki::add_panel('theme_scripts', array(
	'priority'    => 35,
	'title'       => esc_html__('Theme Scripts', 'churel'),
));

/*------------------------------------------
 => Sections 
------------------------------------------*/

Kirki::add_section('social_fixed', array(
	'title'       => esc_html__('Social Fixed', 'churel'),
	'priority'    => 1,
	'panel'       => 'general_options',
));
Kirki::add_section('back_to_top', array(
	'title'       => esc_html__('Scroll Back to Top', 'churel'),
	'priority'    => 3,
	'panel'       => 'general_options',
));
Kirki::add_section('preloader', array(
	'title'       => esc_html__('Preloader', 'churel'),
	'priority'    => 5,
	'panel'       => 'general_options',
));

Kirki::add_section('blog_page_layout', array(
	'title'       => esc_html__('Single Page', 'churel'),
	'priority'    => 5,
	'panel'       => 'blog_options',
));
Kirki::add_section('read_more', array(
	'title'       => esc_html__('Read More', 'churel'),
	'priority'    => 10,
	'panel'       => 'blog_options',
));
Kirki::add_section('excerpt_limit', array(
	'title'       => esc_html__('Excerpt Limit', 'churel'),
	'priority'    => 15,
	'panel'       => 'blog_options',
));
Kirki::add_section('site_brand', array(
	'title'       => esc_html__('Site Brand', 'churel'),
	'priority'    => 5,
	'panel'       => 'header_options',
));
Kirki::add_section('page_layout', array(
	'title'       => esc_html__('Blog Layout', 'churel'),
	'priority'    => 1,
	'panel'       => 'page_options',
));
Kirki::add_section('authors_page', array(
	'title'       => esc_html__('Authors Page', 'churel'),
	'priority'    => 3,
	'panel'       => 'page_options',
));
Kirki::add_section('author_page', array(
	'title'       => esc_html__('Author Page', 'churel'),
	'priority'    => 5,
	'panel'       => 'page_options',
));
Kirki::add_section('categories_page', array(
	'title'       => esc_html__('Categories Page', 'churel'),
	'priority'    => 7,
	'panel'       => 'page_options',
));
Kirki::add_section('category_page', array(
	'title'       => esc_html__('Category Page', 'churel'),
	'priority'    => 9,
	'panel'       => 'page_options',
));
Kirki::add_section('search_result', array(
	'title'       => esc_html__('Search Result', 'churel'),
	'priority'    => 11,
	'panel'       => 'page_options',
));


Kirki::add_section('body', array(
	'title'       => esc_html__('Body', 'churel'),
	'priority'    => 1,
	'panel'       => 'typography',
));
Kirki::add_section('page_content', array(
	'title'       => esc_html__('Page Content', 'churel'),
	'priority'    => 3,
	'panel'       => 'typography',
));
Kirki::add_section('heading', array(
	'title'       => esc_html__('Heading', 'churel'),
	'priority'    => 5,
	'panel'       => 'typography',
));
Kirki::add_section('navbar', array(
	'title'       => esc_html__('Navbar', 'churel'),
	'priority'    => 7,
	'panel'       => 'typography',
));
Kirki::add_section('post_card', array(
	'title'       => esc_html__('Post Card', 'churel'),
	'priority'    => 11,
	'panel'       => 'typography',
));

Kirki::add_section('footer_copyright', array(
	'title'       => esc_html__('Footer Copyright', 'churel'),
	'priority'    => 10,
	'panel'       => 'footer_options',
));
Kirki::add_section('footer_column', array(
	'title'       => esc_html__('Footer Widget Layout', 'churel'),
	'priority'    => 11,
	'panel'       => 'footer_options',
));
Kirki::add_section('footer_subscribe', array(
	'title'       => esc_html__('Subscribe', 'churel'),
	'priority'    => 15,
	'panel'       => 'footer_options',
));

Kirki::add_section('churel_css', array(
	'title'       => esc_html__('CSS Control', 'churel'),
	'priority'    => 15,
	'panel'       => 'theme_scripts',
));
Kirki::add_section('churel_js', array(
	'title'       => esc_html__('JS Control', 'churel'),
	'priority'    => 15,
	'panel'       => 'theme_scripts',
));



/*------------------------------------------
 => Fields 
------------------------------------------*/

Kirki::add_field(
	'churel_config',
	array(
		'type'        => 'switch',
		'settings'    => 'back_to_top',
		'label'       => esc_html__('Enable/Disable Scroll Back to Top', 'churel'),
		'section'     => 'back_to_top',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => array(
			'on'  => esc_html__('Enable', 'churel'),
			'off' => esc_html__('Disable', 'churel'),
		),
	)
);
Kirki::add_field(
	'churel_config',
	array(
		'type'        => 'switch',
		'settings'    => 'preloader_settings',
		'label'       => esc_html__('Enable/Disable Preloader', 'churel'),
		'section'     => 'preloader',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => array(
			'on'  => esc_html__('Enable', 'churel'),
			'off' => esc_html__('Disable', 'churel'),
		),
	)
);
Kirki::add_field(
	'churel_config',
	array(
		'type'        => 'switch',
		'settings'    => 'social_fixed_settings',
		'label'       => esc_html__('Enable/Disable Social Fixed', 'churel'),
		'section'     => 'social_fixed',
		'default'     => '1',
		'priority'    => 1,
		'choices'     => array(
			'on'  => esc_html__('Enable', 'churel'),
			'off' => esc_html__('Disable', 'churel'),
		),
	)
);
Kirki::add_field(
	'churel_config',
	array(
		'type'     => 'link',
		'settings' => 'facebook_link_setting',
		'label'    => __('Facebook Link', 'churel'),
		'section'  => 'social_fixed',
		'default'  => 'https://facebook.com/themeix',
		'priority' => 3,
	)
);
Kirki::add_field(
	'churel_config',
	array(
		'type'     => 'link',
		'settings' => 'twitter_link_setting',
		'label'    => __('Twitter Link', 'churel'),
		'section'  => 'social_fixed',
		'default'  => 'https://twitter.com/themeix',
		'priority' => 5,
	)
);
Kirki::add_field(
	'churel_config',
	array(
		'type'     => 'link',
		'settings' => 'instagram_link_setting',
		'label'    => __('Instagram Link', 'churel'),
		'section'  => 'social_fixed',
		'default'  => 'https://instagram.com/themeix',
		'priority' => 7,
	)
);
Kirki::add_field(
	'churel_config',
	array(
		'type'     => 'link',
		'settings' => 'pinterest_link_setting',
		'label'    => __('Pinterest Link', 'churel'),
		'section'  => 'social_fixed',
		'default'  => 'https://pinterest.com/themeix',
		'priority' => 7,
	)
);


Kirki::add_field(
	'churel_config',
	array(
		'type'        => 'radio-image',
		'settings'    => 'blog_single_page_layout',
		'label'       => esc_html__('Single Page Layout', 'churel'),
		'section'     => 'blog_page_layout',
		'default'     => '1',
		'priority'    => 15,
		'choices'     => array(
			'3'   => CHUREL_IMG_URL . '/layout3.png',
			'1'   => CHUREL_IMG_URL . '/layout1.png',
			'2'   => CHUREL_IMG_URL . '/layout2.png',
		)
	)
);

Kirki::add_field(
	'churel_config',
	array(
		'type'        => 'switch',
		'settings'    => 'readmore_switch',
		'label'       => esc_html__('Enable/Disable Read More', 'churel'),
		'description' => esc_html__('You can show or hide your read more button.', 'churel'),
		'section'     => 'read_more',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => array(
			'on'  => esc_html__('Enable', 'churel'),
			'off' => esc_html__('Disable', 'churel'),
		),
	)
);

Kirki::add_field(
	'churel_config',
	array(
		'type'     => 'text',
		'settings' => 'read_more_label',
		'label'    => esc_html__('Read More Label', 'churel'),
		'section'  => 'read_more',
		'default'  => esc_html__('Read More', 'churel'),
		'priority' => 5,
	)
);

Kirki::add_field(
	'churel_config',
	array(
		'type'     => 'text',
		'settings' => 'featured_post_excerpt_limit',
		'label'    => esc_html__('Featured Post Excerpt Limit', 'churel'),
		'section'  => 'excerpt_limit',
		'default'  => 35,
		'priority' => 5,
	)
);
Kirki::add_field(
	'churel_config',
	array(
		'type'     => 'text',
		'settings' => 'post_excerpt_limit',
		'label'    => esc_html__('Post Excerpt Limit', 'churel'),
		'section'  => 'excerpt_limit',
		'default'  => 10,
		'priority' => 10,
	)
);
Kirki::add_field(
	'churel_config',
	array(
		'type'     => 'text',
		'settings' => 'archive_excerpt_limit',
		'label'    => esc_html__('Archive Post Excerpt Limit', 'churel'),
		'section'  => 'excerpt_limit',
		'default'  => 10,
		'priority' => 15,
	)
);
Kirki::add_field(
	'churel_config',
	array(
		'type'        => 'slider',
		'settings'    => 'brand',
		'label'       => esc_html__('Logo Brand Width(px)', 'churel'),
		'description'       => esc_html__('You can set your header logo image width', 'churel'),
		'section'     => 'site_brand',
		'default'     => 180,
		'choices'     => array(
			'min'  => 1,
			'max'  => 275,
			'step' => 1,
		)
	)
);
Kirki::add_field(
	'churel_config',
	array(
		'type'        => 'radio-image',
		'settings'    => 'churel_page_layout',
		'label'       => esc_html__('Churel blog Layout', 'churel'),
		'section'     => 'page_layout',
		'default'     => '2',
		'priority'    => 10,
		'choices'     => array(
			'1'   => CHUREL_IMG_URL . '/layout1.png',
			'2'   => CHUREL_IMG_URL . '/layout2.png',
			'3'   => CHUREL_IMG_URL . '/layout3.png',
		)
	)
);


Kirki::add_field(
	'churel_config',
	array(
		'type'        => 'image',
		'settings'    => 'authors_banner_bg',
		'label'       => esc_html__('Banner Background', 'churel'),
		'description'       => esc_html__('Upload you banner background image', 'churel'),
		'section'     => 'authors_page',
		'default'     => '',
		'priority'    => 1,
	)
);

Kirki::add_field(
	'churel_config',
	array(
		'type'        => 'color',
		'settings'    => 'authors_bg_overlay',
		'label'       => esc_html__('Background Overlay', 'churel'),
		'description'       => esc_html__('Upload you banner background image', 'churel'),
		'section'     => 'authors_page',
		'default'     => '',
		'priority'    => 3,
	)
);

Kirki::add_field('churel_config', [
	'type'        => 'select',
	'settings'    => 'authors_layout_settings',
	'label'       => esc_html__('Authors Layout', 'churel'),
	'section'     => 'authors_page',
	'default'     => '1',
	'placeholder' => esc_html__('Select your authors layout option', 'churel'),
	'priority'    => 5,
	'choices'     => [
		'1' => esc_html__('col-4 | col-4 | col-4', 'churel'),
		'2' => esc_html__('col-6 | col-6', 'churel'),
	],
]);

Kirki::add_field(
	'churel_config',
	array(
		'type'        => 'image',
		'settings'    => 'author_banner_bg',
		'label'       => esc_html__('Banner Background', 'churel'),
		'description'       => esc_html__('Upload you banner background image', 'churel'),
		'section'     => 'author_page',
		'default'     => '',
		'priority'    => 1,
	)
);
Kirki::add_field(
	'churel_config',
	array(
		'type'        => 'color',
		'settings'    => 'author_bg_overlay',
		'label'       => esc_html__('Background Overlay', 'churel'),
		'description'       => esc_html__('Upload you banner background image', 'churel'),
		'section'     => 'author_page',
		'default'     => '',
		'priority'    => 3,
	)
);
Kirki::add_field(
	'churel_config',
	array(
		'type'        => 'radio-image',
		'settings'    => 'author_page_layout',
		'label'       => esc_html__('Layout', 'churel'),
		'section'     => 'author_page',
		'default'     => '1',
		'priority'    => 5,
		'choices'     => array(
			'1'   => CHUREL_IMG_URL . '/layout1.png',
			'2'   => CHUREL_IMG_URL . '/layout2.png',
			'3'   => CHUREL_IMG_URL . '/layout3.png',
		)
	)
);
Kirki::add_field(
	'churel_config',
	array(
		'type'        => 'image',
		'settings'    => 'categories_banner_bg',
		'label'       => esc_html__('Banner Background', 'churel'),
		'description'       => esc_html__('Upload you banner background image', 'churel'),
		'section'     => 'categories_page',
		'default'     => '',
		'priority'    => 1,
	)
);

Kirki::add_field(
	'churel_config',
	array(
		'type'        => 'color',
		'settings'    => 'categories_bg_overlay',
		'label'       => esc_html__('Background Overlay', 'churel'),
		'description'       => esc_html__('Upload you banner background image', 'churel'),
		'section'     => 'categories_page',
		'default'     => '',
		'priority'    => 3,
	)
);

Kirki::add_field('churel_config', [
	'type'        => 'select',
	'settings'    => 'category_layout_settings',
	'label'       => esc_html__('Categories Layout', 'churel'),
	'section'     => 'categories_page',
	'default'     => '1',
	'placeholder' => esc_html__('Select your Category layout option', 'churel'),
	'priority'    => 5,
	'choices'     => [
		'1' => esc_html__('col-4 | col-4 | col-4', 'churel'),
		'2' => esc_html__('col-6 | col-6', 'churel'),
	],
]);

Kirki::add_field(
	'churel_config',
	array(
		'type'        => 'image',
		'settings'    => 'category_banner_bg',
		'label'       => esc_html__('Banner Background', 'churel'),
		'description'       => esc_html__('Upload you banner background image', 'churel'),
		'section'     => 'category_page',
		'default'     => '',
		'priority'    => 1,
	)
);
Kirki::add_field(
	'churel_config',
	array(
		'type'        => 'color',
		'settings'    => 'category_bg_overlay',
		'label'       => esc_html__('Background Overlay', 'churel'),
		'description'       => esc_html__('Upload you banner background image', 'churel'),
		'section'     => 'category_page',
		'default'     => '',
		'priority'    => 3,
	)
);

Kirki::add_field(
	'churel_config',
	array(
		'type'        => 'image',
		'settings'    => 'search_result_bg',
		'label'       => esc_html__('Banner Background', 'churel'),
		'description'       => esc_html__('Upload you banner background image', 'churel'),
		'section'     => 'search_result',
		'default'     => '',
		'priority'    => 1,
	)
);
Kirki::add_field(
	'churel_config',
	array(
		'type'        => 'color',
		'settings'    => 'search_result_overlay',
		'label'       => esc_html__('Background Overlay', 'churel'),
		'description'       => esc_html__('Upload you banner background image', 'churel'),
		'section'     => 'search_result',
		'default'     => '',
		'priority'    => 3,
	)
);


Kirki::add_field(
	'churel_config',
	array(
		'type'        => 'color',
		'settings'    => 'page_title_bg_overlay',
		'label'       => esc_html__('Overlay Color', 'churel'),
		'description' => esc_html__('You can pick page title overlay color', 'churel'),
		'section'     => 'page',
		'active_callback' => array(
			array(
				'setting'  => 'page_title_bg',
				'operator' => '==',
				'value'    => 'image',

			)
		)
	)
);

Kirki::add_field(
	'churel_config',
	array(
		'type'        => 'color',
		'settings'    => 'page_title_bg_color',
		'label'       => esc_html__('Color', 'churel'),
		'description' => esc_html__('You can pick page title bg color', 'churel'),
		'section'     => 'page',
		'default'     => '#8066dc',
		'active_callback' => array(
			array(
				'setting'  => 'page_title_bg',
				'operator' => '==',
				'value'    => 'color',

			)
		)
	)
);

Kirki::add_field(
	'churel_config',
	array(
		'type'        => 'typography',
		'settings'    => 'bodytypography',
		'label'       => esc_html__('Body Typography', 'churel'),
		'section'     => 'body',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => 'regular',
			'font-size'      => '',
			'line-height'    => '',
			'letter-spacing' => '',
			'color'          => '',
			'text-transform' => 'none',
			'text-align'     => '',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => array('body'),
			),
		),
	)
);
Kirki::add_field(
	'churel_config',
	array(
		'type'        => 'typography',
		'settings'    => 'page_content',
		'label'       => esc_html__('Page Content', 'churel'),
		'section'     => 'page_content',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => 'regular',
			'font-size'      => '',
			'line-height'    => '',
			'letter-spacing' => '',
			'color'          => '',
			'text-transform' => 'none',
			'text-align'     => '',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => array('.entry-content p'),
			),
		),
	)
);
Kirki::add_field(
	'churel_config',
	array(
		'type'        => 'typography',
		'settings'    => 'heading1',
		'label'       => esc_html__('Heading', 'churel'),
		'section'     => 'heading',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => 'regular',
			'font-size'      => '',
			'line-height'    => '',
			'letter-spacing' => '',
			'color'          => '',
			'text-transform' => 'none',
			'text-align'     => '',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => array('.entry-content p'),
			),
		),
	)
);
Kirki::add_field(
	'churel_config',
	array(
		'type'        => 'typography',
		'settings'    => 'headin2',
		'label'       => esc_html__('Heading 2', 'churel'),
		'section'     => 'heading',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => 'regular',
			'font-size'      => '',
			'line-height'    => '',
			'letter-spacing' => '',
			'color'          => '',
			'text-transform' => 'none',
			'text-align'     => '',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => array('h2'),
			),
		),
	)
);
Kirki::add_field(
	'churel_config',
	array(
		'type'        => 'typography',
		'settings'    => 'headin3',
		'label'       => esc_html__('Heading 3', 'churel'),
		'section'     => 'heading',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => 'regular',
			'font-size'      => '',
			'line-height'    => '',
			'letter-spacing' => '',
			'color'          => '',
			'text-transform' => 'none',
			'text-align'     => '',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => array('h3'),
			),
		),
	)
);
Kirki::add_field(
	'churel_config',
	array(
		'type'        => 'typography',
		'settings'    => 'headin4',
		'label'       => esc_html__('Heading 4', 'churel'),
		'section'     => 'heading',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => 'regular',
			'font-size'      => '',
			'line-height'    => '',
			'letter-spacing' => '',
			'color'          => '',
			'text-transform' => 'none',
			'text-align'     => '',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => array('h4'),
			),
		),
	)
);
Kirki::add_field(
	'churel_config',
	array(
		'type'        => 'typography',
		'settings'    => 'headin5',
		'label'       => esc_html__('Heading 5', 'churel'),
		'section'     => 'heading',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => 'regular',
			'font-size'      => '',
			'line-height'    => '',
			'letter-spacing' => '',
			'color'          => '',
			'text-transform' => 'none',
			'text-align'     => '',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => array('h5'),
			),
		),
	)
);
Kirki::add_field(
	'churel_config',
	array(
		'type'        => 'typography',
		'settings'    => 'headin6',
		'label'       => esc_html__('Heading 6', 'churel'),
		'section'     => 'heading',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => 'regular',
			'font-size'      => '',
			'line-height'    => '',
			'letter-spacing' => '',
			'color'          => '',
			'text-transform' => 'none',
			'text-align'     => '',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => array('h6'),
			),
		),
	)
);
Kirki::add_field(
	'churel_config',
	array(
		'type'        => 'typography',
		'settings'    => 'navbar_item',
		'label'       => esc_html__('Navbar', 'churel'),
		'section'     => 'navbar',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => 'regular',
			'font-size'      => '',
			'line-height'    => '',
			'letter-spacing' => '',
			'color'          => '',
			'text-transform' => 'none',
			'text-align'     => '',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => array('.themeix-menu #main-menu li>a'),
			),
		),
	)
);
Kirki::add_field(
	'churel_config',
	array(
		'type'        => 'typography',
		'settings'    => 'postcard_title',
		'label'       => esc_html__('Post Title', 'churel'),
		'section'     => 'post_card',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => 'regular',
			'font-size'      => '',
			'line-height'    => '',
			'letter-spacing' => '',
			'color'          => '',
			'text-transform' => 'none',
			'text-align'     => '',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => array('.blog-post .desc h4'),
			),
		),
	)
);
Kirki::add_field(
	'churel_config',
	array(
		'type'        => 'typography',
		'settings'    => 'postcard_meta',
		'label'       => esc_html__('Post Meta', 'churel'),
		'section'     => 'post_card',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => 'regular',
			'font-size'      => '',
			'line-height'    => '',
			'letter-spacing' => '',
			'color'          => '',
			'text-transform' => 'none',
			'text-align'     => '',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => array('.blog-post .desc .meta-info span'),
			),
		),
	)
);
Kirki::add_field(
	'churel_config',
	array(
		'type'        => 'typography',
		'settings'    => 'postcard_cat',
		'label'       => esc_html__('Post Category', 'churel'),
		'section'     => 'post_card',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => 'regular',
			'font-size'      => '',
			'line-height'    => '',
			'letter-spacing' => '',
			'color'          => '',
			'text-transform' => 'none',
			'text-align'     => '',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => array('.blog-post .feature-btn'),
			),
		),
	)
);



Kirki::add_field(
	'churel_config',
	array(
		'type'        => 'color',
		'settings'    => 'churel_primary_color',
		'label'       => esc_html__('Primary Color', 'churel'),
		'section'     => 'colors',
		'priority'    => 1,
		'default'     => '#f44336',
	)
);
Kirki::add_field(
	'churel_config',
	array(
		'type'        => 'color',
		'settings'    => 'churel_secondary_color',
		'label'       => esc_html__('Secondary Color', 'churel'),
		'section'     => 'colors',
		'priority'    => 2,
		'default'     => '#333333',
	)
);
Kirki::add_field(
	'churel_config',
	array(
		'type'        => 'color',
		'settings'    => 'churel_text_color',
		'label'       => esc_html__('Text Color', 'churel'),
		'section'     => 'colors',
		'priority'    => 3,
		'default'     => '#383143',
	)
);

Kirki::add_field( 'churel_config',array(
	'type'        => 'toggle',
	'settings'    => 'subscriber_toggle_setting',
	'label'       => esc_html__( 'Footer Subscribe Form', 'churel' ),
	'section'     => 'footer_subscribe',
	'default'     => '1',
	'priority'    => 1,
 ) );
Kirki::add_field(
	'churel_config',
	array(
		'type'        => 'text',
		'settings'    => 'subscribe_title',
		'label'       => esc_html__('Title', 'churel'),
		'section'     => 'footer_subscribe',
		'default'     => esc_html__('Subscribe', 'churel'),
		'priority'    => 2,
		'active_callback' => [
			[
				'setting'  => 'subscriber_toggle_setting',
				'operator' => '==',
				'value'    => '1',
			]
		],
	)
);
Kirki::add_field(
	'churel_config',
	array(
		'type'        => 'textarea',
		'settings'    => 'subscribe_desc',
		'label'       => esc_html__('Subtitle', 'churel'),
		'section'     => 'footer_subscribe',
		'default'     => esc_html__('Stay up to date! Get all the latest posts delivered straight to your inbox.', 'churel'),
		'priority'    => 3,
		'active_callback' => [
			[
				'setting'  => 'subscriber_toggle_setting',
				'operator' => '==',
				'value'    => '1',
			]
		],
	)
);
Kirki::add_field(
	'churel_config',
	array(
		'type'        => 'textarea',
		'settings'    => 'form_shortcode',
		'label'       => esc_html__('Form Shortcode', 'churel'),
		'section'     => 'footer_subscribe',
		'priority'    => 5,
		'active_callback' => [
			[
				'setting'  => 'subscriber_toggle_setting',
				'operator' => '==',
				'value'    => '1',
			]
		],
	)
);


Kirki::add_field( 'churel_config', [
	'type'        => 'select',
	'settings'    => 'footer_layout',
	'label'       => esc_html__( 'Footer Layout', 'churel' ),
	'section'     => 'footer_column',
	'default'     => '1',
	'placeholder' => esc_html__( 'Select your footer layout option', 'churel' ),
	'priority'    => 10,
	'choices'     => [
		'1' => esc_html__( 'col-4 | col-4 | col-4', 'churel'),
		'2' => esc_html__( 'col-3 | col-3 | col-3 | col-3', 'churel'),
		'3' => esc_html__( 'col-4 | col-2 | col-3 | col-3', 'churel'),
		'4' => esc_html__( 'col-3 | col-3 | col-2 | col-4', 'churel'),
		'5' => esc_html__( 'col-6 | col-6', 'churel'),
		'6' => esc_html__( 'col-4 | col-2 | col-4 | col-2', 'churel'),
		'7' => esc_html__( 'col-4 | col-3 | col-2 | col-3', 'churel'),
		'8' => esc_html__( 'col-3 | col-2 | col-4 | col-3', 'churel'),
	],
] );


Kirki::add_field( 'churel_config',array(
	'type'        => 'toggle',
	'settings'    => 'aos_animation_css_toggle_setting',
	'label'       => esc_html__( 'AOS animation CSS', 'churel' ),
	'section'     => 'churel_css',
	'default'     => '1',
	'priority'    => 1,
 ) );

Kirki::add_field( 'churel_config',array(
	'type'        => 'toggle',
	'settings'    => 'lightbox_css_toggle_setting',
	'label'       => esc_html__( 'Lightbox CSS', 'churel' ),
	'section'     => 'churel_css',
	'default'     => '0',
	'priority'    => 2,
 ) );

Kirki::add_field( 'churel_config',array(
	'type'        => 'toggle',
	'settings'    => 'prism_css_toggle_setting',
	'label'       => esc_html__( 'Prism CSS', 'churel' ),
	'section'     => 'churel_css',
	'default'     => '1',
	'priority'    => 3,
 ) );

Kirki::add_field( 'churel_config',array(
	'type'        => 'toggle',
	'settings'    => 'custom_animation_css_toggle_setting',
	'label'       => esc_html__( 'Custom animation CSS', 'churel' ),
	'section'     => 'churel_css',
	'default'     => '1',
	'priority'    => 4,
 ) );

Kirki::add_field( 'churel_config',array(
	'type'        => 'toggle',
	'settings'    => 'popper_js_toggle_setting',
	'label'       => esc_html__( 'Popper JS', 'churel' ),
	'section'     => 'churel_js',
	'default'     => '1',
	'priority'    => 1,
 ) );

Kirki::add_field( 'churel_config',array(
	'type'        => 'toggle',
	'settings'    => 'aos_animation_js_toggle_setting',
	'label'       => esc_html__( 'AOS Animation JS', 'churel' ),
	'section'     => 'churel_js',
	'default'     => '1',
	'priority'    => 2,
 ) );

Kirki::add_field( 'churel_config',array(
	'type'        => 'toggle',
	'settings'    => 'fitvids_js_toggle_setting',
	'label'       => esc_html__( 'Fitvids JS', 'churel' ),
	'section'     => 'churel_js',
	'default'     => '0',
	'priority'    => 3,
 ) );

Kirki::add_field( 'churel_config',array(
	'type'        => 'toggle',
	'settings'    => 'infinite_js_toggle_setting',
	'label'       => esc_html__( 'Infinite Scroll JS', 'churel' ),
	'section'     => 'churel_js',
	'default'     => '0',
	'priority'    => 4,
 ) );

Kirki::add_field( 'churel_config',array(
	'type'        => 'toggle',
	'settings'    => 'lightbox_js_toggle_setting',
	'label'       => esc_html__( 'Lightbox JS', 'churel' ),
	'section'     => 'churel_js',
	'default'     => '0',
	'priority'    => 5,
 ) );

Kirki::add_field( 'churel_config',array(
	'type'        => 'toggle',
	'settings'    => 'prism_js_toggle_setting',
	'label'       => esc_html__( 'Prism JS', 'churel' ),
	'section'     => 'churel_js',
	'default'     => '1',
	'priority'    => 6,
 ) );