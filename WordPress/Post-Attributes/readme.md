## Post Attributes AND Page Attributes / Page attributes won’t show up in Post Types

<!--![](../../img/all-category.png)-->


### functions.php

```php


add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );


    

```


### in file pages



```php

/**
* Template Name: Contacts Page*
* Template Post Type: post, page
*
*/

    
``` 


<!--#### In SCSS-->

<!--MD-MANUAL/scss/media/ [Links](https://github.com/Fobiya/MD-MANUAL/tree/master/scss/media)-->