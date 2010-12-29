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
							
							// post-comment you'll be redirected to an anchor of #comment-ID, so be sure it matches
							$id = 'comment-' . $comment->id;
							
							$class = $theme->comment_class( $comment );
							
							// we generate the URL ourselves instead of using the Habari-supplied method because we want rel attributes
							if ( $comment->url_out == '' ) {
								$author = $comment->name_out;
							}
							else {
								$author = '<a href="' . $comment->url_out . '" rel="external nofollow">' . $comment->name_out . '</a>';
							}
							
							$posted_on = 'on <a href="' . $post->permalink . '#' . $id . '" title="' . _t( 'Comment Permalink', 'cwm' ) . '">' . $comment->date->format( 'F j, Y' ) . ' at ' . $comment->date->format( 'g:i a' ) . '</a>';
							
							if ( User::identify()->can( 'edit_comment', $comment ) ) {
								$meta = '<span class="meta-sep"> | </span> <span class="edit-link"><a href="' . $comment->editlink . '" class="comment-edit-link" title="' . _t( 'Edit Comment', 'cwm' ) . '">' . _t( 'Edit Comment', 'cwm' ) . '</a></span>';
							}
							else {
								$meta = '';
							}
							
							?>
							
								<li id="<?php echo $id; ?>" class="<?php echo $class; ?>">
									<span class="author"><?php echo $author; ?></span>
									<span class="posted-on"><?php echo $posted_on; ?></span>
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