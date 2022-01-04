### get_current_user_id

<!--![](../../img/pages-category.png)-->



```php

$args = array(
  'order' => 'DESC', // order filter  last post
  'posts_per_page' => -1, // echo show three post 
   'author' => get_current_user_id(),
  'post_type' => 'product',

);


$query = new WP_Query( array(
    'author' => get_current_user_id(),
) );

 <?php 
$query = new WP_Query( array( 'author' => get_current_user_id(),) );
while ($query->have_posts() ) : $query->the_post(); ?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
<?php endwhile; wp_reset_postdata();?>


<?php if ( is_user_logged_in() ) { 
// СЮДА ТО ЧТО УВИДЯТ ЗАРЕГИСТРИРОВАННЫЕ ПОЛЬЗОВАТЕЛИ
 } ?>


<?php if ( is_user_logged_in() ) {
$query = new WP_Query( array( 'author' => get_current_user_id(),) );
while ($query->have_posts() ) : $query->the_post(); ?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
<?php endwhile; wp_reset_postdata(); } ?>

 ```




<!--#### In SCSS-->

is_user_logged_in [Links](https://gnatkovsky.com.ua/kak-vyvesti-vse-zapisi-polzovatelya-wordpress.html)