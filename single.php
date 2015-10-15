<?php get_header(); ?>
	
	<!-- section -->
	<section role="main">
	
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>
			<!-- /post thumbnail -->
			
			<!-- post title -->
			<!--<h1>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h1>-->
			<!-- /post title -->
			
			
			
			<?php the_content(); // Dynamic Content ?>
			
			<?php
  			
  			if( have_rows('block_list') ):

         	// loop through the rows of data
            while ( have_rows('block_list') ) : the_row();
        
                // display a sub field value
                $type = get_sub_field('typel');
                
                if ($type == 'Full width image'){
                  
                  include('blocks/full_width_image_tpl.php');
                  
                }
                if ($type == 'Carrousel'){
                  
                  include('blocks/carrusel_tpl.php');
                  
                }
                if ($type == 'Gallery'){
                  include('blocks/gallery_tpl.php');
                  
                }
                if ($type == 'Embed'){
                  
                  include('blocks/oembed_tpl.php');
                  
                }
                if ($type == 'Content'){
                  
                  include('blocks/content_title_tpl.php');
                  
                }
                if ($type == 'Contact'){
                  
                  include('blocks/contact_tpl.php');
                  
                }
                if ($type == 'Grid'){

                  include('blocks/grid_tpl.php');
                  
                }
        
            endwhile;
        
        else :
        
            // no rows found
        
        endif;

			?>
		</article>
		<!-- /article -->
		
	<?php endwhile; ?>
	
	<?php else: ?>
	
		<!-- article -->
		<article>
			
			<h1><?php _e( 'Sorry, nothing to display.', 'hodiern' ); ?></h1>
			
		</article>
		<!-- /article -->
	
	<?php endif; ?>
	
	</section>
	<!-- /section -->
	


<?php get_footer(); ?>