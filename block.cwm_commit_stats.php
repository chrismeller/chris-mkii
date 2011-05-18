<?php if ( !defined( 'HABARI_PATH' ) ) { die('No direct access'); } ?>

<?php 

	if ( $content->stats == null ) {
		// do nothing, just return
		return;
	}
	
	// we have some reformatting to do first
	$commits = array();
	$repos = array();
	
	foreach ( $content->stats as $week => $point ) {
		
		$commits[ $week ] = '[' . $week . ', ' . $point->commits . ']';
		$repos[ $week ] = '[' . $week . ', ' . $point->repos . ']';
		
	}
	
	$commits = '[' . implode( ', ', $commits ) . ']';
	$repos = '[' . implode( ', ', $repos ) . ']';

?>

<div id="commit-stats" class="">
	
	<div class="wrap">
	
		<div id="commit-stats-placeholder" style="width:210px;height:75px;"></div>
	
	</div>
	
</div>

<script type="text/javascript">
	$( function() {
		var commits = <?php echo $commits; ?>;
		var repos = <?php echo $repos; ?>;
		$.plot( $('#commit-stats-placeholder'), [ commits, repos ] );
	} );
</script>