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
      
      
  
// - ACF z-index
      get_row_index()

      <?php if(get_row_index() == '4'){ echo 'col m6 s12 l4 offset-l2 xl4 offset-xl2'; }else{ echo 'col m6 s12 l4 xl4'; } ?>
      
```

```php

https://cdnjs.com/libraries/jquery

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
