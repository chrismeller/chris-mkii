<?php if ( !defined( 'HABARI_PATH' ) ) { die('No direct access'); } ?>
<?php

	class CWM extends Theme {
		
		private $headers = array(
			array(
				'img' => 'header_sign.jpg',
				'flickr' => 'http://www.flickr.com/photos/mellertime/4485964682/',
				'width' => 950,
				'height' => 250,
			),
			array(
				'img' => 'header_duckies.jpg',
				'flickr' => 'http://www.flickr.com/photos/mellertime/4710923546/',
				'width' => 950,
				'height' => 250,
			),
			array(
				'img' => 'header_pier.jpg',
				'flickr' => 'http://www.flickr.com/photos/mellertime/4485317853/',
				'width' => 950,
				'height' => 250,
			),
			array(
				'img' => 'header_lake.jpg',
				'flickr' => 'http://www.flickr.com/photos/mellertime/3576628927/',
				'width' => 950,
				'height' => 250,
			),
			array(
				'img' => 'header_shoreline.jpg',
				'flickr' => 'http://www.flickr.com/photos/mellertime/4485346693/',
				'width' => 950,
				'height' => 250,
			),
			array(
				'img' => 'header_seagull.jpg',
				'flickr' => 'http://www.flickr.com/photos/mellertime/4485971464/',
				'width' => 950,
				'height' => 250,
			),
			array(
				'img' => 'header_waves.jpg',
				'flickr' => 'http://www.flickr.com/photos/mellertime/4485971102/',
				'width' => 950,
				'height' => 250,
			),
			array(
				'img' => 'header_pier_waves.jpg',
				'flickr' => 'http://www.flickr.com/photos/mellertime/4485970534/',
				'width' => 950,
				'height' => 250,
			),
			array(
				'img' => 'header_shoreline2.jpg',
				'flickr' => 'http://www.flickr.com/photos/mellertime/4485969242/',
				'width' => 950,
				'height' => 250,
			),
			array(
				'img' => 'header_boy-in-the-waves.jpg',
				'flickr' => 'http://www.flickr.com/photos/mellertime/4485967894/',
				'width' => 950,
				'height' => 250,
			),
			array(
				'img' => 'header_kite.jpg',
				'flickr' => 'http://www.flickr.com/photos/mellertime/4480681848/',
				'width' => 950,
				'height' => 250,
			),
			array(
				'img' => 'header_birds.jpg',
				'flickr' => 'http://www.flickr.com/photos/mellertime/4480577438/',
				'width' => 950,
				'height' => 250,
			),
			array(
				'img' => 'header_cow_sign.jpg',
				'flickr' => 'http://www.flickr.com/photos/mellertime/3580807026/',
				'width' => 950,
				'height' => 250,
			),
			array(
				'img' => 'header_clouds.jpg',
				'flickr' => 'http://www.flickr.com/photos/mellertime/3577443928/',
				'width' => 950,
				'height' => 250,
			),
			array(
				'img' => 'header_mountain_road.jpg',
				'flickr' => 'http://www.flickr.com/photos/mellertime/3576635601/',
				'width' => 950,
				'height' => 250,
			),
			array(
				'img' => 'header_clouds2.jpg',
				'flickr' => 'http://www.flickr.com/photos/mellertime/3576636619/',
				'width' => 950,
				'height' => 250,
			),
			array(
				'img' => 'header_river.jpg',
				'flickr' => 'http://www.flickr.com/photos/mellertime/3565811710/',
				'width' => 950,
				'height' => 250,
			),
			array(
				'img' => 'header_seagull2.jpg',
				'flickr' => 'http://www.flickr.com/photos/mellertime/4485317349/',
				'width' => 950,
				'height' => 250,
			),
			array(
				'img' => 'header_duck.jpg',
				'flickr' => 'http://www.flickr.com/photos/mellertime/4710275503/',
				'width' => 950,
				'height' => 250,
			),
			array(
				'img' => 'header_barn_storm.jpg',
				'flickr' => 'http://www.flickr.com/photos/mellertime/4921598903/',
				'width' => 950,
				'height' => 250,
			),
			array(
				'img' => 'header_cliffs_chapel.jpg',
				'flickr' => 'http://www.flickr.com/photos/mellertime/5248367816/',
				'width' => 950,
				'height' => 250,
			),
			array(
				'img' => 'header_cliffs_flag.jpg',
				'flickr' => 'http://www.flickr.com/photos/mellertime/5248373366/',
				'width' => 950,
				'height' => 250,
			),
			array(
				'img' => 'header_water_wheel.jpg',
				'flickr' => 'http://www.flickr.com/photos/mellertime/5248355922/',
				'width' => 950,
				'height' => 250,
			),
			/*
			array(
				'img' => 'header_coi_lake_reflection.jpg',
				'flickr' => 'http://www.flickr.com/photos/mellertime/5248355922/',
				'width' => 950,
				'height' => 250,
			),
			*/
			/*
			array(
				'img' => 'header_reedy_falls.jpg',
				'flickr' => 'http://www.flickr.com/photos/mellertime/5248355922/',
				'width' => 950,
				'height' => 250,
			),
			*/
			array(
				'img' => 'header_falls-bridge.jpg',
				'flickr' => 'http://www.flickr.com/photos/mellertime/5708962476/',
				'width' => 950,
				'height' => 250,
			),
			array(
				'img' => 'header_falls.jpg',
				'flickr' => 'http://www.flickr.com/photos/mellertime/5708939168/',
				'width' => 950,
				'height' => 250,
			),
			array(
				'img' => 'header_falls2.jpg',
				'flickr' => 'http://www.flickr.com/photos/mellertime/5708966738/',
				'width' => 950,
				'height' => 250,
			),
			array(
				'img' => 'header_seagull_prints.jpg',
				'flickr' => 'http://www.flickr.com/photos/mellertime/5688943152/',
				'width' => 950,
				'height' => 250,
			),
		);
		
		public function action_init_theme ( $theme ) {
			
			// we don't want to include our class on the admin and nothing else is of value in there
			if ( $theme == $this ) {
				
				// apply autop to post content
				Format::apply( 'autop', 'post_content_out' );
				
				// apply autop to comment content
				Format::apply( 'autop', 'comment_content_out' );
				
				// turn tag output into a list
				Format::apply( 'tag_and_list', 'post_tags_out' );
				
				// display excerpts of 100 characters or 1 paragraph
				//Format::apply_with_hook_params( 'more', 'post_content_out', _t('Continue reading &rarr;'), 100, 1 );
				Plugins::register( array( $this, 'more_old' ), 'filter', 'post_content_out' );

				Format::apply( 'search_highlight', 'post_content_out' );
				
				include_once('html.php');
				
				Stack::add( 'template_header_javascript', Site::get_url( 'scripts' ) . '/jquery.js', 'jquery' );
				Stack::add( 'template_header_javascript', Site::get_url( 'theme' ) . '/js/main.js', 'cwm_main_js', 'jquery' );
				
				// now jquery tipsy!
				Stack::add( 'template_header_javascript', Site::get_url( 'theme' ) . '/tipsy/javascripts/jquery.tipsy.js', 'tipsy', 'jquery' );
				Stack::add( 'template_stylesheet', array( Site::get_url( 'theme' ) . '/tipsy/stylesheets/tipsy.css', 'screen' ), 'tipsy' );
				
			}
			
		}
		
		public function action_template_header ( ) {
			
			if ( isset( $_SERVER['SERVER_NAME'] ) && $_SERVER['SERVER_NAME'] == 'localhost' ) {
				$favicon = 'favicon-grey.ico';
			}
			else {
				$favicon = 'favicon.ico';
			}
			
			echo '<link rel="Shortcut Icon" href="' . Site::get_url('theme') . '/images/' . $favicon . '">';
			
		}
		
		public function action_admin_header ( ) {
			
			$this->action_template_header();
			
		}

		public function more ( $content, $post ) {
			
			$more_text = 'Read the rest &#8594;';
			$max_paragraphs = 1;
			
			$show_more = false;
			$matches = preg_split( '/<!--\s*more\s*-->/is', $content, 2, PREG_SPLIT_NO_EMPTY );
			
			if ( count( $matches ) > 1 ) {
				$summary = $matches[0];
				$remainder = $matches[1];
				if ( trim( $remainder ) != '' ) {
					$show_more = true;
				}
			}
			else {
				$ht = new HtmlTokenizer( $content, false );
				$set = $ht->parse();
				
				$stack = array();
				$paragraph = 0;
				$token = $set->current();
				$summary = new HTMLTokenSet(false);
				$remainder = new HTMLTokenSet(false);
				
				$set->rewind();
				
				for ( $token = $set->current(); $set->valid(); $token = $set->next() ) {
					
					if ( $token['type'] == HTMLTokenizer::NODE_TYPE_ELEMENT_OPEN ) {
						$stack[ $token['name'] ] = $token['name'];
					}
					
					if ( $paragraph < $max_paragraphs ) {
						$summary[] = $token;
					}
					
					if ( $paragraph >= $max_paragraphs ) {
						$remainder[] = $token;
						$show_more = true;
					}
					
					if ( $token['type'] == HTMLTokenizer::NODE_TYPE_ELEMENT_CLOSE ) {
						
						if ( isset( $stack[ $token['name'] ] ) ) {
							while ( end($stack) != $token['name'] ) {
								array_pop($stack);
							}
							array_pop($stack);
						}
						
						if ( count( $stack ) == 0 ) {
							$paragraph++;
						}
						
					}
					
				}
			}

			// are we displaying a single page?
			if ( $post->slug == Controller::get_var('slug') ) {
				// put it back together with the #more tag in the middle
				$content = $summary . '<div id="more">' . _t( 'Continues here &#8594;', 'cwm' ) . '</div>' . $remainder;
			}
			else if ( $show_more == true ) {
				$content = $summary . '<a href="' . $post->permalink . '#more">' . $more_text . '</a>';
			}
			else {
				$content = $summary . $remainder;
			}
			
			return $content;
			
		}

		public function more_old ( $content, $post ) {
			
			// are we displaying a single page?
			if ( $this->request->display_entry || $this->request->display_page ) {
				return $content;
			}
			
			// otherwise, we want to get the summary
			$return = strip_tags( $content, 'p' );
			
			$return = MultiByte::str_replace( '</p>', ' ', $return );
			$return = MultiByte::str_replace( '<p>', '', $return );
			
			if ( MultiByte::strlen( $return ) > 55 ) {
				
				$pieces = explode( ' ', $return );
				
				$words = array_slice( $pieces, 0, 55 );
				
				$return = implode( ' ', $words );
				
				// build the more link
				$link = '<a href="' . $post->permalink . '" title="' . HTML::chars( _t( 'Read the rest of %s', array( $post->title ) ) ) . '">' . _t( 'Continue reading&nbsp;&rarr;' ) . '</a>';
				
				$return .= ' ... ' . $link;
				
				// andfinally, wrap it in a p tag
				$return = '<p>' . $return . '</p>';
				
			}
			
			return $return;
			
		}
		
		public function more_old2 ( $post, $length = 55 ) {
			
			if ( $this->request->display_entry || $this->request->display_page ) {
				$return = $post->content_out;
			}
			else {
				
				$return = strip_tags( $post->content, 'p' );
				
				$return = MultiByte::str_replace( '</p>', ' ', $return );
				$return = MultiByte::str_replace( '<p>', '', $return );
				
				if ( MultiByte::strlen( $return ) > $length ) {
					
					$pieces = explode( ' ', $return );
					
					$words = array_slice( $pieces, 0, $length );
					
					$return = implode( ' ', $words );
					
					// build the more link
					$link = '<a href="' . $post->permalink . '" title="' . HTML::chars( _t( 'Read the rest of %s', array( $post->title ) ) ) . '">' . _t( 'Continue reading&nbsp;&rarr;' ) . '</a>';
					
					$return .= ' ... ' . $link;
					
				}
				
			}
			
			return $return;
			
		}
		
		public function add_template_vars ( ) {
			
			parent::add_template_vars();
			
			if ( isset( $this->criteria ) ) {
				$this->search_criteria = $this->criteria;
			}
			else {
				$this->search_criteria = '';
			}
			
			$site_title = Options::get('title');
			
			// if a title has been set elsewhere, don't overwrite it
			if ( isset( $this->title ) ) {
				// nothing
			}
			else if ( ( $this->request->display_entry || $this->request->display_page ) && isset( $this->post ) ) {
				$this->title = $this->post->title . ' | ' . $site_title;
			}
			else if ( $this->request->display_entries_by_date ) {
				
				// if it's year and month and day
                            if ( isset( $this->year ) && isset( $this->month ) && isset( $this->day ) ) {
                                $date = HabariDateTime::date_create()->set_date( $this->year, $this->month, $this->day )->format( 'F d, Y' );
                                $this->page_title = 'Daily Archives: ' . $date;
                                $this->title = $this->page_title . ' | ' . $site_title;
                            }
                            else if ( isset( $this->year ) && isset( $this->month ) ) {
                                    $date = HabariDateTime::date_create()->set_date( $this->year, $this->month, 1 )->format( 'F, Y' );
                                    $this->page_title = 'Monthly Archives: ' . $date;
                                    $this->title = $this->page_title . ' | ' . $site_title;
                            }
                            else if ( isset( $this->year ) ) {
                                    $date = HabariDateTime::date_create()->set_date( $this->year, 1, 1 )->format( 'Y' );
                                    $this->page_title = 'Yearly Archives: ' . $date;
                                    $this->title = $this->page_title . ' | ' . $site_title;
                            }
				
			}
			else if ( $this->request->display_entries_by_tag ) {
				$this->page_title = _t( 'Posts tagged with "%s"', array( $this->tag ) );
				$this->title = $this->tag . ' | ' . $site_title;
			}
			else {
				// something we don't recognize
				$this->title = $site_title;
			}
			
		}
		
		public function filter_block_list ( $block_list ) {
			
			$block_list[ 'cwm_archives' ] = _t( 'CWM Archives' );
			$block_list[ 'cwm_flickr' ] = _t( 'CWM Flickr' );
			$block_list[ 'cwm_social_icons' ] = _t( 'CWM Social Icons' );
			$block_list[ 'cwm_commit_stats' ] = _t( 'CWM Commit Stats' );
			
			return $block_list;
			
		}
		
		public function action_block_content_cwm_archives ( $block, $theme ) {
			
			if ( Cache::has( 'cwm:archives_block' ) ) {
				$archives = Cache::get( 'cwm:archives_block' );
			}
			else {
				$archives = Posts::get( array( 'content_type' => Post::type( 'entry' ), 'status' => Post::status( 'published' ), 'month_cts' => true, 'limit' => 8, 'orderby' => 'year desc, month desc' ) );
				
				Cache::set( 'cwm:archives_block', $archives, HabariDateTime::HOUR * 12 );
			}
			
			$block->archives = $archives;
			
		}
		
		public function action_block_content_cwm_flickr ( $block, $theme ) {
			
			if ( Cache::has( 'cwm:flickr_items' ) ) {
				$items = Cache::get( 'cwm:flickr_items' );
			}
			else {
				return false;
			}
			
			// shuffle the array
			shuffle( $items );
			
			$return = array();
			
			// return 4 random objects
			for ( $i = 0; $i < 4; $i++ ) {
				// pop an item off the end of the array
				$return[] = array_pop( $items );
			}
			
			$block->items = $return;
			
		}
		
		public function __call( $function, $params )
		{
			if ( strpos( $function, 'act_' ) === 0 ) {
				// The first parameter is an array, get it
				if ( count( $params ) > 0 ) {
					list( $user_filters )= $params;
				}
				else {
					$user_filters = array();
				}
				$action = substr( $function, 4 );
				Plugins::act( 'theme_action', $action, $this, $user_filters );
			}
			else {
				$purposed = 'output';
				if ( preg_match( '/^(.*)_(return|end)$/', $function, $matches ) ) {
					$purposed = $matches[2];
					$function = $matches[1];
				}
				array_unshift( $params, $function, $this );
				$result = call_user_func_array( array( 'Plugins', 'theme' ), $params );
				switch ( $purposed ) {
					case 'return':
						return $result;
					case 'end':
						echo end( $result );
						return end( $result );
					default:
						$output = implode( '', ( array ) $result );
						//echo $output;
						return $output;
				}
			}
		}
		
		public function theme_header ( $theme ) {
			
			echo parent::theme_header( $theme );
			
		}
		
		public function theme_footer ( $theme ) {
			
			echo parent::theme_footer( $theme );
			
		}
		
		public function theme_area($theme, $area, $context = null, $scope = null) {
			
			echo parent::theme_area( $theme, $area, $context, $scope );
			
		}
		
		public function posted_on ( $post ) {
			
			$date = $post->pubdate->format( 'F j, Y' );
			$time = $post->pubdate->format( 'g:i a' );
			$author = $post->author->displayname;
			
			$date_url = Site::get_url('habari') . '/' . $post->pubdate->format('Y') . '/' . $post->pubdate->format('m') . '/' . $post->pubdate->format('d');
			$author_url = Site::get_url('habari') . '/author/' . $post->author->username;
			
			$date_html = '<a href="' . HTML::chars( $date_url ) . '" title="' . HTML::chars( $time ) . '"><span class="entry-date">' . HTML::chars( $date ) . '</span></a>';
			$author_html = '<span class="author vcard"><a href="' . HTML::chars( $author_url ) . '" title="' . _t( 'View all posts by %s', array( $author ) ) . '" class="url fn n">' . HTML::chars( $author ) . '</a></span>';
			
			return _t( 'Posted on %1$s by %2$s.', array( $date_html, $author_html ) );
			
		}
		
		public function post_class ( $post, $append = null ) {
			
			$classes = array( $append );
			
			$classes[] = 'post';
			$classes[] = 'post-' . $post->id;
			$classes[] = 'type-' . Post::type_name( $post->type );
			$classes[] = 'status-' . Post::status_name( $post->status );
			
			foreach ( $post->tags as $tag ) {
				$classes[] = 'tag-' . $tag->term;
			}
			
			$classes[] = 'hentry';
			
			return implode( ' ', $classes );
			
		}
		
		public function comment_class ( $comment, $append = null ) {
			
			$classes = array( $append );
			
			$classes[] = 'comment';
			$classes[] = 'comment-' . $comment->id;
			$classes[] = 'type-' . Comment::type_name( $comment->type );
			$classes[] = 'status-' . Comment::status_name( $comment->status );
			
			return implode( ' ', $classes );
			
		}
		
		public function comments_link ( $post ) {
			
			if ( $post->info->comments_disabled ) {
				return false;
			}
			
			if ( $post->comments->approved->count > 0 ) {
				return '<a href="' . $post->permalink . '#comments" title="' . _t( 'Comment on %s', array( $post->title ) ) . '">' . _t( _n( '%d Comment', '%d Comments', $post->comments->approved->count ), array( $post->comments->approved->count ) ) . '</a>';
			}
			else {
				return '<a href="' . $post->permalink . '#comments" title="' . _t( 'Comment on %s', array( $post->title ) ) . '">' . _t( 'Leave a comment' ) . '</a>';
			}
			
		}
		
		public function act_display_archives ( ) {

			$this->page = Controller::get_var( 'page', 1 );
			
			$this->title = 'Archives';
			$this->page_title = 'Archives';
			
			// add the archives stylesheet to the stack
			Stack::add( 'template_stylesheet', array( Site::get_url( 'theme' ) . '/style-archives.css', 'screen' ) );
			
			$cache_name = 'cwm:archives:page_' . $this->page;
			
			if ( Cache::has( $cache_name ) ) {
				$posts = Cache::get( $cache_name );
			}
			else {
				
				// get the posts
				$posts = Posts::get( array( 'content_type' => Post::type( 'entry' ), 'status' => Post::status( 'published' ), 'limit' => 15, 'page' => $this->page ) );
				
				Cache::set( $cache_name, $posts, HabariDateTime::HOUR * 12 );
				
			}
			
			$archives = array();
			foreach ( $posts as $post ) {
				$archives[ $post->pubdate->format('Y') ][ $post->pubdate->format('m') ][ $post->pubdate->format('d') ][] = $post;
			}
			
			$this->archives = $archives;
			
			$paramarray = array(
				'fallback' => array(
					'page.archives',
					'page.multiple'
				),
				'posts' => $posts,
				'user_filters' => array(),
			);
			
			return $this->act_display( $paramarray );
			
		}
		
		public function act_search ( $user_filters = array() ) {
			
			return parent::act_search( array( 'content_type' => Post::type( 'entry' ) ) );
			
		}
		
		public function filter_theme_act_display_flickr_thumbnail ( $handled, $theme ) {
		
			$guid = Controller::get_var( 'guid' );
			
			$cache_name = 'cwm:flickr_thumbnail_' . $guid;
			
			if ( Cache::has( $cache_name ) ) {
				
				Header('Content-Type: image/jpeg' );
				echo Cache::get( $cache_name );
				
				// request was successfully handled!
				return true;
				
			}
			
			// we didn't handle the request, 404!
			return false;
			
		}
		
		public function filter_theme_act_display_header ( $handled, $theme ) {
			
			header('Content-Type: application/json');
			
			// pick a header
			$header = $this->headers[ array_rand( $this->headers ) ];
			
			echo json_encode( $header );
			
			return true;
			
		}
		
		public function action_block_content_cwm_commit_stats ( $block, $theme ) {
			
			if ( Cache::has( 'cwm:commit_stats' ) ) {
				$stats = Cache::get( 'cwm:commit_stats' );
			}
			else {
				
				try {
					$stats = file_get_contents( 'http://tools.chrismeller.com/commitstats/total_this_year' );
				
					$stats = json_decode( $stats );
				}
				catch ( RemoteRequest_Timeout $e ) {
					
					// try to get the cache value anyway - if it's null we'll just ignore it later
					$stats = Cache::get( 'cwm:commit_stats' );
					
				}
				
				Cache::set( 'cwm:commit_stats', $stats, HabariDateTime::HOUR, true );
			}
			
			$block->stats = $stats;
			
		}
		
	}
	
?>