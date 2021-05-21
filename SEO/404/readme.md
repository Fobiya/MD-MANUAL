## Page 404

<!--![](../../img/)-->
404 ошибка на странице рубрики WordPress или безболезненное удаление category из адреса ссылки

 В итоге, когда вы задаете настройки постоянных ссылок таким образом - /%category%/%postname%.html, то ссылка получится примерно такой /category/name/postname.html. Чтобы убрать category - в префикс рубрик ставится точка. Иногда все ок, но бывает и вылазят проблемы. Если вы использовали какой-то плагин, то вряд ли у вас бы такое получилось. Но не всегда хочется использовать плагины. Хотя одним из решений этой проблемы, всеравно я рекомендовал бы установку плагина - WP No Category Base. После чего проблема 404 ошибки сразу же исчезнет.

##### functions.php

```php
add_filter('user_trailingslashit', 'remcat_function');
function remcat_function($link) {
    return str_replace("/category/", "/", $link);
}
add_action('init', 'remcat_flush_rules');
function remcat_flush_rules() {
    global $wp_rewrite;
    $wp_rewrite->flush_rules();
}
add_filter('generate_rewrite_rules', 'remcat_rewrite');
function remcat_rewrite($wp_rewrite) {
    $new_rules = array('(.+)/page/(.+)/?' => 'index.php?category_name='.$wp_rewrite->preg_index(1).'&paged='.$wp_rewrite->preg_index(2));
    $wp_rewrite->rules = $new_rules + $wp_rewrite->rules;
}


```


<!--vue-and-the-wordpress-rest-api [Links](http://bionicteaching.com/vue-and-the-wordpress-rest-api/)-->