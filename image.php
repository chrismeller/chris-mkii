<?php

	$headers = array(
		array(
			'img' => 'images/headers/header_sign.jpg',
			'flickr' => 'http://www.flickr.com/photos/mellertime/4485964682/',
			'width' => 950,
			'height' => 250,
		),
		array(
			'img' => 'images/headers/header_duckies.jpg',
			'flickr' => 'http://www.flickr.com/photos/mellertime/4710923546/',
			'width' => 950,
			'height' => 250,
		),
		array(
			'img' => 'images/headers/header_pier.jpg',
			'flickr' => 'http://www.flickr.com/photos/mellertime/4485317853/',
			'width' => 950,
			'height' => 250,
		),
		array(
			'img' => 'images/headers/header_lake.jpg',
			'flickr' => 'http://www.flickr.com/photos/mellertime/3576628927/',
			'width' => 950,
			'height' => 250,
		),
		array(
			'img' => 'images/headers/header_shoreline.jpg',
			'flickr' => 'http://www.flickr.com/photos/mellertime/4485346693/',
			'width' => 950,
			'height' => 250,
		),
		array(
			'img' => 'images/headers/header_seagull.jpg',
			'flickr' => 'http://www.flickr.com/photos/mellertime/4485971464/',
			'width' => 950,
			'height' => 250,
		),
		array(
			'img' => 'images/headers/header_waves.jpg',
			'flickr' => 'http://www.flickr.com/photos/mellertime/4485971102/',
			'width' => 950,
			'height' => 250,
		),
		array(
			'img' => 'images/headers/header_pier_waves.jpg',
			'flickr' => 'http://www.flickr.com/photos/mellertime/4485970534/',
			'width' => 950,
			'height' => 250,
		),
		array(
			'img' => 'images/headers/header_shoreline2.jpg',
			'flickr' => 'http://www.flickr.com/photos/mellertime/4485969242/',
			'width' => 950,
			'height' => 250,
		),
		array(
			'img' => 'images/headers/header_boy-in-the-waves.jpg',
			'flickr' => 'http://www.flickr.com/photos/mellertime/4485967894/',
			'width' => 950,
			'height' => 250,
		),
		array(
			'img' => 'images/headers/header_kite.jpg',
			'flickr' => 'http://www.flickr.com/photos/mellertime/4480681848/',
			'width' => 950,
			'height' => 250,
		),
		array(
			'img' => 'images/headers/header_birds.jpg',
			'flickr' => 'http://www.flickr.com/photos/mellertime/4480577438/',
			'width' => 950,
			'height' => 250,
		),
		array(
			'img' => 'images/headers/header_cow_sign.jpg',
			'flickr' => 'http://www.flickr.com/photos/mellertime/3580807026/',
			'width' => 950,
			'height' => 250,
		),
		array(
			'img' => 'images/headers/header_clouds.jpg',
			'flickr' => 'http://www.flickr.com/photos/mellertime/3577443928/',
			'width' => 950,
			'height' => 250,
		),
		array(
			'img' => 'images/headers/header_mountain_road.jpg',
			'flickr' => 'http://www.flickr.com/photos/mellertime/3576635601/',
			'width' => 950,
			'height' => 250,
		),
		array(
			'img' => 'images/headers/header_clouds2.jpg',
			'flickr' => 'http://www.flickr.com/photos/mellertime/3576636619/',
			'width' => 950,
			'height' => 250,
		),
		array(
			'img' => 'images/headers/header_river.jpg',
			'flickr' => 'http://www.flickr.com/photos/mellertime/3565811710/',
			'width' => 950,
			'height' => 250,
		),
		array(
			'img' => 'images/headers/header_seagull2.jpg',
			'flickr' => 'http://www.flickr.com/photos/mellertime/4485317349/',
			'width' => 950,
			'height' => 250,
		),
		array(
			'img' => 'images/headers/header_duck.jpg',
			'flickr' => 'http://www.flickr.com/photos/mellertime/4710275503/',
			'width' => 950,
			'height' => 250,
		),
		array(
			'img' => 'images/headers/header_barn_storm.jpg',
			'flickr' => 'http://www.flickr.com/photos/mellertime/4921598903/',
			'width' => 950,
			'height' => 250,
		),
		array(
			'img' => 'images/headers/header_cliffs_chapel.jpg',
			'flickr' => 'http://www.flickr.com/photos/mellertime/5248367816/',
			'width' => 950,
			'height' => 250,
		),
		array(
			'img' => 'images/headers/header_cliffs_flag.jpg',
			'flickr' => 'http://www.flickr.com/photos/mellertime/5248373366/',
			'width' => 950,
			'height' => 250,
		),
		array(
			'img' => 'images/headers/header_water_wheel.jpg',
			'flickr' => 'http://www.flickr.com/photos/mellertime/5248355922/',
			'width' => 950,
			'height' => 250,
		),
	);
	
	// pick a header
	$header = $headers[ mt_rand( 0, count( $headers ) - 1 ) ];
	
	echo json_encode( $header );

?>