<?php if ( !defined( 'HABARI_PATH' ) ) { die('No direct access'); } ?>

<div class="comments">
	<h4 id="comments"><?php echo _t( 'Comments', 'cwm' ); ?></h4>
	
	<?php
	
		if ( $post->comments->moderated->count == 0 ) {
			
			?>
			
				<p class="no-comments"><?php echo _t( 'There are currently no comments.', 'cwm' ); ?></p>
			
			<?php
			
		}
		else {
			
			?>
			
				<ol id="entry-comments">
					<?php
					
						foreach ( $post->comments->moderated as $comment ) {
							
							// figure out a bunch of values for the HTML
							$id = 'comment_' . $comment->id;
							
							$class = array( 'comment' );
							if ( $comment->status == Comment::status( 'unapproved' ) ) {
								$class[] = 'unapproved';
							}
							$class = implode( ' ', $class );
							
							if ( $comment->url_out == '' ) {
								$author = $comment->name_out;
							}
							else {
								$author = '<a href="' . $comment->url_out . '" rel="external">' . $comment->name_out . '</a>';
							}
							
							$meta = 'on <a href="' . $post->permalink . '#' . $id . '" title="' . _t( 'Comment Permalink', 'cwm' ) . '">' . $comment->date->format( 'F j, Y' ) . ' at ' . $comment->date->format( 'g:i a' ) . '</a>';
							
							?>
							
								<li id="<?php echo $id; ?>" class="<?php echo $class; ?>">
									<span class="author"><?php echo $author; ?></span>
									<span class="meta"><?php echo $meta; ?></span>
									<div class="content">
										<?php echo $comment->content_out; ?>
									</div>
								</li>
							
							<?php
							
						}
						
					?>
				</ol>
			
			<?php
			
		}
		
		// now for the comment form!
		if ( $post->info->comments_disabled == true ) {
			
			?>
			
				<p><?php echo _t( 'Comments are disabled.', 'cwm' ); ?></p>
			
			<?php
			
		}
		else {
			
			?>
			
				<div class="reply">
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
</div>