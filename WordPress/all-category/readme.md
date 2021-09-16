### all-category

<!--![](../../img/pages-category.png)-->


##### ADD IN PAGES PARAMETR Category

```php

 <?php 

        $categories = get_the_category();
 
        if ( ! empty( $categories ) ) {
          //  echo esc_html( $categories[0]->slug );   
        }	
			

        
        $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

        $urlParts = parse_url($url);
        $path = $urlParts['path'];
        $subdomain = explode('/', $path);
       // echo $subdomain[1];    //где номер[2] каталога  ?>
        <?php 
          $namber = (int) $_GET['pages']; 
        
         if(!$namber){
           $namber = '1'; 
         }else{
           $namber = (int) $_GET['pages']; 
         }
	
	      $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : $namber;
	
       $args = array(
            'order' => 'DESC', // order filter  last post
            'posts_per_page' => 20, // echo show three post 
		   'category_name'  => $categories[0]->slug,
			 'paged'  => $paged,
        );
        // The Query
        $the_query = new WP_Query( $args );

        // The Loop
        if ( $the_query->have_posts() ) {

            while ( $the_query->have_posts() ) {
                $the_query->the_post(); ?>
						<?php

						$post_loop_details['post_loop_id'] = $post_loop_id;
						$post_loop_details['span_class'] = $span_class;

						inhype_set_post_details($post_loop_details);

						get_template_part( 'content', get_post_format() );

						$post_loop_id++;
					?>
	
	<?php
               // '<li class="ion-arrow-right-c"><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></li>';
            }

        } else {
            // no posts found
        }
        /* Restore original Post Data */
        wp_reset_postdata();
      ?>


        <div class="wp-pagenavi" role="navigation">
			
             <?php  $big = 999999999; // need an unlikely integer
              echo paginate_links( array(
                  'format' => '?pages=%#%',
                  'current' => $paged,
                  'total' => $the_query->max_num_pages,
                  'prev_text'    => __('«'),
                  'next_text'    => __('»'),
//                   'type' => 'list'
              ) ); ?>
					
    	</div>		



 ```




<!--#### In SCSS-->

<!--MD-MANUAL/scss/media/ [Links](https://github.com/Fobiya/MD-MANUAL/tree/master/scss/media)-->