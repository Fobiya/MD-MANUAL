## bitch-woocommerce

<!--![](../../img/)-->





```php

<a href="<?php echo do_shortcode('[add_to_cart_url id="'.get_the_ID().'"]'); ?>">add</a>


												
<?php
    global $woocommerce;
    $items = $woocommerce->cart->get_cart();

        foreach($items as $item => $values) { 
            $_product =  wc_get_product( $values['data']->get_id() );
            //product image
            $getProductDetail = wc_get_product( $values['product_id'] );
            echo $getProductDetail->get_image(); // accepts 2 arguments ( size, attr )

            echo "<b>".$_product->get_title() .'</b>  <br> Quantity: '.$values['quantity'].'<br>'; 
            $price = get_post_meta($values['product_id'] , '_price', true);
            echo "  Price: ".$price."<br>";
            /*Regular Price and Sale Price*/
            echo "Regular Price: ".get_post_meta($values['product_id'] , '_regular_price', true)."<br>";
            echo "Sale Price: ".get_post_meta($values['product_id'] , '_sale_price', true)."<br>";
        }
?>

// buttom

<a href="<?php echo do_shortcode('[add_to_cart_url id="'.get_the_ID().'"]'); ?>" class="tt-btn-addtocart"><i class="icon-f-39"></i>ADD TO CART</a>


 <?php $product = wc_get_product( $post->ID ); // Works for any product type ?>

<?= $product->get_price_html(); ?>
        

```

### option select

```javascript

      (function($){
        $('form.variations_form').on('show_variation', function(event, data){
            console.log( data.variation_id );      // The variation Id  <===  <===

            console.log( data.attributes );        // The variation attributes
            console.log( data.availability_html ); // The formatted stock status
            console.log( data.dimensions );        // The dimensions data
            console.log( data.dimensions_html );   // The formatted dimensions
            console.log( data.display_price );     // The raw price (float)
            console.log( data.display_regular_price ); // The raw regular price (float)
            console.log( data.image );             // The image data
            console.log( data.image_id );          // The image ID (int)
            console.log( data.is_downloadable );   // Is downloadable (boolean)
            console.log( data.is_in_stock );       // Is in stock (boolean)
            console.log( data.is_purchasable );    // Is purchasable (boolean)
            console.log( data.is_sold_individually ); // Is sold individually (yes or no)
            console.log( data.is_virtual );        // Is vistual (boolean)
            console.log( data.max_qty );           // Max quantity (int)
            console.log( data.min_qty );           // Min quantity (int)
            console.log( data.price_html );        // Formatted displayed price
            console.log( data.sku );               // The variation SKU
            console.log( data.variation_description ); // The variation description
            console.log( data.variation_is_active );   // Is variation active (boolean)
            console.log( data.variation_is_visible );  // Is variation visible (boolean)
            console.log( data.weight );            // The weight (float)
            console.log( data.weight_html );       // The formatted weight
        });
    })(jQuery);

```


## category

```php

<?php  
    $args = array(
        'post_type'      => 'product',
        'posts_per_page' => 4,
        'product_cat'    => 'clown'
    );

    $loop = new WP_Query( $args );

    while ( $loop->have_posts() ) : $loop->the_post();
        global $product;
        echo '<br /><a href="'.get_permalink().'">' . woocommerce_get_product_thumbnail().' '.get_the_title().'</a>';
    endwhile;

    wp_reset_query();
?>
        
   
    
```


```php
  
  // function 

  <?php if ( is_product_category() ) { ?>

  <?php if ( is_product() ) { ?>


```

```php




```

### Plugin

```php

                    
//whether ip is from share internet
if (!empty($_SERVER['HTTP_CLIENT_IP']))   
  {
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
  }
//whether ip is from proxy
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
  {
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }
//whether ip is from remote address
else
  {
    $ip_address = $_SERVER['REMOTE_ADDR'];
  } 
   
   
 
    $key = 'nouser';     
//delete_user_meta( str_replace(".", '', $ip_address), $key , $meta_value);



        $erfavorites = get_user_meta( str_replace(".", '', $ip_address), $key );
//            var_dump($rfavorites);

                    
                    
                    
                    
                    
$args = array(
  'order' => 'DESC', // order filter  last post
  //            'post_type'  => post, // Post type category BLOG
  //            'posts_per_page' => 5, // echo show three post 

  'post_type' => 'product',

  'post__in' => $erfavorites ,

);
        
 
        
        
function php
     
   
//cliner 

//whether ip is from share internet
if (!empty($_SERVER['HTTP_CLIENT_IP']))   
  {
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
  }
//whether ip is from proxy
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
  {
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }
//whether ip is from remote address
else{
$ip_address = $_SERVER['REMOTE_ADDR'];
} 
   
 $key = 'nouser';     

$today = date("H:i:s");  

//echo $today;

if($today == '02:00:00'){
  
    delete_user_meta( str_replace(".", '', $ip_address), $key , $meta_value);
    
}
     
        


```






#### Как вывести название категорий в карточке товара структурно?

```php

<?php $product_categories = get_the_terms( $post->ID, 'product_cat' );
  if (!empty($product_categories)) :
    foreach ($product_categories as $key=>$product_category) :
      ?>
    <a href="<?php echo get_term_link($product_category); ?>">
                                   <?php echo esc_attr($product_category->name); ?></a>
      <?php if ($key+1 < count($product_categories)) echo ',';?>
    <?php endforeach; ?>
  <?php endif; ?>
        
```


https://www.businessbloomer.com/woocommerce-easily-get-product-info-title-sku-desc-product-object/
https://veraxo.com/blog/woocommerce/       

https://stackoverflow.com/questions/27385920/woocommerce-get-current-product-id

<!--vue-and-the-wordpress-rest-api [Links](http://bionicteaching.com/vue-and-the-wordpress-rest-api/)-->