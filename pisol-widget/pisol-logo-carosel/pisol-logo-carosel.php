<?php
/*
Widget Name: Pisol Logo Carosel
Description: Logo Carosel
Author: Rajesh Singh
*/
class Pisol_Logo_Carosel extends SiteOrigin_Widget {

	

	function __construct() {
		//Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.
		$this->frontend_styles = array(
			array('pisol-logo-carosel', PISOL_SITEO_WIDGET_URL.'css/slick-theam.css'),
			array('slick', PISOL_SITEO_WIDGET_URL.'css/slick.css'),
			array('pisol-logo-carosel-style', PISOL_SITEO_WIDGET_URL.'pisol-widget/pisol-logo-carosel/assets/style.css'),
		);
	
		$this->frontend_scripts = array(
			array('slick', PISOL_SITEO_WIDGET_URL .'js/slick.min.js'),
			array('pisol-logo-carosel', PISOL_SITEO_WIDGET_URL .'pisol-widget/pisol-logo-carosel/assets/custom.js'),
		);
		//Call the parent constructor with the required arguments.
		parent::__construct(
			// The unique id for your widget.
			'pisol-logo-carosel',
	
			// The name of the widget for display purposes.
			__('Logo Carosel', 'pisol-siteorigin-widget'),
	
			// The $widget_options array, which is passed through to WP_Widget.
			// It has a couple of extras like the optional help URL, which should link to your sites help or support page.
			array(
				'description' => __('Logo Carosel', 'pisol-siteorigin-widget'),
                'help'        => 'http://100dollarswebsites.com',
				'panels_icon' => 'dashicons dashicons-dashboard',
				'panels_groups' => array('pisol-widget')
			),

			array(
			),
	
			//The $control_options array, which is passed through to WP_Widget
			array(
				'pisol-widget-title' => array(
					'type' => 'text',
					'label' => __( 'Module Title', 'pisol-siteorigin-widget' )
				),
				'pisol-widget-subtitle' => array(
					'type' => 'text',
					'label' => __( 'Module Description', 'pisol-siteorigin-widget' )
				),
				'pisol-logo'=>array(
					'type' => 'repeater',
					'label' => __( 'Slides' , 'pisol-siteorigin-widget' ),
					'item_name'  => __( 'Slide', 'siteorigin-widgets' ),
					'fields' =>array(
						'image'=>array(
							'type' => 'media',
							'label' => __( 'Logo image', 'pisol-siteorigin-widget' ),
							'choose' => __( 'Choose image', 'pisol-siteorigin-widget' ),
							'update' => __( 'Set image', 'pisol-siteorigin-widget' ),
							'library' => 'image',
						),
						'link'=>array(
							'type' => 'link',
							'label' => __( 'Link', 'pisol-siteorigin-widget' )
						)
					)),

					"infinite" => array(
						'type' => 'radio',
						'label' => __( 'Infinite scroll', 'pisol-siteorigin-widget' ),
						'default' => "true",
						'options' => array(
							"true" => __( 'Yes', 'pisol-siteorigin-widget' ),
							"false" => __( 'No', 'pisol-siteorigin-widget' ),
						)
					),

					"to-show"=>array(
						'type' => 'number',
						'label' => __( 'Slides to show', 'pisol-siteorigin-widget' ),
						'default' => 3,
					),

					"to-scroll"=>array(
						'type' => 'number',
						'label' => __( 'Slides to scroll', 'pisol-siteorigin-widget' ),
						'default' => 1,
					),

					"arrow"=>array(
						'type' => 'radio',
						'label' => __( 'Arrow navigation', 'pisol-siteorigin-widget' ),
						'default' => "true",
						'options' => array(
							"true" => __( 'Yes', 'pisol-siteorigin-widget' ),
							"false" => __( 'No', 'pisol-siteorigin-widget' ),
						)
					),

					"dot"=>array(
						'type' => 'radio',
						'label' => __( 'Dot navigation', 'pisol-siteorigin-widget' ),
						'default' => "true",
						'options' => array(
							"true" => __( 'Yes', 'pisol-siteorigin-widget' ),
							"false" => __( 'No', 'pisol-siteorigin-widget' ),
						)
					),

					"auto"=>array(
						'type' => 'radio',
						'label' => __( 'Auto play', 'pisol-siteorigin-widget' ),
						'default' => "true",
						'options' => array(
							"true" => __( 'Yes', 'pisol-siteorigin-widget' ),
							"false" => __( 'No', 'pisol-siteorigin-widget' ),
						)
					),
					
					"to-show-768"=>array(
						'type' => 'number',
						'default' => 2,
						'label' => __( 'Slides to show below 768px', 'pisol-siteorigin-widget' ),
					),

					"to-scroll-768"=>array(
						'type' => 'number',
						'default' => 1,
						'label' => __( 'Slides to scroll below 768px', 'pisol-siteorigin-widget' ),
					),

					"arrow-768"=>array(
						'type' => 'radio',
						'label' => __( 'Arrow navigation below 768px', 'pisol-siteorigin-widget' ),
						'default' => "false",
						'options' => array(
							"true" => __( 'Yes', 'pisol-siteorigin-widget' ),
							"false" => __( 'No', 'pisol-siteorigin-widget' ),
						)
					),
			),
	
			//The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
			
			
			
	
			//The $base_folder path string.
			plugin_dir_path(__FILE__)
		);
	}

	function get_template_name($instance) {
		return 'default';
	}

	function get_style_name($instance) {
		return '';
	}

}

siteorigin_widget_register('pisol-logo-carosel', __FILE__, 'Pisol_Logo_Carosel');