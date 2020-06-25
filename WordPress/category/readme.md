## Category

![](../../img/all-category.png)


add file in you template ``category.php and single.pgp``

url ``domen/category/name-category/``



### wp_list_categories();

```php

    <ul class="list_icon">
      <?php
        wp_list_categories( array(
            'orderby'    => 'count',
            'order'      => 'DESC',
            'show_count' => 1,
            'title_li'   => '',
            'number'     => 10,
            'hide_empty' => true,
        ) );
        ?>
    </ul>

```

<!--#### In SCSS-->

<!--MD-MANUAL/scss/media/ [Links](https://github.com/Fobiya/MD-MANUAL/tree/master/scss/media)-->