<?php get_header(); ?>
	
	<!-- section -->
	<section role="main" class="wrapper">
		<div class="content-main">	
			<h1><?php _e( 'Latest Posts', 'hodiern' ); ?></h1>
		
			<?php get_template_part('loop'); ?>
			
			<?php get_template_part('pagination'); ?>
		</div>
		
		<div class="content-sidebar">
			<?php get_sidebar(); ?>
  		</div>		
		
  	</section>
	<!-- /section -->
		


<?php get_footer(); ?>