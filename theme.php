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
			Format::apply_with_hook_params( 'more', 'post_content_out', _t('more'), 100, 1 );
			
			include_once('HTML.php');
			
			Stack::add(' template_header_javascript', Site::get_url( 'scripts' ) . '/jquery.js', 'jquery' );
			Stack::add( 'template_header_javascript', Site::get_url( 'theme' ) . '/js/main.js', 'cwm_main_js', 'jquery' );
			
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
				$archives = Posts::get( array( 'month_cts' => true, 'limit' => 8 ) );
				
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
			
			// return 3 random objects
			for ( $i = 0; $i < 3; $i++ ) {
				// pop an item off the end of the array
				$return[] = array_pop( $items );
			}
			
			$block->items = $return;
			
		}
		
	}
	
?>