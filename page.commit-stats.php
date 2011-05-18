<?php if ( !defined( 'HABARI_PATH' ) ) { die('No direct access'); } ?>
<?php 

	$theme->display('header');
	
	if ( !isset( $i ) ) {
		$i = 1;
	}
	
	if ( $i == 1 ) {
		$class = 'first-child';
	}
	
	if ( $i == count( $posts ) ) {
		$class = 'last-child';
	}
	
	$i++;
	
	// figure out the last update
	$last_update = Cache::get( 'cwm:commit_stats:last_update' );
	$last_update = HabariDateTime::date_create( $last_update );
	$last_update = $last_update->format( 'F j, Y' ) . ' at ' . $last_update->format( 'g:i a' );
	
	?>
		
		<div id="post-<?php echo $post->id; ?>" class="<?php echo $theme->post_class( $post, $class ); ?>">
			<h2 class="entry-title">
				<a href="<?php echo $post->permalink; ?>" title="<?php echo HTML::chars( _t( 'Permalink to %s', array( $post->title ) ) ); ?>" rel="bookmark"><?php echo $post->title_out; ?></a>
			</h2>
			
			<div class="entry-meta">
				Last updated <?php echo $last_update; ?>.
			</div>
			
			<div class="entry-content">
				<?php echo $post->content_out; ?>
			</div>
		</div>
		
	<?php
	
	$theme->display('footer');

?>