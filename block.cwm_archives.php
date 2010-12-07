<?php if ( !defined( 'HABARI_PATH' ) ) { die('No direct access'); } ?>
<?php 
	
	if ( count( $content->archives ) == 0 ) {
		return;
	}
	else {
		
		?>
		
			<div id="archives" class="block-container">
			
				<div class="wrap">
				
					<h3 class="block-title">Archives</h3>
					
					<?php 
					
						echo '<ul>';
						
						$i = 1;
						foreach ( $content->archives as $archive ) {
							
							if ( $i == 1 ) {
								$class = 'class="first"';
							}
							else if ( $i == count( $content->archives ) ) {
								$class = 'class="last"';
							}
							else {
								$class = '';
							}
							
							$date = HabariDateTime::date_create()->set_date( $archive->year, $archive->month, 1 );
							$url = URL::get( 'display_entries_by_date', array( 'year' => $date->format('Y'), 'month' => $date->format('m') ) );
							
							$text = $date->format('F') . ', ' . $date->format('Y');
							
							echo '<li ' . $class . '><a href="' . $url . '" title="' . $text . '">' . $text . '</a><span class="post-count">' . $archive->ct . '</span></li>';
							
							$i++;
							
						}
						echo '</ul>';
					
					?>
					
					<a href="<?php echo Site::get_url( 'habari' ); ?>/archives" class="more-archives" title="More archives...">More archives...</a>
				
				</div>
			
			</div>
			
		<?php 
	
	}
	
?>