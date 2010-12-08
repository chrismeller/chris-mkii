<?php if ( !defined( 'HABARI_PATH' ) ) { die('No direct access'); } ?>
<?php 

	$theme->display('header');
		
	include('entry.php');
	
	$theme->display( 'page_navigation' );
	
	$theme->display('footer');

?>