# Taxonomy

![](../../../img/taxonomy.png)


```php

    $product_cat_object = get_queried_object();
    $er = get_field('taxonomyer'. $product_cat_object->term_id);

        if($er) {
//            echo "<pre>";
//            print_r($er);
//            echo "</pre>";
        }


    echo $er->slug;


```

```php

   

```



<!--#### In SCSS-->

advancedcustomfields taxonomy [Links](https://www.advancedcustomfields.com/resources/taxonomy/)

MD-MANUAL get_field_object [Links](https://github.com/Fobiya/MD-MANUAL/tree/master/WordPress/advancedcustomfields/get_field_object)

<!--MD-MANUAL/scss/media/ [Links](https://github.com/Fobiya/MD-MANUAL/tree/master/scss/media)-->