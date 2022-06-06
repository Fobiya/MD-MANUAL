## WordPress

<!--![](../../img/)-->
#### links
https://typerocket.com/docs/v3/removing-the-editor-from-post-types/
https://only-to-top.ru/blog/programming/2019-05-11-vyvod-proizvolnyh-polej-acf.html // ACF INFO

```php

    <?= cssuni('style.css'); ?>

    <?= jsuni('javascript.js');?>

```

```php
//id HOME 
$home_page_id = get_option( 'page_on_front' );

$url = site_url( '/secrets/', 'https' ); 
echo $url;


// - site wp-config.php

// off AUTOMATIC  UPDATER  plugin template 

define( 'AUTOMATIC_UPDATER_DISABLED', true );



// - site url

     get_site_url(); 
     
     echo get_site_url( null, '', 'https' );
     echo get_site_url( null, '' );    // Name domen

     global $wp;
     echo home_url( $wp->request )
     

// - New editor off
    add_filter('use_block_editor_for_post', '__return_false');
    add_filter('use_block_editor_for_page', '__return_false');

      
// - template folder
      get_template_directory_uri();
      
      
      
// - thumbnail url images
         
      get_the_post_thumbnail_url();

      src="img/
      
      src="<?= get_template_directory_uri(); ?>/img/
      
      
// - do_shortcode
    echo do_shortcode( '[contact-form-7 id="91" title="quote"]' );
        
    $var = do_shortcode( '' );
    echo $var;
     
// - POST DATA
     $post_date = get_the_date( 'l F j, Y' ); echo $post_date;   
```
[Links](https://github.com/Fobiya/MD-MANUAL/tree/master/php/date)
```php
  
// - ACF z-index
      get_row_index()

      <?php if(get_row_index() == '4'){ echo 'col m6 s12 l4 offset-l2 xl4 offset-xl2'; }else{ echo 'col m6 s12 l4 xl4'; } ?>
      
```

$rtitlett = get_the_title(); 
               
$tmt = substr($rtitlett, 0, 85 );
echo $tmt;


### jquery cdnjs

https://cdnjs.com/libraries/jquery

```php

<?php
function my_scripts_method() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js');
    wp_enqueue_script( 'jquery' );
}    
 
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
?>


// WP jQuery

    jQuery(document).ready(function($) {  function  });

```
```php

      
    get_template_part()

// includ file template

    get_template_part( 'template-parts/portfolio-block' );
   
      
```

```php


      get_option('page_on_front'); 
      
// - WP title config
     
      <?php echo get_bloginfo( 'name' ); ?> | <?php echo the_title(); ?>

      get_bloginfo('template_url');

// in function.php off standart editor
     
      add_action( 'init', function() {
          remove_post_type_support( 'post', 'editor' );
          remove_post_type_support( 'page', 'editor' );
      }, 99);
      
// ACF option custom fields
   
    $imag_logo = get_field('logo','option'); 
    
    
    
    
   <?=filemtime('css/style.css')?>   file update in when editing

// REG Replace
  
      
<?= preg_replace('![^0-9+]+!', '', get_field("telefon", "option")) ?>
                 

// Function Current User
                 
<?php if(current_user_can('editor')) { ?> 
    <!-- Stuff here for editors -->
<?php } ?>

<?php if(current_user_can('administrator')) { ?>
    <!-- Stuff here for administrators -->
<?php } ?>
                 
                 
                  
```


```php

JavaScript
-- ClassTogglerScroll
-- tabClick
WordPress
Send
css
flexbox
html/pug
img
php
scss

```

vue-and-the-wordpress-rest-api [Links](http://bionicteaching.com/vue-and-the-wordpress-rest-api/)
