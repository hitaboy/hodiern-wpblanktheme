<?php 
  $title = get_sub_field('content_title');
  $description = get_sub_field('content_description');
?>
<div class="content_text" style="background-color:<?php the_sub_field('content_background'); ?>">
  <h1 class="content_title"><?php echo $title; ?></h1>
  <h3 class="content_description"><?php echo $description; ?></h3>
</div>