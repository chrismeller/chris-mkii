<?php if ( !defined( 'HABARI_PATH' ) ) { die('No direct access'); } ?>
<?php 

	$theme->display('header');
	
	?>
	
		<h1><?php echo $page_title; ?></h1>
	
	<?php
	
	echo '<ul id="archives" class="years">';
	foreach ( $archives as $year => $months ) {
		
		echo '<li class="year">' . $year;
		
		echo '<ul class="months">';
		foreach ( $months as $month => $days ) {
			
			echo '<li class="month">' . $month;
			
			echo '<ul class="days">';
			foreach ( $days as $day => $posts ) {
				
				echo '<li class="day">' . $day;
				
				echo '<ul class="posts">';
				foreach ( $posts as $post ) {
					
					echo '<li class="post"><a href="' . $post->permalink . '" title="' . _t( 'View post %s', array( $post->title ) ) . '">' . $post->title . '</a></li>';
					
				}
				echo '</ul>';
				
			}
			echo '</ul>';
			
		}
		echo '</ul>';
		
	}
	echo '</ul>';
	
	$theme->display( 'page_navigation' );
	
	$theme->display('footer');

?>