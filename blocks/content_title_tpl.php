<?php 
  $title = get_sub_field('content_title');
  $description = get_sub_field('content_description');
?>
<div class="content_text">
  <h1 class="content_title"><?php echo $title; ?></h1>
  <h3 class="content_description"><?php echo $description; ?></h3>
</div>