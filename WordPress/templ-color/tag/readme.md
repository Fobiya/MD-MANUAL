## get_the_tags();

<!--![](../../img/)-->


add file in you template ``tag.php``

url ``domen/tag/name-slug-tug/``


```php

$posttags = get_the_tags();
if( $posttags ){
	foreach( $posttags as $tag ){
		echo $tag->name . ' '; 
	}
}

// Widget all tegs list 

 the_widget( 'WP_Widget_Tag_Cloud', array('title' => false) );
 
 // Echo list
 the_tags( 'Social tagging: ',' > ' );
 
 the_tags( 'Tagged with: ', ' • ', '<br />' );
 
 the_tags( '<ul><li>', '</li><li>', '</li></ul>' );
 
 ```

 ### WordPress echo list in post
 
```php

$tag = get_queried_object(); // teg veribla
           
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
 'post_type' => 'blog',
 'posts_per_page' => 4,
 'paged' => $paged,

 'tag' => $tag->slug,

);

$the_query = new WP_Query( $args ); 

  while( $the_query->have_posts() ){
      $the_query->the_post(); ?>

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
            <p><?php $text = strip_tags( get_the_content() ); echo mb_substr( $text, 0, 300 );  ?></p>

            <ul class="tegs">
              <?php $posttags = get_the_tags();
                    foreach( $posttags as $tag ){ ?>
                   <li><a href="domen/tag/<?php  echo $tag->slug;  ?>/"><?php echo $tag->name; ?></a></li>

              <?php }  ?>
            </ul>

        </div>

    </div>
	
<?php  } 
wp_reset_postdata();


$big = 999999999; 
?>

<div class="col-sm-12 paginates"> 

	<?php 
	
	echo paginate_links( array(
		'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format'  => '?paged=%#%',
		'current' => max( 1, get_query_var('paged') ),
		'total'   => $the_query->max_num_pages
		
	) );
	
	?>
</div>		

```

<!--#### In SCSS-->

<!--MD-MANUAL/scss/media/ [Links](https://github.com/Fobiya/MD-MANUAL/tree/master/scss/media)-->