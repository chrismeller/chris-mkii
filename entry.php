<?php if ( !defined( 'HABARI_PATH' ) ) { die('No direct access'); } ?>

<?php 

	if ( !isset( $i ) ) {
		$i = 1;
	}
	
	if ( $i == 1 ) {
		$class = 'first-child';
	}
	
	if ( $i == count( $posts ) ) {
		$class = 'last-child';
	}
	
	$i++;

?>

<div id="post-<?php echo $post->id; ?>" class="<?php echo $theme->post_class( $post, $class ); ?>">
	<h2 class="entry-title">
		<a href="<?php echo $post->permalink; ?>" title="<?php echo HTML::chars( _t( 'Permalink to %s', array( $post->title ) ) ); ?>" rel="bookmark"><?php echo $post->title_out; ?></a>
	</h2>
	
	<div class="entry-meta">
		<?php echo $theme->posted_on( $post ); ?>
	</div>
	
	<div class="entry-summary">
		<p>
			<?php echo $theme->more( $post ); ?>
		</p>
	</div>
	
	<div class="entry-utility">
		<span class="tags"><?php echo _t( 'Tagged %s', array( Format::tag_and_list( $post->tags, ', ', ', ' ) ) ); ?></span>
		<span class="meta-sep"> | </span>
		<span class="comments-link"><?php echo $theme->comments_link( $post ); ?></span>
		<?php 
		
			if ( ACL::access_check( $post->get_access(), 'edit' ) ) {
				?>
					<span class="meta-sep"> | </span>
					<span class="edit-link">
						<a class="post-edit-link" href="<?php echo $post->editlink; ?>" title="<?php echo _t( 'Edit Post' ); ?>"><?php echo _t( 'Edit' ); ?></a>
					</span>
				<?php
			}
		
		?>
	</div>

</div>