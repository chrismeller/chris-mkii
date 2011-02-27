<?php if ( !defined( 'HABARI_PATH' ) ) { die('No direct access'); } ?>
<?php 

	$theme->display('header');
	
	$theme->display( 'post_navigation' );
	
	include('entry.php');
	
	$theme->display( 'page_navigation' );
	
	$theme->display('comments');
	
	$theme->display('footer');

?>