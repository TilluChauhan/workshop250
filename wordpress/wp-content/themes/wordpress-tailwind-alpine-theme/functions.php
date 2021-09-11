<?php



function template_theme_support() {
	
	$loader = new Template_Script_Loader();
	'add_filter'( 'script_loader_tag', array( $loader, 'filter_script_loader_tag' ), 10, 2 );
}

require 'get_template_directory'() . '/classes/class-template-script-loader.php';

'add_action'( 'after_setup_theme', 'template_theme_support' );

function template_register_styles() {

	$theme_version = 'wp_get_theme'()->get( 'Version' );

    'wp_enqueue_style'( 'template-styles', 'get_stylesheet_uri'(), [], $theme_version );
    
}

'add_action'( 'wp_enqueue_scripts', 'template_register_styles' );


function template_register_scripts() {

	$theme_version = 'wp_get_theme'()->get( 'Version' );

	'wp_enqueue_script'( 'template-scripts', 'get_template_directory_uri'() . '/app.js', array(), $theme_version, false );
    'wp_script_add_data'( 'template-scripts', 'defer', true );
}

'add_action'( 'wp_enqueue_scripts', 'template_register_scripts' );

