<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		
		<!-- dns prefetch -->
		<link href="//www.google-analytics.com" rel="dns-prefetch">
		
		<!-- meta -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		
		<!-- icons -->
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="stylesheet" id="promogear-fonts-css" href="https://fonts.googleapis.com/css?family=Lato%3A100%2C300%2C400%2C700%2C900%2C100italic%2C300italic%2C400italic%2C700italic%2C900italic&amp;ver=4.2.2" type="text/css" media="all">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lightGallery.css" /> 
		<!-- css + javascript -->
		<?php wp_head(); ?>
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/lightgallery.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/lg-thumbnail.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/lg-fullscreen.min.js"></script>
		<script>
		var galeries = new Array();
		</script>
	</head>
	<script>
  	var layoutCarrousel = new Array();
	</script>
	<body <?php body_class(); ?>>
	
		<div class="wrapper">
      
      <div class="mobileMenu"><i class="fa fa-bars fa-2x"></i></div>
      
			<header class="header clear" role="banner">
  			
    			<div class="mobileClose"><i class="fa fa-times fa-2x"></i></div>
					
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="logo" />
					
					<nav class="nav" role="navigation">
            <?php wp_nav_menu( array('menu' => 'Main menu', 'depth' => 0 )); ?>
					</nav>
			
          <div class="social">
            <a href="http://facebook.com/LateMotivCero"><i class="fa fa-facebook-square fa-lg"></i></a>
            <a href="https://twitter.com/LateMotivCero"><i class="fa fa-twitter-square fa-lg"></i></a>
            <a href="https://www.youtube.com/latemotivcero"><i class="fa fa-youtube-square fa-lg"></i></a>
            <a href="http://instagram.com/latemotivcero"><i class="fa fa-instagram fa-lg"></i></a>
          </div>
			</header>

			<div class="container">