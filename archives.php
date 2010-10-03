<?php
/*
Template Name: Archives Page
*/
?>
<?php get_header(); ?>

		<div id="content" class="span-18" role="main">
			<div class="wrap">

				<?php
				/* Run the loop to output the posts.
				 * If you want to overload this in a child theme then include a file
				 * called loop-index.php and that will be used instead.
				 */
				 get_template_part( 'loop', 'archives' );
				?>
				
			</div>
		</div><?php /* div#content */ ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
