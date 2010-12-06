<?php

	class HTML {
		
		static $encoding = 'UTF-8';
		
		/**
		 * Convert special characters to HTML entities. Untrusted content should be passed through this method
		 * to prevent XSS injections.
		 * 
		 * @param string $content Content to escape.
		 * @param boolean $double_encode Encode existing entities?
		 * @return string
		 */
		public static function chars ( $content, $double_encode = true ) {
			
			$content = htmlspecialchars( strval( $content ), ENT_QUOTES, self::$encoding, $double_encode );
			
			return $content;
			
		}
		
		/**
		 * Convert all applicable characters to HTML entities. All characters that cannot be represented in HTML 
		 * with the current character set will be converted to entities.
		 * 
		 * @param string $content Content to encode.
		 * @param boolean $double_encode Encode existing entitites?
		 * @return string
		 */
		public static function entities ( $content, $double_encode = true ) {
			
			$content = htmlentities( strval( $content ), ENT_QUOTES, self::$encoding, $double_encode );
			
			return $content;
			
		}
		
		/**
		 * Turn an array of attributes into a single string for easy output of HTML tags.
		 * 
		 * <code>
		 * 		echo '<div ' . HTML::attributes( array( 'src' => '/foo.png' ) ) . '</div>';
		 * </code>
		 * 
		 * @param array $attributes Associative array of attribute name => attribute value.
		 * @return string
		 */
		public static function attributes ( $attributes = array() ) {
			
			if ( empty( $attributes ) ) {
				return '';
			}
			
			$compiled = array();
			foreach ( $attributes as $key => $value ) {
				
				// skip over attributes with null values
				if ( $value === null ) {
					continue;
				}
				
				$compiled[] = $key . '="' . HTML::chars( $value ) . '"';
				
			}
			
			return implode( ' ', $compiled );
			
		}
		
	}

?>