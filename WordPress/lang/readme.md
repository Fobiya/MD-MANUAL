## WP language

<!--![](../../img/)-->

https://wpml.org/

wpml off style in funcrtion

`` define('ICL_DONT_LOAD_NAVIGATION_CSS', true); ``


`` <?php _e( 'See', 'see-stryng'); ?> ``

``<?php bloginfo('language'); ?>``

``<?php echo substr( get_bloginfo ( 'language' ), 0, 2 );?>``


> en

``<?php echo substr( bloginfo ( 'language' ), 0, 2 );?>``
Produced:
> en-US



``<?php 

ACF plugin

$message = get_field('email_text', 'options_de');

<?php echo get_field('code_address', 'options_'.substr( get_bloginfo ( 'language' ), 0, 2 )); ?>

?>``



```php


<?php
$currentlang = get_bloginfo('language');
if($currentlang=="en-US"):?>
This is English
<?php else: ?>
This is Spanish
<?php endif; ?>


<?php if( get_bloginfo('language') == 'en-US' ) : ?>

// Code for English version

elseif( get_bloginfo('language') == 'ko-KR' ) : ?>

// Code for Korean



// Code for other language version

endif; ?>



<?php if (pll_current_language() == 'uk') { ?>
uk
<?php } elseif (pll_current_language() == 'ru') { ?>
ru
<?php } elseif (pll_current_language() == 'en') { ?>
en
<?php }  ?>



```


```php


    function language_selector_flags(){
        $languages = icl_get_languages('skip_missing=0&orderby=code');
        if(!empty($languages)){
            echo '<ul class="menu language-menu">';
            foreach($languages as $l){
                if($l['active'] == 1){ $class = 'lang_sel_sel'; }
                elseif ($l['active'] == 0) {
                  $class = 'lang_sel_other';
                }
                echo '<li><a href="'.$l['url'].'" class="'.$class.'"><span>';
                echo strtoupper($l['language_code']);
                echo '</span></a></li> ';
            }
            echo '</ul>';
        }
    }


```


