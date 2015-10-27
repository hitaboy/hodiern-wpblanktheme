<?php 

  $grid_type = get_sub_field('grid_type');
  $term = get_sub_field('taxonomy');
   $layout = get_sub_field('layout');

  if ($grid_type == 'Taxonomy'){
  
   if($layout == 'Grid'){
     if( !empty($term) ):

  foreach ($term as $taxonomy){
  ?>
  	<h2><?php echo $taxonomy->name; ?></h2>
  	
  	<?php 
    	$categoria = $taxonomy->name;
    	if( $taxonomy->name == $categoria){
      	$the_query = new WP_Query( array( 'category_name' => $categoria ) );
      	if ( $the_query->have_posts() ) {
        	
        	  while ( $the_query->have_posts() ) {
        		  $the_query->the_post();
              $post_id=get_the_ID();
              ?> 
              <div class="summary grid" style="background-color:<?php the_sub_field("content_background"); ?>"> 
              <?php
              $thumbnail = get_field('thumbnail', $post_id);?>
              <div class="thumbnail_summary">
                <img class="thumbnail" src="<?php echo $thumbnail['url']; ?>" alt="<?php echo $thumbnail['alt']; ?>" />
              </div>
              <?php $text = get_field('text', $post_id);?>
              <div class="text_summary">
               <span class="text"><?php echo $text; ?></span>
              </div>
              <?php $description = get_field('description', $post_id);?>
              <div class="description_summary">
                <?php echo $description; ?>
              </div>
        		<?php
          		echo '</div>';
        	}
        	
        } else {
        	// no posts found
        }
        /* Restore original Post Data */
        wp_reset_postdata();

    	}
  
      
    }
    endif; 
   }
   if($layout == 'List'){
     if( !empty($term) ):
  foreach ($term as $taxonomy){
  ?>
  	<h2><?php echo $taxonomy->name; ?></h2>
  	
  	<?php 
    	$categoria = $taxonomy->name;
    	if( $taxonomy->name == $categoria){
      	$the_query = new WP_Query( array( 'category_name' => $categoria ) );
      	if ( $the_query->have_posts() ) {
        	
        	  while ( $the_query->have_posts() ) {
        		  $the_query->the_post();
              $post_id=get_the_ID();
              ?> 
              <div class="summary list" style="background-color:<?php the_sub_field("content_background"); ?>"> 
              <?php
              $thumbnail = get_field('thumbnail', $post_id);?>
              <div class="thumbnail_summary">
                <img class="thumbnail" src="<?php echo $thumbnail['url']; ?>" alt="<?php echo $thumbnail['alt']; ?>" />
              </div>
              <div class="content_sumamry">
                <?php $text = get_field('text', $post_id);?>
                <div class="text_summary">
                 <span class="text"><?php echo $text; ?></span>
                </div>
                <?php $description = get_field('description', $post_id);?>
                <div class="description_summary">
                  <?php echo $description; ?>
                </div>
              </div>
        		<?php
          		echo '</div>';
        	}
        	
        } else {
        	// no posts found
        }
        /* Restore original Post Data */
        wp_reset_postdata();

    	}
  
      
    }
    endif; 
   }
    
  }else{
    if ($grid_type == 'Post list'){
      if($layout == 'List'){
        $post_object = get_sub_field('post_list');
        $cont=0;
        foreach ($post_object as $post_list){
          $post_id = $post_object[$cont]->ID;
          $the_query = new WP_Query( array('p' => $post_id ) );
          if ( $the_query->have_posts() ) {
          	
          	  while ( $the_query->have_posts() ) {
          		  $the_query->the_post();
                ?> <div class="summary list" style="background-color:<?php the_sub_field("content_background"); ?>"> 
              <?php
                $thumbnail = get_field('thumbnail', $post_id);?>
                <div class="thumbnail_summary">
                  <img class="thumbnail" src="<?php echo $thumbnail['url']; ?>" alt="<?php echo $thumbnail['alt']; ?>" />
                </div>
                <div class="content_sumamry">
                  <?php $text = get_field('text', $post_id);?>
                  <div class="text_summary">
                   <span class="text"><?php echo $text; ?></span>
                  </div>
                  <?php $description = get_field('description', $post_id);?>
                  <div class="description_summary">
                    <?php echo $description; ?>
                  </div>
                </div>
          		<?php
            		echo '</div>';
          	}
          	
          } else {
          	// no posts found
          }
          /* Restore original Post Data */
          wp_reset_postdata();
          $cont++;
        }
      }else if($layout == 'Grid'){
        $post_object = get_sub_field('post_list');
        $cont=0;
        foreach ($post_object as $post_list){
          $post_id = $post_object[$cont]->ID;
          $the_query = new WP_Query( array('p' => $post_id ) );
          if ( $the_query->have_posts() ) {
          	
          	  while ( $the_query->have_posts() ) {
          		  $the_query->the_post();
                ?> <div class="summary grid" style="background-color:<?php the_sub_field("content_background"); ?>"> 
              <?php
                $thumbnail = get_field('thumbnail', $post_id);?>
                <div class="thumbnail_summary">
                  <img class="thumbnail" src="<?php echo $thumbnail['url']; ?>" alt="<?php echo $thumbnail['alt']; ?>" />
                </div>
                <div class="content_sumamry">
                  <?php $text = get_field('text', $post_id);?>
                  <div class="text_summary">
                   <span class="text"><?php echo $text; ?></span>
                  </div>
                  <?php $description = get_field('description', $post_id);?>
                  <div class="description_summary">
                    <?php echo $description; ?>
                  </div>
                </div>
          		<?php
            		echo '</div>';
          	}
          	
          } else {
          	// no posts found
          }
          /* Restore original Post Data */
          wp_reset_postdata();
          $cont++;
        }
      }
    }
  }
?>