<?php if ( !defined( 'HABARI_PATH' ) ) { die('No direct access'); } ?>
<?php 

	$theme->display('header');
	
	?>
	
		<h1><?php echo $page_title; ?></h1>
		
		<div id="archives_page">
	
		<?php
		
			$last_year = null;
			$last_month = null;
			$last_day = null;
			
			foreach ( $posts as $post ) {
				
				// pull out the values
				$year = $post->pubdate->format('Y');
				$month = $post->pubdate->format('M');
				$day = $post->pubdate->format('d');
				
				// figure out what to display
				if ( $last_year == $year && $last_month == $month && $last_day == $day ) {
					$year = '&nbsp;';
					$month = '&nbsp;';
					$day = '&nbsp;';
				}
				else if ( $last_year == $year && $last_month == $month ) {
					$year = '&nbsp;';
					$month = '&nbsp;';
				}
				else if ( $last_year == $year ) {
					$year = '&nbsp;';
				}
				
				?>
				
					<div class="span-17 archives-line last">
						<div class="year span-1"><?php echo $year; ?></div>
						<div class="month span-1"><?php echo $month; ?></div>
						<div class="day span-1"><?php echo $day; ?></div>
						<div class="post span-14 last"><a href="<?php echo $post->permalink; ?>" title="<?php echo _t( 'View post %s', array( $post->title ) ); ?>"><?php echo $post->title; ?></a></div>
					</div>
				
				<?php
				
				// set the last values we looked at for the next loop
				$last_year = $post->pubdate->format('Y');
				$last_month = $post->pubdate->format('M');
				$last_day = $post->pubdate->format('d');
				
			}
		
		?>
		
	</div>
	
	<?php
	
	$theme->display( 'page_navigation' );
	
	$theme->display('footer');

?>