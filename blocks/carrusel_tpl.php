<?php

// check if the repeater field has rows of data
if( have_rows('carrousel') ):
?>
<div class="carrousel"> 
  <?php
 	// loop through the rows of data
    while ( have_rows('carrousel') ) : the_row();
      $image_carrusel = get_sub_field('image');
      $title_carrusel = get_sub_field('title');
      $description_carrusel = get_sub_field('content');
        // display a sub field value
        if( !empty($image_carrusel) ):?>
        
          <div class="item">
            <img src="<?php echo $image_carrusel['url']; ?>" alt="<?php echo $image_carrusel['alt']; ?>" />
            <div class="content_item">
                <div class="content_text">
                  <h2 class="content_title"><?php echo $title_carrusel; ?></h2>
                  <div class="content_description"><?php echo $description_carrusel; ?></div>
                </div>
            </div>
            </div>
          
        <?php endif;
      
    endwhile;

else :

    // no rows found
?>

<?php
  endif;
?>
  </div>