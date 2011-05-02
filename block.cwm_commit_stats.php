<?php if ( !defined( 'HABARI_PATH' ) ) { die('No direct access'); } ?>

<?php 

	if ( $content->stats == null ) {
		// do nothing, just return
		return;
	}

?>

<div id="commit-stats" class="">
	
	<div class="wrap">
	
		<p>
			So far this week I have made <?php echo $content->stats->commits . ' ' . _n( 'commit', 'commits', $content->stats->commits ); ?> to <?php echo $content->stats->repos . ' ' . _n( 'repo', 'repos', $content->stats->repos ); ?>.
		</p>
	
	</div>
	
</div>