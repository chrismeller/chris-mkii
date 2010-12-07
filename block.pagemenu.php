<?php if ( !defined( 'HABARI_PATH' ) ) { die('No direct access'); } ?>

<div class="menu-header">

	<ul id="menu-<?php echo Utils::slugify( $content->title ); ?>" class="menu">
	
		<?php 
		
			foreach ( $content->menupages as $page ) {
				
				?>
				
					<li class="menu-item">
						<a href="<?php echo $page->permalink; ?>"><?php echo $page->title; ?></a>
					</li>
				
				<?php
				
			}
		
		?>
		
	</ul>
	
</div>