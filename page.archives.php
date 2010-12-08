<?php if ( !defined( 'HABARI_PATH' ) ) { die('No direct access'); } ?>
<?php 

	$theme->display('header');
		
	foreach ( $posts as $post ) {
		
		echo $post->title . '<br />';
		
	}
	
	$theme->display( 'page_navigation' );
	
	$theme->display('footer');

?>