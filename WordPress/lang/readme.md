## WP language

<!--![](../../img/)-->

https://wpml.org/

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

