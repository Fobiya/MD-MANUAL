## register_taxonomy

<!--![](../../img/)-->




```php

//ADD PERSONE

/**
 * Create two taxonomies, genres and writers for the post type "product".
 *
 * @see register_post_type() for registering custom post types.
 */
function wpdocs_create_book_taxonomies() {
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'              => _x( 'WEAPON', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'WEAPON', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'Search WEAPON', 'textdomain' ),
        'all_items'         => __( 'All WEAPON', 'textdomain' ),
        'parent_item'       => __( 'Parent WEAPON', 'textdomain' ),
        'parent_item_colon' => __( 'Parent WEAPON:', 'textdomain' ),
        'edit_item'         => __( 'Edit WEAPON', 'textdomain' ),
        'update_item'       => __( 'Update WEAPON', 'textdomain' ),
        'add_new_item'      => __( 'Add New WEAPON', 'textdomain' ),
        'new_item_name'     => __( 'New WEAPON Name', 'textdomain' ),
        'menu_name'         => __( 'WEAPON', 'textdomain' ),
    );
 
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'weapon' ),
    );
 
    register_taxonomy( 'weapon', array( 'product' ), $args );
    
    
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'              => _x( 'EXTERIOR', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'EXTERIOR', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'Search EXTERIOR', 'textdomain' ),
        'all_items'         => __( 'All EXTERIOR', 'textdomain' ),
        'parent_item'       => __( 'Parent EXTERIOR', 'textdomain' ),
        'parent_item_colon' => __( 'Parent EXTERIOR:', 'textdomain' ),
        'edit_item'         => __( 'Edit EXTERIOR', 'textdomain' ),
        'update_item'       => __( 'Update EXTERIOR', 'textdomain' ),
        'add_new_item'      => __( 'Add New EXTERIOR', 'textdomain' ),
        'new_item_name'     => __( 'New EXTERIOR Name', 'textdomain' ),
        'menu_name'         => __( 'EXTERIOR', 'textdomain' ),
    );
 
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'exterior' ),
    );
 
    register_taxonomy( 'exterior', array( 'product' ), $args );
    
    
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'              => _x( 'QUALITY', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'QUALITY', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'Search QUALITY', 'textdomain' ),
        'all_items'         => __( 'All QUALITY', 'textdomain' ),
        'parent_item'       => __( 'Parent QUALITY', 'textdomain' ),
        'parent_item_colon' => __( 'Parent QUALITY:', 'textdomain' ),
        'edit_item'         => __( 'Edit QUALITY', 'textdomain' ),
        'update_item'       => __( 'Update QUALITY', 'textdomain' ),
        'add_new_item'      => __( 'Add New QUALITY', 'textdomain' ),
        'new_item_name'     => __( 'New QUALITY Name', 'textdomain' ),
        'menu_name'         => __( 'QUALITY', 'textdomain' ),
    );
 
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'quality' ),
    );
 
    register_taxonomy( 'quality', array( 'product' ), $args );
    
    
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'              => _x( 'TYPE', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'TYPE', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'Search TYPE', 'textdomain' ),
        'all_items'         => __( 'All TYPE', 'textdomain' ),
        'parent_item'       => __( 'Parent TYPE', 'textdomain' ),
        'parent_item_colon' => __( 'Parent TYPE:', 'textdomain' ),
        'edit_item'         => __( 'Edit TYPE', 'textdomain' ),
        'update_item'       => __( 'Update TYPE', 'textdomain' ),
        'add_new_item'      => __( 'Add New TYPE', 'textdomain' ),
        'new_item_name'     => __( 'New TYPE Name', 'textdomain' ),
        'menu_name'         => __( 'TYPE', 'textdomain' ),
    );
 
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'type' ),
    );
 
    register_taxonomy( 'type', array( 'product' ), $args );
    
    
 
    unset( $args );
    unset( $labels );
 
    // Add new taxonomy, NOT hierarchical (like tags)
    $labels = array(
        'name'                       => _x( 'Writers', 'taxonomy general name', 'textdomain' ),
        'singular_name'              => _x( 'Writer', 'taxonomy singular name', 'textdomain' ),
        'search_items'               => __( 'Search Writers', 'textdomain' ),
        'popular_items'              => __( 'Popular Writers', 'textdomain' ),
        'all_items'                  => __( 'All Writers', 'textdomain' ),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'Edit Writer', 'textdomain' ),
        'update_item'                => __( 'Update Writer', 'textdomain' ),
        'add_new_item'               => __( 'Add New Writer', 'textdomain' ),
        'new_item_name'              => __( 'New Writer Name', 'textdomain' ),
        'separate_items_with_commas' => __( 'Separate writers with commas', 'textdomain' ),
        'add_or_remove_items'        => __( 'Add or remove writers', 'textdomain' ),
        'choose_from_most_used'      => __( 'Choose from the most used writers', 'textdomain' ),
        'not_found'                  => __( 'No writers found.', 'textdomain' ),
        'menu_name'                  => __( 'Writers', 'textdomain' ),
    );
 
    $args = array(
        'hierarchical'          => false,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var'             => true,
        'rewrite'               => array( 'slug' => 'writer' ),
    );
 
    register_taxonomy( 'writer', 'product', $args );
}
// hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'wpdocs_create_book_taxonomies', 0 );

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