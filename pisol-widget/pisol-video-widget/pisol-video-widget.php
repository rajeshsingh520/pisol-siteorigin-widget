<?php
/*
Widget Name: Pisol Video Widget
Description: Video plugin 
Author: Rajesh Singh
*/
class Pisol_Video_Widget extends SiteOrigin_Widget {

	

	function __construct() {
		//Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.
		$this->frontend_styles = array(
			array('pisol-video-style', PISOL_SITEO_WIDGET_URL.'pisol-widget/pisol-video-widget/assets/style.css'),
			array('magnifi', PISOL_SITEO_WIDGET_URL.'css/magnific-popup.css')
		);
	
		$this->frontend_scripts = array(
			array('magnifi', PISOL_SITEO_WIDGET_URL .'js/jquery.magnific-popup.min.js'),
			array('pisol-video-custom', PISOL_SITEO_WIDGET_URL .'pisol-widget/pisol-video-widget/assets/custom.js'),
		);
		//Call the parent constructor with the required arguments.
		parent::__construct(
			// The unique id for your widget.
			'pisol-video-widget',
	
			// The name of the widget for display purposes.
			__('Video', 'pisol-siteorigin-widget'),
	
			// The $widget_options array, which is passed through to WP_Widget.
			// It has a couple of extras like the optional help URL, which should link to your sites help or support page.
			array(
				'description' => __('Video module', 'pisol-siteorigin-widget'),
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
				'pisol-image'=>array(
					'type' => 'media',
					'label' => __( 'Module image', 'pisol-siteorigin-widget' ),
					'choose' => __( 'Choose image', 'pisol-siteorigin-widget' ),
					'update' => __( 'Set image', 'pisol-siteorigin-widget' ),
					'library' => 'image',
				),
				'pisol-link'=>array(
					'type' => 'link',
					'label' => __( 'Video Link', 'pisol-siteorigin-widget' )
				)
				
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

siteorigin_widget_register('pisol-video-widget', __FILE__, 'Pisol_Video_Widget');