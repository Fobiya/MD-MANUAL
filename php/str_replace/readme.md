## str_replace()

<!--![](../../img/three-column-flexbox.png)-->


#### php

```php

            $short = do_shortcode('[product id="'.$id.'"]');
            $short = str_replace(
                "<div class=\"woocommerce \"><ul class=\"products products_archive_grid\">",
                "",
                $short);

```
