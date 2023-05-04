# Contact-Form-7 TOP SPAM

<!--![](../../img/all-category.png)-->

https://wordpress.org/plugins/contact-form-7/

### 


http://oparin.info/web/zashhishhaem-contact-form-7-ot-spama/

```php
  
  [hidden antispam]

```

```php
    
<script>
  wpcf7.submit = function( form ) {
    var $form = $( form );
    $form.find('input[name="antispam"]').val('nospam');
  }
</script>

```


### functions.php

```php

add_filter( 'wpcf7_validate_hidden', 'custom_text_validation_filter', 20, 2 );
function custom_text_validation_filter( $result, $tag ) {
    $spam_text = isset( $_POST['antispam'] ) ? trim( $_POST['antispam'] ) : '';
        if ( ! empty( $spam_text ) ) { // проверяем, что поле заполнено
            ?>
            <script type="text/javascript">
                console.log('Spam Massege');
            </script>
            <?php
                $result->invalidate( $tag, "Spam? DADADADADA" );
        }
    return $result;
}

```

<!--#### In SCSS-->

<!--
* AJAX в WordPress - Миши Рудрастых
 [Links](https://misha.blog/wordpress/ajax.html)
* ajax-pagination - Миши Рудрастых
 [Links](https://misha.blog/wordpress/ajax-pagination.html)
* paginate_links [Links](https://developer.wordpress.org/reference/functions/paginate_links/)-->
