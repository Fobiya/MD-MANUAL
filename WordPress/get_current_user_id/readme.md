### get_current_user_id

<!--![](../../img/pages-category.png)-->



```php


$current_user = wp_get_current_user();

print_r(current_user);

$first_name = $current_user->first_name;
$last_name = $current_user->last_name;  
$user_login = $current_user->user_login;  

echo $first_name . '<br>'; 
echo $last_name . '<br>'; 
echo $user_login . '<br>'; 



$current_user = wp_get_current_user();

/*
 * @example Safe usage: $current_user = wp_get_current_user();
 * if ( ! ( $current_user instanceof WP_User ) ) {
 *     return;
 * }
 */
printf( __( 'Username: %s', 'textdomain' ), esc_html( $current_user->user_login ) ) . '<br />';
printf( __( 'User email: %s', 'textdomain' ), esc_html( $current_user->user_email ) ) . '<br />';
printf( __( 'User first name: %s', 'textdomain' ), esc_html( $current_user->user_firstname ) ) . '<br />';
printf( __( 'User last name: %s', 'textdomain' ), esc_html( $current_user->user_lastname ) ) . '<br />';
printf( __( 'User display name: %s', 'textdomain' ), esc_html( $current_user->display_name ) ) . '<br />';
printf( __( 'User ID: %s', 'textdomain' ), esc_html( $current_user->ID ) );





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