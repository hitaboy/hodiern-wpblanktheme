<?php
  			
  			if( have_rows('block_list') ):

         	// loop through the rows of data
            while ( have_rows('block_list') ) : the_row();
        
                // display a sub field value
                $type = get_sub_field('typel');
                
                if ($type == 'Full width image'){
                  
                  include('blocks/full_width_image_tpl.php');
                  
                }
                if ($type == 'Full Screen Image'){
                  
                  include('blocks/full_screen_image_tpl.php');
                  
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
                if ($type == 'Map'){
                  
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