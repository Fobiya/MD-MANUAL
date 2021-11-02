##  WP AJAX

<!--![](../../img/all-category.png)-->

### 


```php
    
 <script>
    document.addEventListener('DOMContentLoaded', function(){
      jQuery(document).ready( function($){

       var product_id = $(this).data('product_id');
        $.ajax({
            type : 'POST',
//            url : ajax_url,
            url: '<?php echo admin_url( "admin-ajax.php" ); ?>',
            data : {
                product_id : '<?php echo get_the_ID(); ?>',
                action : 'random_event'
            },
            success: function (data) {
//                   jQuery("#random__").html(data);
            },
            complete: function (data) {

            }
        });

      });
    }); 

  </script>

    <ul class="info">

     <li><span id="random__" class="namber"><?php
       $random = get_post_meta(get_the_ID(), 'random');
       if($random){
          foreach($random as $randoms) { 
            echo $randoms[0]; 
          }
       }else{
         echo '0';
       } ?></span>


        <p>Total Jobs</p>
      </li>
      <li><span class="namber">4</span>
        <p>Average rating</p>
      </li>
      <li><span class="namber">187</span>
        <p>Total Hours</p>
      </li>
    </ul>
```


### functions.php

```php

    function random_event(){
        // prepare our arguments for the query
       $informid = $_POST['product_id']; 

       $onerandom = rand(0,2);

        if($onerandom == 0){
          $saverandom = rand(5,20);
        }elseif($onerandom == 1){
             $saverandom = rand(10,35);
        }elseif($onerandom == 2){
           $saverandom = rand(20,75);
        }

      // echo $saverandom;
      // $getparametrr = get_post_meta($informid, 'random');

       delete_post_meta('random');

    //  if( get_post_meta($informid, 'random')){
    //    delete_post_meta($informid, 'random');
    //    add_post_meta( $informid , 'random' , $saverandom  ); 
    //  }

    //  if( get_post_meta($informid, 'random') == false){
    //    add_post_meta( $informid , 'random' , $saverandom  ); 
    //  }

        die; 
    }

    add_action('wp_ajax_random_event', 'random_event'); // wp_ajax_{action}
    add_action('wp_ajax_nopriv_random_event', 'random_event'); // wp_ajax_nopriv_{action}


```

<!--#### In SCSS-->

* AJAX в WordPress - Миши Рудрастых
 [Links](https://misha.blog/wordpress/ajax.html)
* ajax-pagination - Миши Рудрастых
 [Links](https://misha.blog/wordpress/ajax-pagination.html)
* paginate_links [Links](https://developer.wordpress.org/reference/functions/paginate_links/)