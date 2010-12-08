<?php if ( !defined( 'HABARI_PATH' ) ) { die('No direct access'); } ?>
<?php 

	$theme->display('header');
	
	if ( count( $posts ) == 0 ) {
		?>
		
			<p>Sorry, no posts were found!</p>
		
		<?php
	}
	
	foreach ( $posts as $post ) {
		include('entry.php');
	}
	
	$theme->display( 'page_navigation' );
	
	$theme->display('footer');

?>