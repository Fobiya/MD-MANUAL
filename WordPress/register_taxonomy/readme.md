## register_taxonomy

<!--![](../../img/)-->




```php

//ADD PERSONE

add_action( 'init', 'create_taxname', 0 );
function create_taxname () {
$args = array(
    'label' => _x( 'Персоны', 'taxonomy general name' ),
    'labels' => array(
    'name' => _x( 'Персоны', 'taxonomy general name' ),
    'singular_name' => _x( 'Персоны', 'taxonomy singular name' ),
    'menu_name' => __( 'Персоны' ),
    'all_items' => __( 'Все Персоны' ),
    'edit_item' => __( 'Изменить персону' ),
    'view_item' => __( 'Просмотреть Персоны' ),
    'update_item' => __( 'Обновить персону' ),
    'add_new_item' => __( 'Добавить новую персону' ),
    'new_item_name' => __( 'Название' ),
    'parent_item' => __( 'Родительская' ),
    'parent_item_colon' => __( 'Родительская:' ),
    'search_items' => __( 'Поиск персон' ),
    'popular_items' => null,
    'separate_items_with_commas' => null,
    'add_or_remove_items' => null,
    'choose_from_most_used' => null,
    'not_found' => __( 'Персону не найдено.' ),
    ),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'show_tagcloud' => true,
    'show_in_quick_edit' => true,
    'show_in_rest' => true,
    'meta_box_cb' => null,
    'show_admin_column' => false,
    'description' => '',
    'hierarchical' => true,
    'update_count_callback' => '',
    'query_var' => true,
    'rewrite' => array(
    'slug' => 'person',
    'with_front' => false,
    'hierarchical' => true,
    'ep_mask' => EP_NONE,
),
    'sort' => null,
    '_builtin' => false,
);
register_taxonomy( 'person', array('post', 'new1' ), $args );
}

ADD CATYGORY POST TYPE - new1



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