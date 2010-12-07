<?php if ( !defined( 'HABARI_PATH' ) ) { die('No direct access'); } ?>

<form role="search" method="get" id="searchform" action="<?php URL::out('display_search'); ?>">
	<label class="screen-reader-text" for="s"><?php echo _t( 'Search for:' ); ?></label>
	<div class="left-round"></div>
		<input type="text" name="criteria" id="s" value="<?php echo HTML::chars( $search_criteria ); ?>">
	<div class="right-round"></div>
	<input type="submit" id="searchsubmit" value="<?php echo HTML::chars( _t( 'Search' ) ); ?>">
</form>