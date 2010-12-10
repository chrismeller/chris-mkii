<?php if ( !defined( 'HABARI_PATH' ) ) { die('No direct access'); } ?>
<?php 

	$theme->display('header');
	
	?>
	
		<h1><?php echo $page_title; ?></h1>
		
		<div id="archives_page">
	
		<?php
			
			echo '<div class="years span-17 clear last">';
			$years_i = 1;
			foreach ( $archives as $year => $months ) {
				
				$class = array();
				
				if ( $years_i == 1 ) {
					$class[] = 'first-child';
				}
				
				if ( $years_i == count( $archives ) ) {
					$class[] = 'last-child';
				}
				
				$class = implode( ' ', $class );
				
				echo '<span class="year span-1 ' . $class . '">' . $year . '</span>';
				
				echo '<div class="months span-16 last">';
				$months_i = 1;
				foreach ( $months as $month => $days ) {
					
					$class = array();
					
					if ( $months_i == 1 ) {
						$class[] = 'first-child';
					}
					
					if ( $months_i == count( $months ) ) {
						$class[] = 'last-child';
					}
					
					$class = implode( ' ', $class );
					
					echo '<span class="month span-1 ' . $class . '">' . HabariDateTime::date_create()->set_date( $year, $month, 1 )->format('M') . '</span>';
					
					echo '<div class="days span-15 last">';
					$days_i = 1;
					foreach ( $days as $day => $posts ) {
						
						$class = array();
						
						if ( $days_i == 1 ) {
							$class[] = 'first-child';
						}
						
						if ( $days_i == count( $days ) ) {
							$class[] = 'last-child';
						}
						
						$class = implode( ' ', $class );
						
						echo '<span class="day span-1">' . $day . '</span>';
						
						echo '<div class="posts ' . $class . ' span-14 last">';
						$posts_i = 1;
						foreach ( $posts as $post ) {
							
							$class = array();
							
							if ( $posts_i == 1 ) {
								$class[] = 'first-child';
							}
							
							if ( $posts_i == count( $posts ) ) {
								$class[] = 'last-child';
							}
							
							$class = implode( ' ', $class );
							
							echo '<span class="post span-14 ' . $class . '"><a href="' . $post->permalink . '">' . $post->title . '</a></span>';
							
							$posts_i++;
						}
						echo '</div>';
						
						$days_i++;
					}
					echo '</div>';
					
					$months_i++;
				}
				echo '</div>';
				
				$years_i++;
			}
			echo '</div>';
		
		/*
			echo '<ul class="yearslast">';
			foreach ( $archives as $year => $months ) {
				
				echo '<li class="year">' . $year;
				
				echo '<ul class="monthslast">';
				foreach ( $months as $month => $days ) {
					
					echo '<li class="month">' . HabariDateTime::date_create()->set_date( $year, $month, 1 )->format('M');
					
					echo '<ul class="days">';
					$days_i = 1;
					foreach ( $days as $day => $posts ) {
						
						$class = array();
						
						if ( $days_i == 1 ) {
							$class[] = 'first';
						}
						
						if ( $days_i == count( $days ) ) {
							$class[] = 'last';
						}
						
						$class = implode( ' ', $class );
						
						echo '<li class="day ' . $class . '">' . $day;
						
						echo '<ul class="posts">';
						foreach ( $posts as $post_num => $post ) {
							
							$class = array();
							
							if ( $post_num == 0 ) {
								$class[] = 'first';
							}
							
							if ( $post_num == count( $posts ) - 1 ) {
								$class[] = 'last';
							}
							
							$class = implode( ' ', $class );
							
							echo '<li class="post ' . $class . '">';
							echo '<a href="' . $post->permalink . '" class="' . $class . '">' . $post->title . '</a>';
							echo '</li>';
							
						}
						echo '</li>';
						echo '</ul>';
						
						$days_i++;
						
					}
					echo '</li>';
					echo '</ul>';
					
				}
				echo '</li>';
				echo '</ul>';
				
			}
			echo '</ul>';
			*/
			
		?>
		
	</div>
	
	<?php
	
	$theme->display( 'page_navigation' );
	
	$theme->display('footer');

?>