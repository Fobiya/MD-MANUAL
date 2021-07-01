## add_image_size-picture

<!--![](../../img/)-->


```php

add_image_size( 'homepagethumb', 250, 185, true );
add_image_size( 'nazvanie-moego-razmera', 278, 185, true  );

<div class="single-portfolio single-portfolio-fourth" data-fancybox="images-slider" href="<?= $izobrazhenie['url'] ?>">
  <?php // $image_url = $izobrazhenie['thumb']; ?>
<img class="img-fluid" src="<?php echo $izobrazhenie['sizes']['nazvanie-moego-razmera']; ?>">

```

##### echo Alt and Title

```php



$image_alt = get_post_meta((int)get_post_meta( get_the_ID() , "_thumbnail_id" , true ), '_wp_attachment_image_alt', true);
$image_title = get_the_title((int)get_post_meta( get_the_ID() , "_thumbnail_id" , true ));


<?php $our_products_img_3 = get_post_meta(get_the_ID(), 'our_products_img_3', true); ?>

<?php url = wp_get_attachment_url($our_products_img_3); ?> // echo url Standart function WP

<?php $image_alt_img_3 = get_post_meta($our_products_img_3, '_wp_attachment_image_alt', true); ?> // echo alt Standart function WP


<?php echo $image_alt_img_3; ?>


```

##### functions.php

```php

add_image_size( 'image_540', 540, 250, true  );
add_image_size( 'image_700',700, 300, true );
add_image_size( 'image_300', 300, 200, true);


<?php
    $image = get_sub_field('img');
    if( $image ):

        // Image variables.
        $url = $image['url'];
        $title = $image['title'];
        $alt = $image['alt'];
        $caption = $image['caption'];

        // Thumbnail size attributes.
        $size = 'thumbnail';
        $seven_size = 'image_700';
        $tree_size = 'image_400';

// $thumb = $image['sizes'][ $size ];
// $width = $image['sizes'][ $size . '-width' ];
// $height = $image['sizes'][ $size . '-height' ]; 

?>

       <picture>
          <!-- //strong typing-->
          <source srcset="<?= $image['sizes'][ $seven_size ]; ?>" media="(max-width:1000px) and (min-width: 501px)" >
          <source srcset="<?= $image['sizes'][ $tree_size ]; ?>" media="(max-width:500px)" >
          <img class="img__" src="<?= $url; ?>" alt="<?= $alt; ?>">
        </picture>

  <?php endif; ?>

```

##### tag picture


```html
    
<picture>
    <!-- //strong typing-->
    <source srcset="<?= $image['sizes'][ $seven_size ]; ?>" media="(max-width:1000px) and (min-width: 501px)" >
    <source srcset="<?= $image['sizes'][ $tree_size ]; ?>" media="(max-width:500px)" >
    <img class="img__" src="<?= $url; ?>" alt="<?= $alt; ?>">
</picture>
    



```



add_image_size() [Links](https://wp-kama.ru/function/add_image_size/)