# NEW PAGE


```php

 
<?php

//$reg_link = get_permalink(get_field('registration_page', 'options'));

// check if the flexible content field has rows of data
if( have_rows('audit_otsenka_pages') ):

     // loop through the rows of data
    while ( have_rows('audit_otsenka_pages') ) : the_row();  ?>


      <?php
        if( get_row_layout() == '1home_section_header' ): ?>


        <header class="audit-and-evaluation_top section__">
          <div class="container">
            <div class="row">
              <div class="col m12 s12 l12 xl12">
                 
                  <?php if( get_sub_field('title')): ?><!-- if under__the -->
                    <h1><?php the_sub_field('title'); ?></h1>
                  <?php endif; ?>
                  
                   <?php if( get_sub_field('content')): ?><!-- if under__the -->
                    <p><?php the_sub_field('content'); ?></p>
                  <?php endif; ?>
              </div>
            </div>
          </div>
        </header>

         <?php
        elseif( get_row_layout() == 'home_section_1' ): ?>


        <section class="audit-and-evaluation_1 section__">
          <div class="container">
            <div class="row">
              <div class="col m12 s12 l12 xl12">

                <?php if( get_sub_field('title')): ?><!-- if under__the -->
                    <h2 class="element"><?php the_sub_field('title'); ?></h2>
                <?php endif; ?>

              </div>
            </div>
          </div>
          <div class="container list">

            <?php if( have_rows('box_list') ): ?>

                <?php while( have_rows('box_list') ): the_row();
                    // vars
                    $images = get_sub_field('images');
                    $title = get_sub_field('title');
                    $paragraph = get_sub_field('paragraph'); ?>

                 <div class="row">
                    <div class="col m12 s12 l6 xl6">

                        <h3><?php echo $title ?></h3>
                        <p><?php echo $paragraph ?></p>

                    </div>

                    <div class="col m12 s12 l6 xl6">

                      <?php if( !empty( $images ) ): ?>
                          <img class="images" src="<?php echo esc_url($images['url']); ?>" alt="<?php echo esc_attr($images['alt']); ?>" />
                      <?php endif; ?>
                    </div>
                 </div>
                <?php endwhile; ?>

            <?php endif; ?>

          </div>
        </section>

          <?php
        elseif( get_row_layout() == 'home_section_2' ): ?>


         <section class="audit-and-evaluation_2 section__ oh-y">
            <div class="container">
              <div class="row">
                <div class="col m12 s12 l6 xl6">
                    <?php if( get_sub_field('title')): ?><!-- if under__the -->
                      <h2 class="element"><?php the_sub_field('title'); ?></h2>
                    <?php endif; ?>
                </div>
                <div class="col m12 s12 l6 xl6">
                  <ul class="list">
                    <?php if( have_rows('box_list') ): ?>

                        <?php while( have_rows('box_list') ): the_row();
                            // vars
                            $images = get_sub_field('images');
                            $title = get_sub_field('title');
                            $paragraph = get_sub_field('paragraph'); ?>


                          <li>
                             <?php if(!empty( $images ) ): ?>
                                <img class="images" src="<?php echo esc_url($images['url']); ?>" alt="<?php echo esc_attr($images['alt']); ?>" >
                              <?php endif; ?>

                             <img class="num" srcset="<?php echo get_template_directory_uri(); ?>/img/audit-and-evaluation_2_num_<?php echo get_row_index(); ?>.png" alt="num_<?php echo get_row_index(); ?>">
                             
                            <h4><?php echo $title ?></h4>
                          </li>


                        <?php endwhile; ?>

                    <?php endif; ?>
                  </ul>
                </div>
              </div>
            </div>
          </section>

          <?php
        elseif( get_row_layout() == 'home_section_3' ): ?>

         <section class="audit-and-evaluation_3 section__">
            <div class="container">
              <div class="row">
                <div class="col m12 s12 l12 xl12">

                  <?php if( get_sub_field('title')): ?><!-- if under__the -->
                    <h2 class="element"><?php the_sub_field('title'); ?></h2>
                  <?php endif; ?>

                </div>
              </div>
              <div class="row">
                <div class="col m12 s12 l12 xl12">
                  <ul class="risk">

                    <?php if( have_rows('box_list') ): ?>

                        <?php while( have_rows('box_list') ): the_row();
                            // vars
                            $images = get_sub_field('images');
                            $title = get_sub_field('title');
                            $paragraph = get_sub_field('paragraph'); ?>

                          <li>
                            <?php if(!empty( $images ) ): ?>
                              <img class="icon" src="<?php echo esc_url($images['url']); ?>" alt="<?php echo esc_attr($images['alt']); ?>" >
                            <?php endif; ?>
                            <p><?php echo $paragraph ?></p>
                          </li>

                        <?php endwhile; ?>

                    <?php endif; ?>

                  </ul><a class="more">и другие риски</a>
                </div>
              </div>
              <div class="row">
                <div class="col m12 s12 l12 xl12">
                  <ul class="check">
                    <li>
                      <?php if( get_sub_field('title_check')): ?><!-- if under__the -->
                        <h2><?php the_sub_field('title_check'); ?></h2>
                      <?php endif; ?>
                    </li>

                      <?php if( have_rows('box_list_check') ): ?>

                          <?php while( have_rows('box_list_check') ): the_row();
                              // vars
                              $images = get_sub_field('images');
                              $title = get_sub_field('title');
                              $paragraph = get_sub_field('paragraph'); ?>


                            <li>
                              <span>0<?php echo get_row_index(); ?></span>
                              <p><?php echo $paragraph ?></p>
                            </li>


                          <?php endwhile; ?>

                      <?php endif; ?>


                    <li><a class="more">и так далее</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </section>

          <?php
        elseif( get_row_layout() == 'home_section_4' ): ?>


         <section class="audit-and-evaluation_4 section__">
            <div class="container">
              <div class="row">
                <div class="col m12 s12 l8 xl6 offset-xl6 offset-l4">

                  <?php if( get_sub_field('title')): ?><!-- if under__the -->
                    <h2><?php the_sub_field('title'); ?></h2>
                  <?php endif; ?>

                     <?php if( have_rows('box_list') ): ?>

                        <?php while( have_rows('box_list') ): the_row();
                            // vars
                            $title = get_sub_field('title');
                            $paragraph = get_sub_field('paragraph'); ?>

                           <p><?php echo $paragraph ?></p>

                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
              </div>
            </div>
          </section>

      <?php
        elseif( get_row_layout() == 'home_section_5' ): ?>

      <section class="audit-and-evaluation_5 section__ oh-y">
        <div class="container">
          <div class="row">
            <div class="col m12 s12 l12 xl12">
             
              <?php if( get_sub_field('title')): ?><!-- if under__the -->
                <h2 class="element"><?php the_sub_field('title'); ?></h2>
              <?php endif; ?>
              
            </div>
          </div>
          <div class="row">
            <div class="col m12 s12 l7 xl8">
             
              <ul class="list">
                   <?php if( have_rows('box_list') ): ?>

                        <?php while( have_rows('box_list') ): the_row();
                            // vars
                            $images = get_sub_field('images');
                            $title = get_sub_field('title');
                            $paragraph = get_sub_field('paragraph'); ?>

                          <li>
                             <p><?php echo $paragraph ?></p>

                              <?php if( have_rows('ul_list') ): ?>

                                  <ul>

                                    <?php while( have_rows('ul_list') ): the_row();  ?>

                                      <li>
                                        <p><?php  the_sub_field('paragraph'); ?></p>
                                      </li>

                                    <?php endwhile; ?>

                                  </ul>

                              <?php endif; ?>

                          </li>

                        <?php endwhile; ?>

                    <?php endif; ?>
              </ul>
              
            </div>
            <div class="col m12 s12 l5 xl4">

             <img class="background" srcset="<?php echo get_template_directory_uri(); ?>/img/audit-and-evaluation_5_background.png" alt="audit-and-evaluation_5_background">
             
              <div class="box__content">



                    <?php if( have_rows('box_list_right') ): ?>

                        <?php while( have_rows('box_list_right') ): the_row();
                            // vars
                            $images = get_sub_field('images');
                            $title = get_sub_field('title');
                            $paragraph = get_sub_field('paragraph'); ?>

                          <li>
                             <p <?php if( get_row_index() == '2'){ echo 'class="big"'; } ?> ><?php echo $paragraph ?></p>
                          </li>

                        <?php endwhile; ?>

                    <?php endif; ?>


                  <?php
                  $images_right = get_sub_field('images_right');
                  if( !empty( $images_right ) ): ?>
                      <img src="<?php echo esc_url($images_right['url']); ?>" alt="<?php echo esc_attr($images_righte['alt']); ?>" />
                  <?php endif; ?>

              </div>
            </div>
          </div>
        </div>
      </section>

      <?php
        elseif( get_row_layout() == 'home_section_6' ): ?>


          <section class="audit-and-evaluation_6 section__">
            <div class="container">
              <div class="row">
                <div class="col m12 s12 l6 xl6">

                  <form method="POST" action="javascript:void(null);">
                    <!-- Hidden Required Fields-->
                    <div class="form_input"><span class="field">
                        <input class="name" type="text" name="name" required="" value="" placeholder="Name"></span></div>
                    <div class="form_input"><span class="field">
                        <input class="mail" type="tel" name="tel" required="" value="" placeholder="phone"></span></div>
                    <div class="form_input"><span class="field">
                        <input class="mail" type="email" name="email" required="" value="" placeholder="Email"></span></div>
                    <button class="purpur-back" type="submit" name="send">SEND</button>
                  </form>

                </div>
                <div class="col m12 s12 l6 xl6">
                  <div class="box__content">

                    <?php if( get_sub_field('title')): ?><!-- if under__the -->
                      <h2><?php the_sub_field('title'); ?></h2>
                    <?php endif; ?>
                    <?php if( get_sub_field('content')): ?><!-- if under__the -->
                      <p><?php the_sub_field('content'); ?></p>
                    <?php endif; ?>

                  </div>
                </div>
              </div>
            </div>
          </section>


          <?php if (have_posts()) : while (have_posts()) : the_post();
                the_content();
				//
            endwhile;
        else : ?>
            <!-- <p>Sorry, no posts matched your criteria.</p> -->
        <?php endif; ?>

      <?php
        endif;

    endwhile;

endif;

?>


```

<!--#### In SCSS-->

<!--MD-MANUAL/scss/media/ [Links](https://github.com/Fobiya/MD-MANUAL/tree/master/scss/media)-->