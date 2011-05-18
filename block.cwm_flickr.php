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
							
							// if there's a local thumbnail URL, use that instead of the remote one
							if ( $item['thumbnail_local'] != '' ) {
								$url = $item['thumbnail_local'];
							}
							else {
								$url = $item['thumbnail'];
							}
							
							echo '<li><a href="' . HTML::chars( $item['link'] ) . '" class="dotipsy rightwards" title="' . HTML::chars( $item['title'] ) . '"><img src="' . HTML::chars( $url ) . '" alt="' . HTML::chars( $item['title'] ) . '"></a></li>';
						}
						echo '</ul>';
					
					?>
					
					<a href="http://flickr.com/photos/mellertime" class="photostream">The rest of the photostream...</a>
				
				</div>
			
			</div>
			
		<?php 
	
	}
	
?>