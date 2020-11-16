## add_image_size-picture

<!--![](../../img/)-->


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


```

##### tag picture


```html

    <picture>
      // images all echo 
      <?php echo  the_post_thumbnail( 'image_540'); ?>
     
      <img class="img" srcset="<?php  the_post_thumbnail_url( 'image_540' );  ?>" alt="img" />
      <source srcset="<?php  the_post_thumbnail_url( 'image_700' );  ?>" media="(max-width: 800px)" />
      <source srcset="<?php  the_post_thumbnail_url( 'image_300' );  ?>" media="(max-width: 350px)" />
    </picture>

```



add_image_size() [Links](https://wp-kama.ru/function/add_image_size/)