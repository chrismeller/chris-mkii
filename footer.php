<?php if ( !defined( 'HABARI_PATH' ) ) { die('No direct access'); } ?>

			</div> <?php /* div#main */ ?>
			
			<div id="footer" class="span-24 last" role="contentinfo">
				<div id="colophon">
				
					<div id="copyright" class="span-22">
						<p>Presented by Chris Meller. Licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/3.0/us/" title="Creative Commons Attribution 3.0 United States License">Creative Commons</a> license.</p>
					</div>
					
					<div id="the-moose" class="span-2 last">
						<img src="<?php echo 'foo'; ?>/images/the_moose.png" alt="Moose" title="Mooses &lt;3!">
					</div>
					
				</div> <?php /* div#colophon */ ?>
			
		</div> <?php /* div#page */ ?>
		
		<?php
		
			$theme->footer();
			
			/* In order to see DB profiling information:
			 * 1. Insert this line in your config file: define( 'DEBUG', true );
			 * 2. Uncomment the following line.
			 */
			
			// include( 'db_profiling.php' );
			
		?>
		
	</body>
</html>