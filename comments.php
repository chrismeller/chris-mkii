<?php if ( !defined( 'HABARI_PATH' ) ) { die('No direct access'); } ?>

<?php

	if ( $post->info->comments_disabled != true ) {
		
		?>
		
			<div class="comments">
				<h4 id="respond" class="reply"><?php echo _t( 'Leave a Reply', 'cwm' ); ?></h4>
				
				<?php
				
					if ( Session::has_messages() ) {
						Session::messages_out();
					}
					
					$post->comment_form()->out();
				
				?>
				
			</div>
		
		<?php
		
	}

?>