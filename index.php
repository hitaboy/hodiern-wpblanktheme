<?php get_header(); ?>
	
	<div class="row">
		<?php echo do_shortcode('[hodiern_slider id=4 slides=1]'); ?>
	</div>
	
	<!-- section -->
	<section role="main">

			<h1><?php _e( 'Latest Posts', 'hodiern' ); ?></h1>
			<?php get_template_part('loop'); ?>			
			<?php get_template_part('pagination'); ?>
			<?php get_sidebar(); ?>

		
  	</section>
	<!-- /section -->
		


<?php get_footer(); ?>