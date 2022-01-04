## Taxonomy

![](../../../img/taxonomy.png)


```php

<?php acf_form_head(); ?>
<?php
/* Template Name:  Page */
get_header(); ?>


          <?php  acf_form(array(
               'field_groups' => array('group_61bc788346da5'),
//	'id'		=> '167',
          	'post_id'		=> '177',
//              'post_id'		=> 'new_post',
              'new_post'		=> array(
                'post_type'		=> 'product',
                'post_status'	=> 'moderation',

//              'post_category' =>  array(23), // DONE Post Category ACF field key STANDART CATYGORY
//              'product_cat' =>  array(16), // DONE Post Category ACF field key STANDART CATYGORY WooCommerce
                
              ),

                'post_title' => true,

//            'uploader'     => 'basic',

//             'form' => true,
              //'return' => '%post_url%', // DONE  Redirect to new post url

              'submit_value'       => 'Submit Post',
              'updated_message'    => 'Saved!'
              ));   ?>
```


### functions

```php

    add_action('acf/save_post', 'my_acf_save_post');
    function my_acf_save_post( $post_id ) {

      $cat_id = get_field("subject", $post_id);
//      wp_set_post_categories($post_id,  $cat_id);   //  STANDART CATYGORY
   
      wp_set_post_terms( $post_id, $cat_id, "product_cat"  ); //  STANDART CATYGORY WooCommerce

    }


```



<!--#### In SCSS-->

resources/acf-save_post [https://www.advancedcustomfields.com/resources/acf-save_post/]
acf_form() [https://www.advancedcustomfields.com/resources/acf_form/]

front-end-but-category-dropdo [https://stackoverflow.com/questions/44112562/how-to-add-acf-form-post-categry-field-in-acf-form-front-end-but-category-dropdo/]
acf_form-failing-after-update [https://support.advancedcustomfields.com/forums/topic/acf_form-failing-after-update/]



<!--MD-MANUAL/scss/media/ [Links](https://github.com/Fobiya/MD-MANUAL/tree/master/scss/media)-->