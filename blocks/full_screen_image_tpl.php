<?php 
  $full_image = get_sub_field('full_screen_image'); 
  $title = get_sub_field('content_title');
  $description = get_sub_field('content_description');
?>
                  
  <?php  if( !empty($full_image) ):?>
      <div class="full_screen_image">
    	  <img src="<?php echo $full_image['url']; ?>" alt="<?php echo $full_image['alt']; ?>" />
    	  <div class="content_text">
      	  <h2 class="content_title"><?php echo $title; ?></h2>
      	  <div class="content_description"><?php echo $description; ?></div>
    	  </div>
      </div>
    <?php endif; ?>