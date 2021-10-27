## product number  

```php

<?php 
	
  	$args = array( 'post_type' => 'product', 'post_status' => 'publish', 'product_cat' => 'SLAGservice',  'posts_per_page' => -1 );
    $products = new WP_Query( $args );
    echo 'in ' . $products->found_posts . ' nomber()';  ?>


```
