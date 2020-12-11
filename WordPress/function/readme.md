## WordPress

<!--![](../../img/)-->


```php


//** *Enable upload for webp image files.*/
    function webp_upload_mimes($existing_mimes) {
        $existing_mimes['webp'] = 'image/webp';
        return $existing_mimes;
    }
    add_filter('mime_types', 'webp_upload_mimes');



//** * Enable preview / thumbnail for webp image files.*/
    function webp_is_displayable($result, $path) {
        if ($result === false) {
            $displayable_image_types = array( IMAGETYPE_WEBP );
            $info = @getimagesize( $path );

            if (empty($info)) {
                $result = false;
            } elseif (!in_array($info[2], $displayable_image_types)) {
                $result = false;
            } else {
                $result = true;
            }
        }

        return $result;
    }
    add_filter('file_is_displayable_image', 'webp_is_displayable', 10, 2);

    
     
// Remove css 

  function smartwp_remove_wp_block_library_css(){
      wp_dequeue_style( 'wp-block-library' );
      wp_dequeue_style( 'wp-block-library-theme' );
      wp_dequeue_style( 'wc-block-style' ); // Remove WooCommerce block CSS
  } 
  add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );

     
     
     
// add_image_size( 'image_540', 540, 250, true  );
   add_image_size( 'image_700',700, 429, true );
// add_image_size( 'image_300', 300, 200, true);
   add_image_size( 'image_400', 400, 245, true);


   add_image_size( 'slider_500',500, 306, true );
   add_image_size( 'slider_300', 300, 184, true);


// remove off editor_for_post and editor_for_page

   add_filter('use_block_editor_for_post', '__return_false');
   add_filter('use_block_editor_for_page', '__return_false'); 
     
// add rtl style
       
    if ( is_rtl() ) {
      wp_enqueue_style( 'style-rtl', get_template_directory_uri() . '/style-rtl.css', array(), filemtime(get_template_directory() . '/style-rtl.css'), false);
    }
     
    function enqueue_theme_files() { 
        wp_enqueue_style( 'themeslug-style', get_stylesheet_uri() ); 
        wp_style_add_data( 'themeslug-style', 'rtl', 'replace' ); 
    } 
    add_action( 'wp_enqueue_scripts', 'enqueue_theme_files' );
     
      
```

menu-mein [Links](https://github.com/Fobiya/MD-MANUAL/tree/master/WordPress/menu-mein/)


```php
      

//  MENU ACF

add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);

function my_wp_nav_menu_objects( $items, $args ) {
	
	// loop
	foreach( $items as &$item ) {
      

		 
		// vars
		$image = get_field('icon_img', $item);
		
		// append icon
		if( $image ) {
          
      // Image variables.
            $imgurl = $image['url'];
            $imgtitle = $image['title'];
            $imgalt = $image['alt'];
            $imgcaption = $image['caption'];

            // Thumbnail size attributes.
//            $size = 'thumbnail';
//            $thumb = $image['sizes'][ $size ];
//            $width = $image['sizes'][ $size . '-width' ];
//            $height = $image['sizes'][ $size . '-height' ];
          
        
 
			$item->title .= '<img src="'.$image['url'].'" alt="'.$image['alt'].'" />';
          
     
			
		}
      

		
	}

	
	// return
	return $items;
	
}




//  FILTER LI

<!--
add_filter( 'nav_menu_css_class' , '_namespace_menu_item_class' , 10, 2 );

function _namespace_menu_item_class( $classesu, $item ) {       
    $classesu[] = "nav-item"; // you can add multiple classes here
  
      foreach($classesu as $key => $item) {
          $classesu[$key]->classes[] = 'my-class';
      }

  
    return $classesu;
  
 
} 
-->



//  FILTER A

add_filter('wp_nav_menu','add_menuclass');

function add_menuclass($ulclass) {
  return preg_replace('/<a/', '<a class="nav-link"', $ulclass, -1);
}

     
      
```


```php



```

<!--vue-and-the-wordpress-rest-api [Links](http://bionicteaching.com/vue-and-the-wordpress-rest-api/)-->
