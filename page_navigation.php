<?php if ( !defined( 'HABARI_PATH' ) ) { die('No direct access'); } ?>

<div id="page-selector">
	<?php echo $theme->prev_page_link(); ?> <?php echo $theme->page_selector( null, array( 'leftSide' => 2, 'rightSide' => 2, 'hideIfSinglePage' => true ) ); ?> <?php echo $theme->next_page_link(); ?>
</div>
