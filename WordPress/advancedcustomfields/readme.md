# Advanced Custom Fields for WordPress Developers.

![](https://www.advancedcustomfields.com/wp-content/themes/acf/assets/images/home/acf-home-simple-intuitive.jpg)


```php

    get_field('registration_page', 'options');
    get_field('code_phone', 'options_en');

```



```php


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
         
      <?php 
        if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            ?>

          <a href="<?php echo esc_url( $link_url ); ?>" class="btn__casinos-block" target="_blank"><?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?>

          
// image

      <?php if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>"  alt="<?php echo esc_attr($image['alt']); ?>">
      <?php endif; ?>        

                

```



https://www.advancedcustomfields.com/

https://wp-kama.ru/plugin/acf