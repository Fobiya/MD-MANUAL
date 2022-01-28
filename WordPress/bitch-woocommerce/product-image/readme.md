## product-image.php

 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php

```php

     <?php if ( $attachment_ids && $product->get_image_id() ) {
              foreach ( $attachment_ids as $attachment_id ) {
                $image_url = wp_get_attachment_url( $attachment_id );  ?>
                     <img src="<?php echo $image_url; ?>" alt="%s" />
            <?php }
             } ?>



```

https://www.generacodice.com/en/articolo/3723254/woocommerce-product-image-and-thumbnails-custom-function