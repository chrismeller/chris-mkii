<?php if ( !defined( 'HABARI_PATH' ) ) { die('No direct access'); } ?>
<?php

	define( 'THEME_CLASS', 'CWM' );
	
	class CWM extends Theme {
		
		public function action_init_theme ( ) {
			
			// apply autop to comment content
			Format::apply( 'autop', 'comment_content_out' );
			
			// turn tag output into a list
			Format::apply( 'tag_and_list', 'post_tags_out' );
			
			// display excerpts of 100 characters or 1 paragraph
			Format::apply_with_hook_params( 'more', 'post_content_out', _t('more'), 100, 1 );
			
			include_once('HTML.php');
			
			Stack::add( 'template_header_javascript', Site::get_url( 'theme' ) . '/js/main.js', 'cwm_main_js', 'jquery' );
			
		}
		
		public function theme_page_title ( ) {
			
			return 'Foo';
			
		}
		
	}
	
?>