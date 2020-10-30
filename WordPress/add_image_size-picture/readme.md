## add_image_size-picture

<!--![](../../img/)-->


##### functions.php

```php

add_image_size( 'image_540', 540, 250, true  );
add_image_size( 'image_700',700, 300, true );
add_image_size( 'image_300', 300, 200, true);


```

##### tag picture


```html

    <picture>
      <img class="img" srcset="<?php  the_post_thumbnail_url( 'image_540' );  ?>" alt="img" />
      <source srcset="<?php  the_post_thumbnail_url( 'image_700' );  ?>" media="(max-width: 800px)" />
      <source srcset="<?php  the_post_thumbnail_url( 'image_300' );  ?>" media="(max-width: 350px)" />
    </picture>

```



add_image_size() [Links](https://wp-kama.ru/function/add_image_size/)