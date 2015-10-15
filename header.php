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
		<!-- css + javascript -->
		<?php wp_head(); ?>
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
		<script>
		var galeries = new Array();
		</script>
	</head>
	<body <?php body_class(); ?>>
	
		<!-- wrapper -->
		<div class="wrapper">
	
			<!-- header -->
			<header class="header clear" role="banner">
				
					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/screenshot.png" alt="Logo" class="logo-img">
						</a>
					</div>
					<!-- /logo -->
					
					<!-- nav -->
					<nav class="nav" role="navigation">
						<ul>
					<?php wp_nav_menu( array('menu' => 'Main menu' )); ?>
            </ul>
					</nav>
					<!-- /nav -->
			
			</header>
			<!-- /header -->