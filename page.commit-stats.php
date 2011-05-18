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
	
	// get our stats from the cache
	$last_52 = Cache::get( 'cwm:commit_stats:stats_last_52' );
	
	
	// we have some reformatting to do first
	$last_52_commits = array();
	$last_52_repos = array();
	
	foreach ( $last_52 as $week => $point ) {
		
		$last_52_commits[ $week ] = '[' . $week . ', ' . $point->commits . ']';
		$last_52_repos[ $week ] = '[' . $week . ', ' . $point->repos . ']';
		
	}
	
	$last_52_commits = '[' . implode( ', ', $last_52_commits ) . ']';
	$last_52_repos = '[' . implode( ', ', $last_52_repos ) . ']';
	
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
			
			<div id="placeholder-last-52" style="width: 680px; height: 200px;"></div>
			<div id="placeholder-this-week" style="width: 680px; height: 200px;"></div>
			
		</div>
		
		<script type="text/javascript">
			$( function() {
				var last_52_commits = <?php echo $last_52_commits; ?>;
				var last_52_repos = <?php echo $last_52_repos; ?>;
				$.plot( $('#placeholder-last-52'), [ last_52_commits, last_52_repos ] );
			} );
		</script>
		
	<?php
	
	$theme->display('footer');

?>