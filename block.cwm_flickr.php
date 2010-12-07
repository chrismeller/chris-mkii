<?php if ( !defined( 'HABARI_PATH' ) ) { die('No direct access'); } ?>
<?php 
	
	if ( count( $content->items ) == 0 ) {
		return;
	}
	else {
		
		?>
		
			<div id="flickr" class="block-container">
			
				<div class="wrap">
				
					<h3 class="block-title">Recent Photos</h3>
					
					<?php 
					
						echo '<ul>';
						foreach ( $content->items as $item ) {
							echo '<li><a href="' . HTML::chars( $item['link'] ) . '" title="' . HTML::chars( $item['title'] ) . '"><img src="' . HTML::chars( $item['thumbnail'] ) . '" alt="' . HTML::chars( $item['title'] ) . '"></a></li>';
						}
						echo '</ul>';
					
					?>
					
					<a href="http://flickr.com/photos/mellertime" class="photostream">The rest of the photostream...</a>
				
				</div>
			
			</div>
			
		<?php 
	
	}
	
?>