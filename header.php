<?php if ( !defined( 'HABARI_PATH' ) ) { die('No direct access'); } ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html">
		<title><?php $theme->page_title(); ?></title>
		
		<meta name="generator" content="Habari <?php echo Version::HABARI_VERSION; ?>">
		
		<link rel="profile" href="http://gmpg.org/xfn/11">
		
		<link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php $theme->feed_alternate(); ?>">
		<link rel="edit" type="application/atom+xml" title="Atom Publishing Protocol" href="<?php URL::out( 'atompub_servicedocument' ); ?>">
		<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php URL::out( 'rsd' ); ?>">
		
		<link rel="stylesheet" type="text/css" href="<?php Site::out_url( '3rdparty' ); ?>/blueprint/screen.css" media="screen, projection">
		<link rel="stylesheet" type="text/css" href="<?php Site::out_url( '3rdparty' ); ?>/blueprint/print.css" media="print">

		<!-- [if lt IE 8]>
			<link rel="stylesheet" type="text/css" href="<?php Site::out_url( '3rdparty' ); ?>/blueprint/ie.css" media="screen, projection">
		<![endif]-->

		<link rel="stylesheet" type="text/css" href="<?php Site::out_url( 'theme' ); ?>/style.css" media="screen">
		
		<link rel="Shortcut Icon" href="<?php Site::out_url( 'theme' ); ?>/favicon.ico">
		
		<?php $theme->header(); ?>

	</head>
	
	<body class="<?php $theme->body_class(); ?>">
	
		<div id="page" class="hfeed container">
		
			<div id="header" class="span-24 last" role="banner">
			
				<div id="logo" class="span-8">
				
					<h1 id="site-title">
						<a href="<?php Site::out_url( 'habari' ); ?>" title="<?php echo HTML::chars( Options::get( 'title' ) ); ?>" rel="home">
							<span>
								<?php echo Options::get( 'title' ); ?>
							</span>
						</a>
					</h1>
				
				</div>
				
				<div id="menu" class="prepend-2 span-8" role="navigation">
					<?php
						// get page menu
					?>
				</div>
				
				<div id="search" class="prepend-1 span-5 last"></div>
					<?php
						// get search form
					?>
				</div>
				
			</div> <?php /* div#header */ ?>
			
			<div id="banner" class="span-24 last">
				<cite>
					<a href="http://creativecommons.org/licenses/by/3.0/us/" class="license_cc">Creative Commons License</a> on <a href="#" class="flickr_link">Flickr</a>
				</cite>
			</div>
			
			<div id="main" class="span-24 last">
			