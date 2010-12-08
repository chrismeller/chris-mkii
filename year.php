<?php if ( !defined( 'HABARI_PATH' ) ) { die('No direct access'); } ?>
<?php 

	$theme->display('header');
	
	$date = HabariDateTime::date_create()->set_date( $year, 1, 1 )->format('Y');
	
	?>
	
		<h1><?php echo _t( 'Yearly Archives: %s', array( $date ) ); ?></h1>
	
	<?php
	
		if ( count( $posts ) == 0 ) {
			?>
			
				<p>Sorry, there were no posts for that year.</p>
			
			<?php
		}
	
		foreach ( $posts as $post ) {
			include('entry.php');
		}
	
	$theme->display( 'page_navigation' );
	
	$theme->display('footer');

?>