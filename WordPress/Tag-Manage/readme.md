## Tag Manager

<!--![](../../img/all-category.png)-->




### code add in body teg

```php

<?php $productvalue = wc_get_product( $post->ID ); // Works for any product type ?>

<?php if ( is_product_category() ) { ?>
  <script>
    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push({
        'event': 'view_item_list',
        'sent_to': 'AW-000000000'
    });
  </script>
<?php }; ?>

<?php if ( is_post_type_archive(  ) ) { ?>
  <script>
    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push({
        'event': 'view_item_list',
        'sent_to': 'AW-000000000'
    });
  </script>
<?php }; ?>

<?php $orderelement = array("&#36;", ","); ?>
<?php if ( is_product()  ) { ?>
  <script>
    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push({
        'event': 'view_item',
        'sent_to': 'AW-000000000'
        'value': '<?php echo str_replace( $orderelement, "", strip_tags($productvalue->get_price_html())); ?>',
        'items': [{
            'id':'<?php echo get_the_ID(); ?>',
            'google_business_vertical': 'custom'
        }]
    });
  </script>
<?php }; ?>


```
