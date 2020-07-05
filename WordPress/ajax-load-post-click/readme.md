## 

<!--![](../../img/all-category.png)-->

### get_template_part

```php

this is - get_template_part( 'nave', get_post_format() );

<div class="block__post">
    <div class="box__img">
		<?php if ( has_post_thumbnail() ) { ?>
				<a href="<?php the_permalink(); ?>" class="thumbnail">
					<?php the_post_thumbnail(); ?>
				</a>
		<?php } ?>
    </div>
    <div class="content">
      			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      		
				<p><?php $text = strip_tags( get_the_content() );
	echo mb_substr( $text, 0, 300 );  ?></p>
		
      			<ul class="tegs">
                  <?php $posttags = get_the_tags();
                      foreach( $posttags as $tag ){ ?>
                  
                       <li><a href="https://dom/tag/<?php  echo $tag->slug;  ?>/"><?php echo $tag->name; ?></a></li>
                       
                  <?php  }
                  ?>
      			</ul>
      
    </div>
</div>

```

`` $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) :  basename($_SERVER['REQUEST_URI']); ``  
MD-MANUAL/WordPress/url/ [Links](https://github.com/Fobiya/MD-MANUAL/WordPress/url)

### Pages

```php

$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
      'post_type'  => 'blog',
  'posts_per_page' => 4,
  'paged'          => $paged
);

$ethe_query = new WP_Query( $args ); 
               
                  
// цикл вывода полученных записей
while( $ethe_query->have_posts() ){
	$ethe_query->the_post();
	

	get_template_part( 'nave', get_post_format() );
    
  
} 
                  
                  
  global $ethe_query;
        if (  $ethe_query->max_num_pages > 1 ) : ?>
	<script>
	var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';

	var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
	var max_pages = '<?php echo $ethe_query->max_num_pages; ?>';
	</script>
	<div id="true_loadmore">Загрузить ещё</div>
<?php endif; 

wp_reset_postdata();     
// пагинация для произвольного запроса
$big = 999999999; // уникальное число

                  
//echo paginate_links( array(


//	'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
//      'format' => '?paged=%#%',
//	'current' => max( 1, basename($_SERVER['REQUEST_URI']) ),
//	'current' => max( 1, get_query_var('paged') ),
//	'total'   => $ethe_query->max_num_pages,
  
//          'before_page_number' => '<span class="screen-reader-text">'.$translated.' </span>'
// ) );	
                  
                  
                  
					
?>
```


### functions.php

```php

function true_loadmore_scripts() {
	wp_enqueue_script('jquery'); // скорее всего он уже будет подключен, это на всякий случай
 	wp_enqueue_script( 'true_loadmore', get_stylesheet_directory_uri() . '/loadmore.js', array('jquery'), time() );
}
 
add_action( 'wp_enqueue_scripts', 'true_loadmore_scripts' );



function etrue_load_posts(){
 

	$hiii = $_POST['page'] + 1; // следующая страница
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : $hiii;
$args = array(
      'post_type'  => 'blog',
  'posts_per_page' => 4,
  'paged'          => $paged
);

$ethe_query = new WP_Query( $args ); 

  
// цикл вывода полученных записей
while( $ethe_query->have_posts() ){
	$ethe_query->the_post();
	

	get_template_part( 'nave', get_post_format() );
    
  
} 
             

wp_reset_postdata();     
  
 
	die();
}

add_action('wp_ajax_loadmore3', 'etrue_load_posts');
add_action('wp_ajax_nopriv_loadmore3', 'etrue_load_posts');


```

<!--#### In SCSS-->

* AJAX в WordPress - Миши Рудрастых
 [Links](https://misha.blog/wordpress/ajax.html)
* ajax-pagination - Миши Рудрастых
 [Links](https://misha.blog/wordpress/ajax-pagination.html)
* paginate_links [Links](https://developer.wordpress.org/reference/functions/paginate_links/)