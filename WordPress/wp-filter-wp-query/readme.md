##  WP uwp-filter-wp-query

<!--![](../../img/all-category.png)-->

### 


```php
    

       $args = array(
         
//             'order' => 'ASC', // order filter  last post DESC ASC
//            'post_type'  => 'coach', // Post type category BLOG
//
//            's'     => $_GET['search'],
//            'post_status' => 'publish',
//            'orderby'     => 'date', 
  
//             'title' => $_GET['search'],    
////            'posts_per_page'    => -1,
  
//         -----------
         
            'order' => 'ASC', // order filter  last post DESC ASC
            'post_type'  => 'coach', // Post type category BLOG

                    'post_status' => 'publish',
                    'orderby'     => 'date', 

                    'update_post_meta_cache' => false,
                    'update_post_term_cache' => false,
                    'extend_where' => "(post_title like '%". $_GET['search'] ."%')",

        );
        // The Query
        $the_query = new WP_Query( $args );


```


### functions.php

```php

add_filter( 'posts_where', 'extend_wp_query_where', 10, 2 );
function extend_wp_query_where( $where, $wp_query ) {
    if ( $extend_where = $wp_query->get( 'extend_where' ) ) {
        $where .= " AND " . $extend_where;
    }
    return $where;
}



```

<!--#### In SCSS-->

<!--
* AJAX в WordPress - Миши Рудрастых
 [Links](https://misha.blog/wordpress/ajax.html)
* ajax-pagination - Миши Рудрастых
 [Links](https://misha.blog/wordpress/ajax-pagination.html)
* paginate_links [Links](https://developer.wordpress.org/reference/functions/paginate_links/)-->
