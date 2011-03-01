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
	
	// figure out the tags we should display
	if ( count( $post->tags ) > 0 ) {
		$tags = _t( 'Tagged %s', array( Format::tag_and_list( $post->tags, ', ', ', ', true ) ) );
	}
	else {
		$tags = null;
	}
	
	// put together the meta section
	$meta = array();
	
	if ( $tags != null ) {
		$meta[] = '<span class="tags">' . $tags . '</span>';
	}
	
	if ( $post->info->comments_disabled != true ) {
		$meta[] = '<span class="comments-link">' . $theme->comments_link( $post ) . '</span>';
	}
	
	if ( ACL::access_check( $post->get_access(), 'edit' ) ) {
		$meta[] = '<span class="edit-link"><a class="post-edit-link" href="' . $post->editlink . '" title="' . _t( 'Edit Post' ) . '">' . _t( 'Edit' ) . '</a></span>';
	}
	
	$meta = implode( '<span class="meta-sep"> | </span>', $meta );

?>

<div id="post-<?php echo $post->id; ?>" class="<?php echo $theme->post_class( $post, $class ); ?>">
	<h2 class="entry-title">
		<a href="<?php echo $post->permalink; ?>" title="<?php echo HTML::chars( _t( 'Permalink to %s', array( $post->title ) ) ); ?>" rel="bookmark"><?php echo $post->title_out; ?></a>
	</h2>
	
	<div class="entry-meta">
		<?php echo $theme->posted_on( $post ); ?>
	</div>
	
	<div class="entry-content">
		<?php echo $post->content_out; ?>
	</div>
	
	<div class="entry-utility">
		<?php 
		
			echo $meta;
		
		?>
	</div>

</div>