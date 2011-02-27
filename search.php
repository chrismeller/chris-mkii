<?php if ( !defined( 'HABARI_PATH' ) ) { die('No direct access'); } ?>
<?php 

	$theme->display('header');
	
	?>
	
		<h1><?php echo _t( 'Search results for "%s"', array( HTML::chars( $search_criteria ) ) ); ?></h1>
	
	<?php
	
		if ( count( $posts ) == 0 ) {
			?>
			
				<p>Sorry, there were no results found for your search.</p>
			
			<?php
		}
	
		foreach ( $posts as $post ) {
			include('entry.php');
		}
	
	$theme->display( 'page_navigation' );
	
	$theme->display('footer');

?>