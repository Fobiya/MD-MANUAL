# WP_Query

<!--![](../../img/)-->

https://gist.github.com/Dimasmagadan/2053399

```php
  
  'relation' => 'OR',   // all search
  'relation' => 'AND',   // FILTER search

  <ul class="post">
     
     <?php  
       $args = array(
            'orderby' => 'title',
            'order' => 'ASC',   // ASC  [1, 2, 3] , DESC [3, 2, 1]
                     
            's' => $_POST['list'],     // $_POST['list']  $_GET['list']    
        );
     ?>

     
     <?php  
  
        if ( isset( $_POST['list'] ) ) {
          $start = $_POST['list'];
        }  
        if ( isset( $_POST['field'] ) ) {
          $see = $_POST['field'];
        }

       $args = array(
            'orderby' => 'title',
            'order' => 'ASC',   // ASC  [1, 2, 3] , DESC [3, 2, 1]
        );
  
        'tax_query' => array(  // taxonomy  cat-terms
          'relation' => 'AND',
              array(
                'taxonomy' => 'start',
                'field'    => 'slug',
                'terms'    =>   explode( ',', $start ),
              ),
          
        ),
  
				'meta_query' => array(   // ACF CUSTOM FIELD  AND OLL
						'relation' => 'AND',
						array(
								'key' => 'position',    // name field
								'value' => $see,
								'compare' => 'LIKE',
						),
				),
  
  
     ?>
     
     <?php  
       $args = array(
            'orderby' => 'title',
            'order' => 'ASC',   // ASC  [1, 2, 3] , DESC [3, 2, 1]
                     
    'update_post_meta_cache' => false,
    'update_post_term_cache' => false,
    'extend_where' => "(post_title LIKE '%" . $_POST['search'] . "%')",   
        );
     ?>
     
// function filter posts_where search onli experts
function extend_wp_query_where( $where, $wp_query ) {
    if ( $extend_where = $wp_query->get( 'extend_where' ) ) {
        $where .= " OR " . $extend_where;
    }

    // Добавляем условие для ограничения на тип записи "BLOG"
    $post_type = $wp_query->get( 'post_type' );
    if ( $post_type === 'BLOG' ) {
        $where .= " AND post_type = 'BLOG'";
    }

    return $where;
}
add_filter( 'posts_where', 'extend_wp_query_where', 10, 2 );
     
     

     <?php  
       $args = array(
            'order' => 'DESC', // order filter  last post
            'post_type'  => 'blog', // Post type category BLOG
            'posts_per_page' => 3, // echo show three post 
            'post_status' => 'publish',
        );
        // The Query
        $the_query = new WP_Query( $args );

        // The Loop
        if ( $the_query->have_posts() ) {

            while ( $the_query->have_posts() ) {
                $the_query->the_post(); ?>
                
                <?php // get_the_permalink(); ?>
                <?php // get_the_title(); ?>
                <a href="<?php get_the_permalink(); ?>"><?php get_the_title(); ?></a>
                
                     
                
              <?php  //  echo '<li class="ion-arrow-right-c"><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></li>';
                  //  echo '<script> console.log("see"); </script>';
           <? }

        } else {
            // no posts found
        }
        /* Restore original Post Data */
        wp_reset_postdata();
      ?>

  </ul>		

```

