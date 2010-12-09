<?php if ( !defined( 'HABARI_PATH' ) ) { die('No direct access'); } ?>
<?php 

	$theme->display('header');
	
	?>
	
		<h1><?php echo $page_title; ?></h1>
	
	<?php
	
		if ( count( $posts ) == 0 ) {
			?>
			
				<p>Sorry, there were no posts for that month.</p>
			
			<?php
		}
	
		foreach ( $posts as $post ) {
			include('entry.php');
		}
	
	$theme->display( 'page_navigation' );
	
	$theme->display('footer');

?>