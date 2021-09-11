<?php

if ( ! class_exists( 'Template_Script_Loader' ) ) {
	
	class Template_Script_Loader {

		public function filter_script_loader_tag( $tag, $handle ) {
			foreach ( array( 'async', 'defer' ) as $attr ) {
				if ( ! 'wp_scripts'()->get_data( $handle, $attr ) ) {
					continue;
				}
			
				if ( ! preg_match( ":\s$attr(=|>|\s):", $tag ) ) {
					$tag = preg_replace( ':(?=></script>):', " $attr", $tag, 1 );
				}
			
				break;
			}
			return $tag;
		}

	}
}
