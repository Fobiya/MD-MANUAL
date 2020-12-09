# MENU ACF adding-fields-menu-items

 https://www.advancedcustomfields.com/resources/adding-fields-menu-items/


###  FUNCTIONS.PHP

```php

add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);

function my_wp_nav_menu_objects( $items, $args ) {
	
	// loop
	foreach( $items as &$item ) {
		
		// vars
		$icon = get_field('icon', $item);
		
		
		// append icon
		if( $icon ) {
			
			$item->title .= ' <i class="fa fa-'.$icon.'"></i>';
			
		}
		
	}
	
	
	// return
	return $items;
	
}

```

<!--#### In SCSS-->

<!--MD-MANUAL/scss/media/ [Links](https://github.com/Fobiya/MD-MANUAL/tree/master/scss/media)-->