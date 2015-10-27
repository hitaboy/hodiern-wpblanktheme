<?php 

$gallery = get_sub_field('images');

if( $gallery ): ?>
    <ul class="gallery" style="background-color:<?php the_sub_field('content_background'); ?>">
        <?php foreach( $gallery as $gallery ): ?>
            <li class="item_image">
                <a href="<?php echo $gallery['url']; ?>">
                     <img src="<?php echo $gallery['sizes']['thumbnail']; ?>" alt="<?php echo $gallery['alt']; ?>" />
                </a>
               <!-- <p><?php echo $gallery['caption']; ?></p>-->
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>