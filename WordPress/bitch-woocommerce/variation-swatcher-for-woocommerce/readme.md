## Variation Swatcher for WooCommerce


/wp-content/themes/maskers/woocommerce/single-product/product-image.php


```php

  global $product;

  $columns           = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
  $post_thumbnail_id = $product->get_image_id();
  $wrapper_classes   = apply_filters(
      'woocommerce_single_product_image_gallery_classes',
      array(
          'woocommerce-product-gallery',
          'woocommerce-product-gallery--' . ( $post_thumbnail_id ? 'with-images' : 'without-images' ),
          'woocommerce-product-gallery--columns-' . absint( $columns ),
          'images',
      )
  );
```

```php










```

### javascript

```javascript


    $('.tawcvs-swatches span').click( function(){  

        $('form.variations_form').one('show_variation', function(event, data){

          var gooooo = data.variation_id; 

//            console.log(gooooo);
             
               
            $.ajax({
         
              type: "POST",
              url: '<?= get_site_url(); ?>/wp-admin/admin-ajax.php',
              data: {
                action : 'slider_images',
                optionid : gooooo,
                postid: <?=  get_the_ID() ?>,
              },
              success: function (data) {
  
                 document.querySelector('.tt-product-vertical-layout').innerHTML = data;

                 const articles = document.querySelector('.tt-product-vertical-layout'); // класс экспорта дом
                    
                    const mutationObserver = new MutationObserver(function(mutations) {
                      mutations.forEach(function(mutation) {

                       jQuery(document).ready(function($) { ////  jQuery     
                             
                           $('#slider__big').slick({
  
                  				dots: true,
                				arrows: false,
                                                    
                              slidesToShow: 1,
                              slidesToScroll: 1,

                            });
          
                        }); ////  jQuery    
                                                            

                            mutationObserver.disconnect();
                      });
                    });
                    
                    mutationObserver.observe(articles, {
                      childList: true
                    });

//                  if (data) {
//            //            window.location.reload();
//                  }
              }
            });



        });   

    });



  document.addEventListener('DOMContentLoaded', function(){
      jQuery(document).ready( function($){
          let ajax_url = php_vars.ajax_url;
          let nonce = php_vars.nonce;
          let idpages = php_vars.idpages;
        
      });   
  });


```




```php
  
  // function 



    function slider_images() {  ?>
        
        <?php  $informid = $_POST['postid'];  ?>
        <?php $code =  $_POST['optionid'];  ?>
   
        
<?php  
                              
   $query = new WP_Query( array(
    'post_type'      => 'product',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
//       'product_id ' => '1161',
       'p'         => $informid,
    'tax_query'      => array( array(
        'taxonomy'   => 'product_cat',
        'field'      => '1161',
        'terms'      => array( get_queried_object()->term_id ),
    ) )
) );

while ( $query->have_posts() ) : $query->the_post(); ?>
   <?php //   echo '<li><a href="'. get_permalink() .'"><div class="product__preview"><img src="' . get_the_post_thumbnail_url() . '"></div><span>' . get_the_title() . '</span></a></li>'; ?>
    

    <?php if( have_rows('product_images') ): ?>

        <?php while( have_rows('product_images') ): the_row();
            // vars
            $select = get_sub_field('select');
            $cod_id = get_sub_field('cod_id');  ?>

            
               <?php  if($cod_id == $code ){  ?>

               
                    <div class="tt-product-single-img">
							<div>
								<button class="tt-btn-zomm tt-top-right"><i class="icon-f-86"></i></button>
								
								<div id="slikety">

                                     <?php  $images = get_sub_field('img');         

                                              if( $images ): ?>

                                            <?php foreach( $images as $image ): ?>

                                                 <img class="zoom-product" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

                                            <?php endforeach; ?>

                                    <?php endif; ?>

                              </div>					

								
								<div id="custom-product-item">
										<button type="button" class="slick-arrow slick-prev">Previous</button>
										<button type="button" class="slick-arrow slick-next">Next</button>
									</div>
							</div>
						</div>
						<div class="tt-product-single-carousel-vertical">
                          <style>
                            #slik li img{
                              width: 81px;
                              position: relative;
                              display: block;
                              height: auto;
                            }

                            .zoomContainer{
                              pointer-events: none;
                            }
                          </style>
						
							<div id="slik" class="tt-slick-button-vertical">

							   <?php $images = get_sub_field('img');         
                                            
                                    if( $images ): ?>

                                  <?php foreach( $images as $image ): ?>

                                       <img class="zoom-product" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

                                  <?php endforeach; ?>

                               <?php endif; ?>
						
                          </div>	



                     </div>
            
       
            
         
            
                  <?php } ?>
            

          <?php endwhile; ?>

      <?php endif; ?>
                  
    
      <?php  endwhile;

        wp_reset_postdata(); ?>
        
  

  
        
    <?php 
       wp_die(); 
    }

    add_action('wp_ajax_slider_images', 'slider_images');
    add_action('wp_ajax_nopriv_slider_images', 'slider_images');



```









```php



        
```


http://guardio.uh-vpn.org/wp-admin/plugin-install.php?tab=plugin-information&plugin=variation-swatches-for-woocommerce&TB_iframe=true&width=600&height=550



<!--vue-and-the-wordpress-rest-api [Links](http://bionicteaching.com/vue-and-the-wordpress-rest-api/)-->