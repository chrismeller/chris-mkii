<?php if ( !defined( 'HABARI_PATH' ) ) { die('No direct access'); } ?>

<div class="comments">
	<h3 id="comments"><?php echo _t( 'Comments', 'cwm' ); ?></h3>
	
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
								$author_url = '';
							}
							else {
								$pieces = InputFilter::parse_url( $comment->url );
								if ( $pieces['is_error'] == true ) {
									$author_url = '';
								}
								else {
									$author_url = '<a href="' . $comment->url_out . '" rel="external nofollow">' . $pieces['host'] . '</a>';
								}
							}
							
							$posted_on = 'Posted on <a href="' . $post->permalink . '#' . $id . '" title="' . _t( 'Comment Permalink', 'cwm' ) . '">' . $comment->date->format( 'F j, Y' ) . ' at ' . $comment->date->format( 'g:i a' ) . '</a>';
							
							?>
							
								<li id="<?php echo $id; ?>" class="<?php echo $class; ?>">
									<div class="author clearfix">
										<div class="gravatar span-2"><img src="<?php echo $comment->gravatar; ?>"></div>
										<div class="name"><?php echo $comment->name_out; ?></div>
										<div class="url"><?php echo $author_url; ?></div>
									</div>
									<div class="content prepend-2">
										<?php echo $comment->content_out; ?>
									</div>
									
									<div class="comment-utility prepend-2">
										<span class="posted-on"><?php echo $comment->date->format( 'F j, Y' ) . ' at ' . $comment->date->format( 'g:i a'); ?></span>
										<span class="meta-sep"> | </span>
										<span class="permalink">
											<a href="<?php echo $post->permalink; ?>#<?php echo $id; ?>" title="<?php _t( 'Comment Permalink', 'cwm' ); ?>"><?php echo _t( 'Permalink', 'cwm' ); ?></a>
										</span>
										<?php 
									
											if ( ACL::access_check( $comment->get_access(), 'edit' ) ) {
												?>
													<span class="meta-sep"> | </span>
													<span class="edit-link">
														<a class="comment-edit-link" href="<?php echo $comment->editlink; ?>" title="<?php echo _t( 'Edit Comment' ); ?>"><?php echo _t( 'Edit' ); ?></a>
													</span>
												<?php
											}
									
										?>
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
					<h3 id="respond" class="reply"><?php echo _t( 'Leave a Reply', 'cwm' ); ?></h3>
					
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