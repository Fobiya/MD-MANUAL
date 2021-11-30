##  WP upload_files

<!--![](../../img/all-category.png)-->

### 


```php
    
 <script>
    document.addEventListener('DOMContentLoaded', function(){
      jQuery(document).ready( function($){
  
                                          
        let ajax_url = php_vars.ajax_url;

         var imagesform = $('#images-form');

         $('body').on('change', '#images-form-input', function() {

             //Get the form data and store in a variable
             var myformData = new FormData(imagesform[0]);

             //Add our own action to the data
             //action is where we will be hooking our php function
             myformData.append('action', 'pn_wp_frontend_ajax_upload');

             //Prepare and send the call
             $.ajax({
                 type: "POST",
                 data: myformData,
                 dataType: "json",
                 url: ajax_url,
                 cache: false,
                 processData: false,
                 contentType: false,
                 enctype: 'multipart/form-data',
                 success: function(data, textStatus, jqXHR) {
                     //Success codes goes here
                 },
                 error: function(jqXHR, textStatus, errorThrown){

                        jqXHR
                 }
             });

         }); 

      });
    }); 

  </script>

   <form id="images-form" method='post' action='' enctype='multipart/form-data' class="fileUpload">
       <input type='file' name='file' class="upload" id="images-form-input" accept="image/*">
         <span>Upload an image</span>
         <?php wp_nonce_field( 'myuploadnonce', 'mynonce' );?>
       <input hidden type='submit' name='but_submit' value='Submit' class="but_submit">
   </form>  


```


### functions.php

```php

  function pn_upload_files() {
     
    //Do the nonce security check
    if ( !isset($_POST['but_submit']) || !isset($_POST['mynonce']) || !wp_verify_nonce( $_POST['mynonce'], 'myuploadnonce' ) || !isset($_POST['nmynonce']) || !wp_verify_nonce( $_POST['nmynonce'], 'nmyuploadnonce' ) ) {
        //Send the security check failed message

        if($_FILES['file']['name'] != ''){
            $uploadedfile = $_FILES['file'];
            $upload_overrides = array( 'test_form' => false );

            $movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
            $imageurl = "";
            if ( $movefile && ! isset( $movefile['error'] ) ) {
                $imageurl  = $movefile['url'];
                echo $imageurl;
            } else {
                echo $movefile['error'];
            }
        }
    //	   _e( 'Success', 'pixelnet');
    }

    wp_die();
}
 
//Hook our function to the action we set at jQuery code
add_action( 'wp_ajax_pn_wp_frontend_ajax_upload', 'pn_upload_files');
add_action( 'wp_ajax_nopriv_pn_wp_frontend_ajax_upload', 'pn_upload_files');



```

<!--#### In SCSS-->

<!--
* AJAX в WordPress - Миши Рудрастых
 [Links](https://misha.blog/wordpress/ajax.html)
* ajax-pagination - Миши Рудрастых
 [Links](https://misha.blog/wordpress/ajax-pagination.html)
* paginate_links [Links](https://developer.wordpress.org/reference/functions/paginate_links/)-->
