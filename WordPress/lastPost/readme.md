## Last post

<!--![](../../img/)-->



```php

  <ul class="post">

     <?php  
       $args = array(
            'order' => 'DESC', // order filter  last post
            'post_type'  => 'blog', // Post type category BLOG
            'posts_per_page' => 3, // echo show three post 
        );
        // The Query
        $the_query = new WP_Query( $args );

        // The Loop
        if ( $the_query->have_posts() ) {

            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                echo '<li class="ion-arrow-right-c"><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></li>';
            }

        } else {
            // no posts found
        }
        /* Restore original Post Data */
        wp_reset_postdata();
      ?>

  </ul>		

```

