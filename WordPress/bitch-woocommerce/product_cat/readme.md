## product_cat List

`` ``

 <?php   $args = array( 'taxonomy' => 'product_cat' );
$terms = get_terms('product_cat', $args);

  
//  var_dump($terms);
    $count = count($terms); 
    if ($count > 0) {

        foreach ($terms as $term) { ?>
                              
         <?php if( $term->name == 'Default'){  continue;  } ?>
                              
  <li><a href="<?php echo get_term_link($term); ?>"> <?php echo esc_attr($term->name); ?></a></li>  
       <? }

    } ?>

```php


define('ALLOW_UNFILTERED_UPLOADS', true);


```
