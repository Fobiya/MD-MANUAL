##  WP AJAX NONCE

<!--![](../../img/all-category.png)-->

### 


```php

  wp_localize_script( 'main-ajax-js', 'php_vars',
    array(
      'ajax_url' => admin_url("admin-ajax.php"), 
      'nonce' => wp_create_nonce('ajax-nonce'),  //   ajax-nonce 
      'idpages' => get_the_ID(),
      'title' => get_the_title(),
    )
  );
  
  
  function change_delete_post(){
    if ( empty($_POST) || ! wp_verify_nonce( $_POST['delete_post_nonce'], 'ajax-nonce') ){  //delete_post_nonce  - YOU PARAMETR FILD
       
        print 'Sorry, the verification data does not match.';
        exit;
    }else{
    
      echo 'DONE';
    }
    die;
}

```

```php

<script>
    document.addEventListener('DOMContentLoaded', function(){
      jQuery(document).ready( function($){
    
          // select list li 
          var listItems = document.querySelectorAll('.list li');   // this list  
                                          
          var listItems = document.querySelector('.list li');   // this one element  

          function handleClick(event) {

             if(!event){
                  console.log('click');
             }
          }

          // Assign click event handler to each list item
          listItems.forEach(function(item) {
            item.addEventListener('click', handleClick);
          });
    
    
        let ajax_url = php_vars.ajax_url;
        let nonce = php_vars.nonce;
        let idpages = php_vars.idpages;

          // Send WP Ajax request 
          var data = {
            action: 'update_articles',
            value: valuesString,
            articles: selectedValues.join(','),
            nonce: nonce,
            id: idpages,
          };

          jQuery.ajax({
            type: 'POST',
            url: ajax_url,
            data: data,
            success: function(response) {
            // Handle successful server response
              if (response) {
                // Clear the existing content in the #post-container
                jQuery('#post-container').empty();
                // Append the response to the #post-container
                jQuery('#post-container').append(response);
              }
            },
            error: function(error) {
              // Handle request error
              console.log(error);
            }
          });    

      });
    }); 

  </script>
```


```php
    
 <script>
    document.addEventListener('DOMContentLoaded', function(){
      jQuery(document).ready( function($){
    
        let ajax_url = php_vars.ajax_url;
        let nonce = php_vars.nonce;
        let idpages = php_vars.idpages;

    

        $("[id*='remove_']").click(function(em){

         let deletepostid = $(this).data('id');;

              $.ajax({
                  action: 'delete_post_change',
      //            url : ajax_url,
                  url: '<?php echo admin_url( "admin-ajax.php" ); ?>',
                  type: 'POST',
                  data: $("[id*='delete__post__" + deletepostid + "']").serialize(),
                  success: function(response) { //DONE success
                    document.getElementById(deletepostid).remove();
                  },
                  error: function(response) { // ERRROR
                      document.getElementById(deletepostid).innerHTML = "error";
                  }
              });

          });     

      });
    }); 

  </script>

    <a id="remove_<?php echo get_the_ID(); ?>" class="box__ remove" data-id="<?php echo get_the_ID(); ?>" href="javascript:;">Remove</a>
    <form id="delete__post__<?php echo get_the_ID(); ?>" method='POST' action='javascript:void(null);'>
      <?php wp_nonce_field( 'delete_post', 'delete_post_nonce' );?>
      <input type="hidden" name="postid" value="<?php echo get_the_ID(); ?>">
      <input type="hidden" name="action" value="delete_post_change">
    </form>
```


### functions.php





```php


function change_delete_post(){
    if ( empty($_POST) || ! wp_verify_nonce( $_POST['delete_post_nonce'], 'delete_post') ){
       
        print 'Sorry, the verification data does not match.';
        exit;
    }else{
      $postid = sanitize_text_field($_POST['postid']);
      wp_delete_post( $postid);
    }
    die;
}

add_action( 'wp_ajax_delete_post_change', 'change_delete_post' );
add_action( 'wp_ajax_nopriv_delete_post_change', 'change_delete_post' );


```

<!--#### In SCSS-->

* AJAX в WordPress - Миши Рудрастых
 [Links](https://misha.blog/wordpress/ajax.html)
* ajax-pagination - Миши Рудрастых
 [Links](https://misha.blog/wordpress/ajax-pagination.html)
* paginate_links [Links](https://developer.wordpress.org/reference/functions/paginate_links/)