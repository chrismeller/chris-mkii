<?php if ( !defined( 'HABARI_PATH' ) ) { die('No direct access'); } ?>
<?php

	$class[] = 'block';
	$class[] = 'block-' . Utils::slugify( $block->title );
	
	if ( $block->_first ) {
		$class[] = 'first';
	}
	
	if ( $block->_last ) {
		$class[] = 'last';
	}
	
	$class = implode( ' ', $class );

?>
<div class="<?php echo $class; ?>">
	<?php 
	
		if ( $block->_show_title ) {
			?>
				<h3><?php echo $block->title; ?></h3>
			<?php
		}
		
	?>
	
		<div class="block-content">
			<?php echo $content; ?>
		</div>
		
	<?php
	
	?>
</div>