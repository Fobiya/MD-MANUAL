# Advanced Custom Fields for WordPress Developers.

![](https://www.advancedcustomfields.com/wp-content/themes/acf/assets/images/home/acf-home-simple-intuitive.jpg)


```php

    get_field('registration_page', 'options');
    get_field('code_phone', 'options_en');

```



```php

<?php // check if the flexible content field has rows of data
if( have_rows('home_pages') ):
     // loop through the rows of data
    while ( have_rows('home_pages') ) : the_row(); ?>
    <?php if( get_row_layout() == 'section_1' ): ?>
    
    
    <?php elseif( get_row_layout() == 'section_2' ): ?>
    

    <?php endif;
    endwhile;
endif; ?>





  <?php if( get_sub_field('title')): ?><!-- if under__the -->
    <?php the_sub_field('title'); ?>
  <?php endif; ?>

  <?php if( get_sub_field('paragraph')): ?><!-- if under__the -->
    <?php the_sub_field('paragraph'); ?>
  <?php endif; ?>

  <?php if( get_sub_field('content')): ?><!-- if under__the -->
    <?php the_sub_field('content'); ?>
  <?php endif; ?>


// repiater

    <?php if( have_rows('box_list') ): ?>

        <?php while( have_rows('box_list') ): the_row();
            // vars
            $image = get_sub_field('imag');
            $title = get_sub_field('title');
            $paragraph = get_sub_field('paragraph');
            $link = get_sub_field('link');  ?>
            
            

          <?php endwhile; ?>

      <?php endif; ?>
         
          
// link
         
    <?php $link = get_sub_field('link'); ?>
 
    <?php if( $link ): 
          $link_url = $link['url'];
          $link_title = $link['title'];
          $link_target = $link['target'] ? $link['target'] : '_self'; ?>

        <a href="<?php echo esc_url( $link_url ); ?>" class="btn__casinos-block" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
    <?php endif; ?>

          
// image

    <?php $image = get_sub_field('img'); ?>

    <?php if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>"  alt="<?php echo esc_attr($image['alt']); ?>">
    <?php endif; ?>        

                

```



https://www.advancedcustomfields.com/

https://wp-kama.ru/plugin/acf