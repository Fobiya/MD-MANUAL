# Taxonomy Radio Input

<!--![](../../img/)-->




```php

function custom_taxonomy() {
    $labels = array(
        'name'                       => 'New Tax',
        'singular_name'              => 'New Tax',
        'search_items'               => 'Search New Tax',
        'popular_items'              => 'Popular New Tax',
        'all_items'                  => 'All New Tax',
        'edit_item'                  => 'Edit New Tax',
        'update_item'                => 'Update New Tax',
        'add_new_item'               => 'Add New New Tax',
        'new_item_name'              => 'New New Tax Name',
        'separate_items_with_commas' => 'Separate New Tax with commas',
        'add_or_remove_items'        => 'Add or remove New Tax',
        'choose_from_most_used'      => 'Choose from the most used New Tax',
        'not_found'                  => 'No New Tax found.',
        'menu_name'                  => 'New Tax',
    );

    $args = array(
        'rewrite' => array( 'slug' => 'newtax' ),
        'labels'            => $labels,
        'hierarchical'      => true,
        'public'            => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud'     => true,
        'query_var'         => true,
        'meta_box_cb'       => 'render_newtax_meta_box',
        'multiple'          => false,
    );

    register_taxonomy('custom_taxonomy', 'experts', $args);
}
add_action('init', 'custom_taxonomy');

function render_newtax_meta_box($post, $box) {
    $taxonomy = $box['args']['taxonomy'];
    $tax = get_taxonomy($taxonomy);
    $terms = get_terms($taxonomy, array('hide_empty' => false));

    $name = 'tax_input[' . $taxonomy . ']';
    $selected = wp_get_object_terms($post->ID, $taxonomy, array('fields' => 'ids'));
    ?>

    <div id="taxonomy-<?php echo $taxonomy; ?>" class="categorydiv">
        <ul id="<?php echo $taxonomy; ?>checklist" class="list:<?php echo $taxonomy ?> categorychecklist form-no-clear">
            <li>
                <label class="selectit">
                    <input type="radio" name="<?php echo $name; ?>[]" value="0" <?php checked(empty($selected)); ?>>
                    Deselect
                </label>
            </li>
            <?php foreach ($terms as $term) : ?>
                <li>
                    <label class="selectit">
                        <input type="radio" name="<?php echo $name; ?>[]" id="<?php echo $taxonomy . '-' . $term->term_id; ?>" value="<?php echo esc_attr($term->term_id); ?>" <?php checked(in_array($term->term_id, $selected)); ?>>
                        <?php echo esc_html($term->name); ?>
                    </label>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <?php
}



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