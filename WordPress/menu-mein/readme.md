## Mein menu

https://misha.agency/wordpress/wp_nav_menu.html


### menu - > footer bottom menu

```php

    <?php
      $argsm = array(
         'menu' => 'footer bottom menu',
        'container' => 'nav',
        'container_class' => 'menu',
        'before' => '<h2>', 
        'after'  => '</h2>',
      );
    ?>
    <?php  wp_nav_menu( $argsm );?>
    
    
    
    
  <?php   
   if( $menu_items = wp_get_nav_menu_items('Меню для шапки') ) { // "Меню для шапки" - это название моего меню. Вы можете также использовать ID или ярлык
    $menu_list = '';
    foreach ( (array) $menu_items as $key => $menu_item ) {
        $title = $menu_item->title; // заголовок элемента меню (анкор ссылки)
        $url = $menu_item->url; // URL ссылки
        $menu_list .= '<a href="' . $url . '">' . $title . '</a>';
    }
    echo $menu_list;
} ?>
    
    


```

<!--#### In SCSS-->

<!--MD-MANUAL/scss/media/ [Links](https://github.com/Fobiya/MD-MANUAL/tree/master/scss/media)-->