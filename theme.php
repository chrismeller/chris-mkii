<?php if ( !defined( 'HABARI_PATH' ) ) { die('No direct access'); } ?>
<?php

	define( 'THEME_CLASS', 'CWM' );
	
	class CWM extends Theme {
		
		public function action_init_theme ( ) {
			
			// apply autop to comment content
			Format::apply( 'autop', 'comment_content_out' );
			
			// turn tag output into a list
			Format::apply( 'tag_and_list', 'post_tags_out' );
			
			// display excerpts of 100 characters or 1 paragraph
			//Format::apply_with_hook_params( 'more', 'post_content_out', _t('Continue reading &rarr;'), 100, 1 );
			
			include_once('HTML.php');
			
			Stack::add( 'template_header_javascript', Site::get_url( 'scripts' ) . '/jquery.js', 'jquery' );
			Stack::add( 'template_header_javascript', Site::get_url( 'theme' ) . '/js/main.js', 'cwm_main_js', 'jquery' );
			
		}
		
		public function more ( $post, $length = 55 ) {
			
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
			
			if ( isset( $this->criteria ) && $this->criteria != '' ) {
				$this->search_criteria = $this->criteria;
			}
			else {
				$this->search_criteria = _t('Search');
			}
			
		}
		
		public function theme_page_title ( ) {
			
			$title = Options::get( 'title' );
			
			if ( $this->request->display_entry && isset( $this->post ) ) {
				$title = $this->post->title . ' | ' . $title;
			}
			else if ( $this->request->display_page && isset( $this->post ) ) {
				$title = $this->post->title . ' | ' . $title;
			}
			
			return $title;
			
		}
		
		public function filter_block_list ( $block_list ) {
			
			$block_list[ 'cwm_archives' ] = _t( 'CWM Archives' );
			$block_list[ 'cwm_flickr' ] = _t( 'CWM Flickr' );
			
			return $block_list;
			
		}
		
		public function action_block_content_cwm_archives ( $block, $theme ) {
			
			if ( Cache::has( 'cwm:archives' ) ) {
				$archives = Cache::get( 'cwm:archives' );
			}
			else {
				$archives = Posts::get( array( 'content_type' => Post::type( 'entry' ), 'status' => Post::status( 'published' ), 'month_cts' => true, 'limit' => 8, 'orderby' => 'year desc, month desc' ) );
				
				Cache::set( 'cwm:archives', $archives, HabariDateTime::HOUR * 12 );
			}
			
			$block->archives = $archives;
			
		}
		
		public function action_block_content_cwm_flickr ( $block, $theme ) {
			
			if ( Cache::has( 'cwm:flickr_items' ) ) {
				$items = Cache::get( 'cwm:flickr_items' );
			}
			else {
				
				$feed = file_get_contents( 'http://api.flickr.com/services/feeds/photos_public.gne?id=27041953@N00&lang=en-us&format=rss_200' );
				
				if ( !$feed ) {
					return false;
				}
				
				$xml = new SimpleXMLElement( $feed );
				
				if ( count( $xml->channel->item ) < 1 ) {
					return false;
				}
				
				$items = array();
				
				foreach ( $xml->channel->item as $item ) {
					
					if ( !preg_match('/<img src="([^"]+)/si', $item->description, $matches) ) {
						continue;
					}
					
					// for reference: large => _m, proportional => _t, square => _s
					$suffix = '_s';
					
					$items[] = array(
						'title' => (string)$item->title,
						'link' => (string)$item->link,
						'thumbnail' => str_replace( '_m.jpg', $suffix . '.jpg', $matches[1] ),
						'image' => str_replace( '_m.jpg', '.jpg', $matches[1] ),
						'description' => (string)$item->description,
						'pubDate' => (string)$item->pubDate,
						'guid' => (string)$item->guid,
					);
					
				}
				
				// cache the output for 12 hours
				Cache::set( 'cwm:flickr_items', $items, HabariDateTime::HOUR * 12 );
				
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
			
			$cache_name = 'cwm:archives_page_' . $this->page;
			
			if ( Cache::has( $cache_name ) ) {
				$posts = Cache::get( $cache_name );
			}
			else {
				
				// get the posts
				$posts = Posts::get( array( 'content_type' => Post::type( 'entry' ), 'status' => Post::status( 'published' ), 'limit' => 25, 'page' => $this->page ) );
				
				Cache::set( $cache_name, $posts, HabariDateTime::HOUR * 12 );
				
			}
			
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
		
	}
	
?>