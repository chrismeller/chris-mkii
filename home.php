<?php if ( !defined( 'HABARI_PATH' ) ) { die('No direct access'); } ?>
<?php 

	$theme->display('header');
	
	foreach ( $posts as $post ) {
		include('entry.php');
	}
	
	$theme->display('footer');

?>