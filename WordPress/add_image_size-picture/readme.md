## add_image_size-picture

<!--![](../../img/)-->


##### echo Alt and Title

```php

$image_alt = get_post_meta((int)get_post_meta( get_the_ID() , "_thumbnail_id" , true ), '_wp_attachment_image_alt', true);
$image_title = get_the_title((int)get_post_meta( get_the_ID() , "_thumbnail_id" , true ));


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