# Register taxonomy

<!--![](../../img/)-->




```php

// register_taxonomy
function register_start_taxonomy() {
    $labels = array(
        'name'                       => 'Start',
        'singular_name'              => 'Start',
        'search_items'               => 'Search Start',
        'popular_items'              => 'Popular Start',
        'all_items'                  => 'All Start',
        'parent_item'                => 'Parent Start',
        'parent_item_colon'          => 'Parent Start:',
        'edit_item'                  => 'Edit Start',
        'update_item'                => 'Update Start',
        'add_new_item'               => 'Add New Start',
        'new_item_name'              => 'New Start Name',
        'separate_items_with_commas' => 'Separate Start with commas',
        'add_or_remove_items'        => 'Add or remove Start',
        'choose_from_most_used'      => 'Choose from the most used Start',
        'not_found'                  => 'No Start found.',
        'menu_name'                  => 'Start',
    );
    
    
    // Now register the taxonomy
      register_taxonomy('superpower',array('post'), array(  // type post
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_in_rest' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'start' ),  // slug   catygory slug
      ));

}
add_action( 'init', 'register_start_taxonomy' );


ADD CATYGORY POST TYPE - new1

```


```php

<?php // Replace 'your_taxonomy' with the actual taxonomy name
$termes = get_the_terms(get_the_ID(), 'start');

if (!empty($termes)) {
  // Loop through each term and generate the options
  foreach ($termes as $terme) {
    if($into == $terme->slug ){
      break;
    }
    echo '<li cat-' . $terme->slug . '>' . $terme->name . '</li>';
  }
} ?>

```



```php



```




```html
    
'public' => true, - true/false, доступность для использования.
'show_ui' => true, - Добавить на страницу создания меню
'show_in_menu' => true, - Показывать таксономию в админ-меню. Значение аргумента 'show_ui' должно быть true.
'show_in_nav_menus' => true, - Добавить или исключить таксономию в навигации сайта "Внешний вид -> Меню. Значение аргумента 'show_ui' должно быть true.
'show_tagcloud' => true, - Разрешить облако тегов для этой таксономии.
'show_in_quick_edit' => true, - Разрешить показ таксономии в меню быстрого доступа
'show_in_rest' => true, - Включает поддержку REST API. Благодаря этому параметру в блочном редакторе таксономии отображается выбор нашей таксономии.
'meta_box_cb' => null, - показ метабокса с таксономией в записи
'show_admin_column' => false, - автоматическое создание столбцов таксономии в таблице ассоциативных типов постов
'description' => '', - описание таксономии в таблице со всеми таксономиями
'hierarchical' => true, - включить древовидность как у рубрик или недревовидность как у меток. По умолчанию: false
'update_count_callback' => '', - название функции, вызываемая после обновления ассоциативных типов объектов записи
'query_var' => true, - разрешение на использование query_var.
'rewrite' => array( - начало настроек для URL
'slug' => 'person', - Текст в ЧПУ. По умолчанию: название таксономии. Можете задать свое.
'with_front' => false, - возможность добавить ссылку к базовому URL
'hierarchical' => true, - использование древовидной структуры ссылок
'ep_mask' => EP_NONE, - перезапись конечного значения таксономии. По умолчанию: EP_NONE.
'sort' => null, - сортировка постов по порядку создания.
'_builtin' => false, - настройка таксономии, будет ли она собственной или встроенной. Не используйте этот аргумент при регистрации собственной таксономии.По умолчанию: false.
register_taxonomy( 'person', array('post'), $args ); - в этой строке мы регистрируем нашу такснономию, где person - это новое имя.


```



 [Links](https://gnatkovsky.com.ua/taksonomii-v-wordpress.html)