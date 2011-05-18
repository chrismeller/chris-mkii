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
	
	if ( $last_update == null ) {
		$last_update = 'never';
	}
	else {
		$last_update = HabariDateTime::date_create( $last_update );
		$last_update = $last_update->format( 'F j, Y' ) . ' at ' . $last_update->format( 'g:i a' );
	}
	
	
	// null out our values
	$data = array();
	$commits = array();
	$repos = array();
	
	// get our stats from the cache
	$data['this_week'] = Cache::get( 'cwm:commit_stats:stats_this_week' );
	$data['last_52'] = Cache::get( 'cwm:commit_stats:stats_last_52' );
	
	
	if ( $data['this_week'] == null ) {
		$data['this_week'] = array();
	}
	
	if ( $data['last_52'] == null ) {
		$data['last_52'] = array();
	}
	
	
	// now we have some reformatting to do
	$commits['this_week'] = array();
	$commits['last_52'] = array();
	
	$repos['this_week'] = array();
	$repos['last_52'] = array();
	
	
	foreach ( array( 'this_week', 'last_52' ) as $key ) {
		
		foreach ( $data[ $key ] as $week => $point ) {
			$commits[ $key ][ $week ] = '[' . $week . ', ' . $point->commits . ']';
			$repos[ $key ][ $week ] = '[' . $week . ', ' . $point->repos . ']';
		}
		
		$commits[ $key ] = '[' . implode( ', ', $commits[ $key ] ) . ']';
		$repos[ $key ] = '[' . implode( ', ', $repos[ $key ] ) . ']';
		
	}
	
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
			
			<h3>This Week</h3>
			<div id="placeholder-this-week" style="width: 680px; height: 200px;"></div>
			<div id="legend-last-52"><img src="<?php echo Site::get_url('theme') . '/images/commit-stats-legend.png'; ?>"></div>
			
			<br>
			
			<h3>52 Week</h3>
			<div id="placeholder-last-52" style="width: 680px; height: 200px;"></div>
			<div id="legend-last-52"><img src="<?php echo Site::get_url('theme') . '/images/commit-stats-legend.png'; ?>"></div>
			
		</div>
		
		<script type="text/javascript">
			$( function() {
				var this_week_commits = <?php echo $commits['this_week']; ?>;
				var this_week_repos = <?php echo $repos['this_week']; ?>;
				
				var last_52_commits = <?php echo $commits['last_52']; ?>;
				var last_52_repos = <?php echo $repos['last_52']; ?>;

				var options = {
					legend: {
					},
					grid: {
						//hoverable: true
					}
				};

				var this_week_data = [
                	{
						data: this_week_commits
					},
					{
						data: this_week_repos
					}
      			];
				
				var last_52_data = [
	            	{
		            	data: last_52_commits
	            	},
	            	{
		            	data: last_52_repos
	            	}
				];
				

				$.plot( '#placeholder-this-week', this_week_data, options );
				$.plot( '#placeholder-last-52', last_52_data, options );
			} );
		</script>
		
	<?php
	
	$theme->display('footer');

?>