<?php
/*
Widget Name: WOW Slider
Description: WOW slider
Author: Rajesh Singh
*/
class Pisol_Wow_Slider extends SiteOrigin_Widget {

	

	function __construct() {
		//Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.
		$this->frontend_styles = array(
			array('bootstrap', PISOL_SITEO_WIDGET_URL.'css/bootstrap.min.css'),
			array('animate', PISOL_SITEO_WIDGET_URL.'css/animate.css'),
			array('pisol-wow-slider', PISOL_SITEO_WIDGET_URL.'pisol-widget/pisol-wow-slider/assets/style.css'),
		);
	
		$this->frontend_scripts = array(
			array('bootstrap', PISOL_SITEO_WIDGET_URL .'js/bootstrap.min.js',array('jquery')),
		);
		//Call the parent constructor with the required arguments.
		parent::__construct(
			// The unique id for your widget.
			'pisol-wow-slider',
	
			// The name of the widget for display purposes.
			__('Wow Slider', 'pisol-siteorigin-widget'),
	
			// The $widget_options array, which is passed through to WP_Widget.
			// It has a couple of extras like the optional help URL, which should link to your sites help or support page.
			array(
				'description' => __('Wow Slider', 'pisol-siteorigin-widget'),
                'help'        => 'http://100dollarswebsites.com',
				'panels_icon' => 'dashicons dashicons-dashboard',
				'panels_groups' => array('pisol-widget')
			),

			array(
			),
	
			//The $control_options array, which is passed through to WP_Widget
			array(
				
				'pisol-slide'=>array(
					'type' => 'repeater',
					'label' => __( 'Slides' , 'pisol-siteorigin-widget' ),
					'item_name'  => __( 'Slide', 'siteorigin-widgets' ),
					'fields' =>array(
						'name'=> array(
							'type' => 'text',
							'label' => __( 'Slide name', 'pisol-siteorigin-widget' ),
						),
						'line1'=> array(
							'type' => 'text',
							'label' => __( 'Line 1', 'pisol-siteorigin-widget' ),
						),
						'line2'=> array(
							'type' => 'text',
							'label' => __( 'Line 2', 'pisol-siteorigin-widget' ),
						),
						'desc'=> array(
							'type' => 'text',
							'label' => __( 'Description', 'pisol-siteorigin-widget' ),
						),
						'color'=> array(
							'type' => 'color',
							'label' => __( 'Color', 'pisol-siteorigin-widget' ),
							'default'=>'#000000'
						),
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

siteorigin_widget_register('pisol-wow-slider', __FILE__, 'Pisol_Wow_Slider');