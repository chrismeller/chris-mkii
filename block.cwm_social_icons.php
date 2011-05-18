<?php if ( !defined( 'HABARI_PATH' ) ) { die('No direct access'); } ?>
<?php 

	if ( Cache::has( 'cwm:commit_stats:stats_total_this_week' ) ) {
		$this_week = Cache::get( 'cwm:commit_stats:stats_total_this_week' );
		
		$this_week = '<a href="' . Site::get_url('habari') . '/commit-stats" id="commits-this-week" class="dotipsy" title="Commits this Week"><span>' . $this_week->commits . '</span></a>';
	}
	else {
		$this_week = '';
	}

?>

<div id="social-icons" class="">
	
	<div class="wrap">
	
		<a href="https://github.com/chrismeller" id="github" class="dotipsy" title="Github"><span>Github</span></a>
		<a href="http://twitter.com/chrismeller" id="twitter" class="dotipsy" title="Twitter"><span>Twitter</span></a>
		<a href="http://trac.habariproject.org/habari?daysback=90&amp;authors=chrismeller&amp;ticket=on&amp;ticket_details=on&amp;milestone=on&amp;changeset=on&amp;update=Update" id="habari" class="dotipsy" title="Habari Project"><span>Habari Project</span></a>
		<?php echo $this_week; ?>
		
		<br class="clear" />
	
	</div>
	
</div>