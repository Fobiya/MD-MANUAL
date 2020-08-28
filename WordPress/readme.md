## WordPress

<!--![](../../img/)-->
#### links
https://typerocket.com/docs/v3/removing-the-editor-from-post-types/
https://only-to-top.ru/blog/programming/2019-05-11-vyvod-proizvolnyh-polej-acf.html // ACF INFO

```php
      
// - template folder
      get_template_directory_uri();
      
  
// - ACF z-index
      get_row_index()

      get_bloginfo('template_url');
      
```

```php
      
// - template folder
      get_template_directory_uri();
      

      get_option('page_on_front'); 
      
// - WP title config
      <title><?php echo get_bloginfo( 'name' ); ?> | <?php echo the_title(); ?></title>

      get_bloginfo('template_url');
      
      
// in function.php off standart editor
     
      add_action( 'init', function() {
          remove_post_type_support( 'post', 'editor' );
          remove_post_type_support( 'page', 'editor' );
      }, 99);
      
// ACF option custom fields
   
    $imag_logo = get_field('logo','option'); 
     
      
```


```php

JavaScript
-- ClassTogglerScroll
-- tabClick
WordPress
css
flexbox
html/pug
img
php
scss

```

vue-and-the-wordpress-rest-api [Links](http://bionicteaching.com/vue-and-the-wordpress-rest-api/)
