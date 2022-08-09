## woocommerce-product-additional-information-shortcode




#### The function code:

```php

if ( ! function_exists( 'display_product_additional_information' ) ) {

    function display_product_additional_information($atts) {

        // Shortcode attribute (or argument)
        $atts = shortcode_atts( array(
            'id'    => ''
        ), $atts, 'product_additional_information' );

        // If the "id" argument is not defined, we try to get the post Id
        if ( ! ( ! empty($atts['id']) && $atts['id'] > 0 ) ) {
           $atts['id'] = get_the_id();
        }

        // We check that the "id" argument is a product id
        if ( get_post_type($atts['id']) === 'product' ) {
            $product = wc_get_product($atts['id']);
        }
        // If not we exit
        else {
            return;
        }

        ob_start(); // Start buffering

        do_action( 'woocommerce_product_additional_information', $product );

        return ob_get_clean(); // Return the buffered outpout
    }

    add_shortcode('product_additional_information', 'display_product_additional_information');

}

```

#### echo product_additional_information

```php

with a defined product id:

[product_additional_information id='37']
Or in php:

echo do_shortcode("[product_additional_information id='37']");
In an existing product page (when "additional information" product tab is removed for example):

[product_additional_information]
Or in php:

echo do_shortcode("[product_additional_information]");

```

https://stackoverflow.com/questions/50225929/woocommerce-product-additional-information-shortcode