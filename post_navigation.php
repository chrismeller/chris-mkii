<?php if ( !defined( 'HABARI_PATH' ) ) { die('No direct access'); } ?>
<div class="post-nav">
	<?php 
	
		if ( $previous = $post->descend() ) {
			?>
			
				<div class="left">&laquo; <a href="<?php echo $previous->permalink; ?>" title="<?php echo _t( 'Go to previous post' ); ?>"><?php echo $previous->title; ?></a></div>
			
			<?php
		}
		
		if ( $next = $post->ascend() ) {
			?>
			
				<div class="right"><a href="<?php echo $next->permalink; ?>" title="<?php echo _t( 'Go to next post' ); ?>"><?php echo $next->title; ?></a> &raquo;</div>
			
			<?php
		}
	
	?>
	<br class="clear" />
</div>