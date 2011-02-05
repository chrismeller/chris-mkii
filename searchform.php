<?php if ( !defined( 'HABARI_PATH' ) ) { die('No direct access'); } ?>

<form role="search" method="get" id="searchform" action="<?php URL::out('display_search'); ?>">
	<label class="screen-reader-text" for="s"><?php echo _t( 'Search for:' ); ?></label>
	<input type="search" name="criteria" id="s" placeholder="<?php echo HTML::chars( _t( 'Search' ) ); ?>" value="<?php echo HTML::chars( $search_criteria ); ?>">
	<input type="submit" id="searchsubmit" value="<?php echo HTML::chars( _t( 'Search' ) ); ?>">
</form>