<?php 

$location = get_sub_field('google_maps');
$contact_information = get_sub_field('contact_information');

if( !empty($location) ):
?>
<div class="acf-map">
	<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
</div>
<div class="content_text">
  <div class="content_description"><?php echo $contact_information; ?></div>
</div>

<?php endif; ?>
