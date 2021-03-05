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
    
    
        'link_before'     => '<li class="header__social-item DAAA"><a href="#" class="header__social-link DOOO">',
        'link_after'      => '</a></li>', 
    
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

   
      /* Add custom classes to list item "li" */

      function _namespace_menu_item_class( $classes, $item ) {       
          $classes[] = "nav-item"; // you can add multiple classes here
          return $classes;
      } 

      add_filter( 'nav_menu_css_class' , '_namespace_menu_item_class' , 10, 2 );
      To add multiple classes to the list item, just assign the additional classes to $classes[] array as below
      /* Add more custom classes to list item "li" */

      function _namespace_menu_item_class( $classes, $item ) {       
          $classes[] = "nav-item";
          $classes[] = "another-class"; 
          $classes[] = "more-custom-class";
          return $classes;
      } 
      Adding custom class to the menu link is a bit tricky as there is no hook or filter to work with the “a” element directly. So we will take a roundabout way and use a string replace function

      /* Add custom class to link in menu */

      function _namespace_modify_menuclass($ulclass) {
          return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
      }

      add_filter('wp_nav_menu', '_namespace_modify_menuclass');
      What we are doing here is adding a filter function to wp_nav_menu which returns the whole menu block and then replacing the “a” element with a desired class.

      Uncategorized
      
      
      
// Add class on li using wp_nav_menu()

      <ul>
      <li class="test_class">your value 1</li>
      <li class="test_class">your value 2</li>
      <li class="test_class">your value 3</li>
      <li class="test_class">your value 4</li>
      <li class="test_class">your value 5</li>
      </ul>
      To implement above html in exact way we need to write :

      <?php wp_nav_menu( array('menu' => 'your_menu_name','container'=> '','items_wrap'=>'<ul>%3$s</ul>')); ?>
      And put the below mentioned code in your function.php file to add class in your each li :

      <?php
      function add_classes_on_li($classes, $item, $args) {
        $classes[] = 'test_class';
        return $classes;
      }
      add_filter('nav_menu_css_class','add_classes_on_li',1,3);
      ?>
      
      
      
      
      
// Menu_Walker   
      
      
    class Wpse8170_Menu_Walker extends Walker_Nav_Menu {

        var $number = 1;

        function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
            $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

            $class_names = $value = '';

            $classes = empty( $item->classes ) ? array() : (array) $item->classes;
            $classes[] = 'menu-item-' . $item->ID;

            $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
            $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

            $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
            $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

            $output .= $indent . '<li' . $id . $value . $class_names .'>';

            // add span with number here
            if ( $depth == 0 ) { // remove if statement if depth check is not required
                $output .= sprintf( '<span>%02s.</span>', $this->number++ );
            }

            $atts = array();
            $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
            $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
            $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
            $atts['href']   = ! empty( $item->url )        ? $item->url        : '';

            $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );

            $attributes = '';
            foreach ( $atts as $attr => $value ) {
                if ( ! empty( $value ) ) {
                    $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                    $attributes .= ' ' . $attr . '="' . $value . '"';
                }
            }

            $item_output = $args->before;
            $item_output .= '<a'. $attributes .'>';
            $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
            $item_output .= '</a>';
            $item_output .= $args->after;

            $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
        }

    }

      
    // functuion    
      
       wp_nav_menu(
          array(
              "container"         => "nav",
              "container_class"   => "container",
              "container_id"      => "nav",
              "fallback_cb"       => false,
              "menu_class"        => "six columns omega main-nav sf-menu",
              "theme_location"    => "main-nav",
              "walker"            => 'Wpse8170_Menu_Walker',
          )
      );

      


```

### acf menu

advancedcustomfields/menu-acf/  [Links](https://github.com/Fobiya/MD-MANUAL/tree/master/WordPress/advancedcustomfields/menu-acf)




https://www.webdesignvista.com/add-custom-css-classes-to-li-and-menu-link-in-wordpress-wp_nav_menu/


<!--#### In SCSS-->

<!--MD-MANUAL/scss/media/ [Links](https://github.com/Fobiya/MD-MANUAL/tree/master/scss/media)-->