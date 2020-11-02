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


```

<!--#### In SCSS-->

<!--MD-MANUAL/scss/media/ [Links](https://github.com/Fobiya/MD-MANUAL/tree/master/scss/media)-->