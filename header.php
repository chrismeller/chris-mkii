<?php if ( !defined( 'HABARI_PATH' ) ) { die('No direct access'); } ?>
<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
		<title><?php echo $title; ?></title>
		
		<meta name="generator" content="Habari <?php echo Version::HABARI_VERSION; ?>">
		
		<link rel="profile" href="http://gmpg.org/xfn/11">
		
		<link rel="stylesheet" type="text/css" href="<?php Site::out_url( 'vendor' ); ?>/blueprint/screen.css" media="screen, projection">
		<link rel="stylesheet" type="text/css" href="<?php Site::out_url( 'vendor' ); ?>/blueprint/print.css" media="print">

		<!-- [if lt IE 8]>
			<link rel="stylesheet" type="text/css" href="<?php Site::out_url( 'vendor' ); ?>/blueprint/ie.css" media="screen, projection">
		<![endif]-->

		<link rel="stylesheet" type="text/css" href="<?php Site::out_url( 'theme' ); ?>/style.css" media="screen">
		
		<script type="text/javascript">
			var CWM = {};
			CWM.template_directory = '<?php Site::out_url( 'theme' ); ?>';
		</script>
		
		<?php $theme->header(); ?>

	</head>
	
	<body class="<?php echo $theme->body_class(); ?>">
	
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
						$theme->area('menu');
					?>
				</div>
				
				<div id="search" class="prepend-1 span-5 last">
					<?php
						$theme->display( 'searchform' );
					?>
				</div>
				
			</div> <?php /* div#header */ ?>
			
			<div id="banner" class="span-24 last">
				<cite>
					<a href="http://creativecommons.org/licenses/by/3.0/us/" class="license_cc">Creative Commons License</a> on <a href="#" class="flickr_link">Flickr</a>
				</cite>
			</div>
			
			<div id="main" class="span-24 last">
			
				<div id="content" class="span-18" role="main">
					<div class="wrap">
			