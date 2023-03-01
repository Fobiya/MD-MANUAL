## Coupon Code

<!--![](../../img/)-->

```html
     
      <form id="coupon" method='POST' action='javascript:void(null);'>
        <?php wp_nonce_field( 'coupon_post', 'coupon_post_nonce' );?>

        <input type="hidden" name="action" value="couponcode_prod">
        <input type="hidden" name="hash" value="<?php echo $item; ?>">

        <div class="input__field">
          <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Rabattkod">
        </div>

        <button type="submit" class="button" name="apply_coupon" value="Använd rabattkod">Använd rabattkod</button>

       <!-- /.qty -->


    </form>

```


```php


  function prod_couponcode(){

    if ( empty($_POST) || ! wp_verify_nonce( $_POST['coupon_post_nonce'], 'coupon_post') ){
          print 'Sorry, the verification data does not match 1111.';
          exit;
      }else{
      
        $coupon_code = sanitize_text_field($_POST['coupon_code']);
      
            WC()->cart->apply_coupon( $coupon_code );
            wc_print_notices();

    }
  }

add_action( 'wp_ajax_couponcode_prod', 'prod_couponcode' );
add_action( 'wp_ajax_nopriv_couponcode_prod', 'prod_couponcode' );



```


```javascript

       $("[name=apply_coupon]").click(function() {

            $(":input.error").removeClass('error');
            $(".allert").remove();
            var error;
            var btn = $(this);
            var ref = btn.closest('form').find('[required]');
            var msg = btn.closest('form').find('input, textarea');
            var send_btn = btn.closest('form').find('[name=apply_coupon]');

          
                if (!(error == 1)) {
                    $(send_btn).each(function() {
                        $(this).attr('disabled', true);
                    });
                    $(document).each(function() {
                        var form = $(this).closest('form'),
                            name = form.find('.name').val();
                        if ($(this).val() == '') {
                            $.ajax({
                                type: 'POST',
                                url : ajax_url,
                                data: msg,
                                success: function(response, data) {
                                  
                                  window.location.reload();

//                                    console.log(success);


                                },
                                error: function(xhr, str) {
                                    alert('Р’РѕР·РЅРёРєР»Р° РѕС€РёР±РєР°: ' + xhr.responseCode);
                                }
                            });

                    };
                 });
                return false;
            };

        });

```

// list coupon

```php
                
             <?php if( count( WC()->cart->get_applied_coupons() ) > 0 ) { ?>
                
                  <?php foreach( WC()->cart->get_applied_coupons() as $coupon_code ) { ?>
                    <?php  // Get the WC_Coupon object
                      $coupon = new WC_Coupon($coupon_code);

                      $discount_type = $coupon->get_discount_type(); // Get coupon discount type
                      $coupon_amount = $coupon->get_amount(); // Get coupon amount ?>
                       <div class="box__total">
                    <div class="subtotal"><?php echo 'Coupon: '. $coupon_code; ?></div>
                    <div class="pricesubtotal"><?php echo  '- €'. $coupon_amount; ?></div>
                                    </div>
                  <?php } ?>

             <?php } ?>
```

woocommerce-apply-coupon-programmatically-product-cart [Links](https://www.businessbloomer.com/woocommerce-apply-coupon-programmatically-product-cart/)
woocommerce-ajax-apply-coupon-code-to-basket [Links](https://stackoverflow.com/questions/41593442/woocommerce-ajax-apply-coupon-code-to-basket/41593818/)