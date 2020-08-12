
<?php
/**
 * Template Name: ALL Pages
 * Template Post Type: page
 */
get_header();?>
<!--Link--><?= css();?>



<?php $page_id = '6' ?>
<?php // the_field('title', $page_id); ?>


<!-- HEADER -->
  <?php if( get_field('__header_chek') == 'enable_sidebar' ) { ?>

      <?php if( have_rows('__header', $page_id) ):

           // loop through the rows of data
          while ( have_rows('__header', $page_id) ) : the_row();  ?>

            <?php if( get_row_layout() == '__header' ): ?>

                  <header>

                        <div class="container">
                            <div class="row">
                              <div class="col m12 s12 l8 xl8">


                              <?php if( get_sub_field('title', $page_id)): ?><!-- if under__the -->
                                <h1><?php the_sub_field('title', $page_id); ?></h1>
                              <?php endif; ?>

                               <?php if( get_sub_field('content', $page_id)): ?><!-- if under__the -->
                                <p><?php the_sub_field('content', $page_id); ?></p>
                              <?php endif; ?>


                              <ul class="list">

                                <?php if( have_rows('box_list', $page_id) ): ?>

                                    <?php while( have_rows('box_list', $page_id) ): the_row(); 
                                        // vars
                                        //$images = get_sub_field('images'); 
                                        //$title = get_sub_field('title'); 
                                        $paragraph = get_sub_field('paragraph', $page_id); ?> 

                                      <li class="ion-checkmark"><p><?php echo $paragraph ?></p></li>

                                    <?php endwhile; ?> 
                                <?php endif; ?> 

                              </ul>

                              </div>
                            </div>
                        </div>

                    </header>

            <?php endif;

          endwhile;

      endif; ?>
  
 <?php }?>
 
<?php if( have_rows('__header') ):

     // loop through the rows of data
    while ( have_rows('__header') ) : the_row();  ?>

      <?php if( get_row_layout() == '__header' ): ?>

            <header>

                  <div class="container">
                      <div class="row">
                        <div class="col m12 s12 l8 xl8">


                        <?php if( get_sub_field('title')): ?><!-- if under__the -->
                          <h1><?php the_sub_field('title'); ?></h1>
                        <?php endif; ?>

                         <?php if( get_sub_field('content')): ?><!-- if under__the -->
                          <p><?php the_sub_field('content'); ?></p>
                        <?php endif; ?>




                          <?php if( have_rows('box_list') ): ?>
                        <ul class="list">

                              <?php while( have_rows('box_list') ): the_row(); 
                                  // vars
                                  //$images = get_sub_field('images'); 
                                  //$title = get_sub_field('title'); 
                                  $paragraph = get_sub_field('paragraph'); ?> 

                                <li class="ion-checkmark"><p><?php echo $paragraph ?></p></li>

                              <?php endwhile; ?> 
                        </ul>
                              
                          <?php endif; ?> 



                        </div>
                      </div>
                  </div>

              </header>

      <?php endif;

    endwhile;

endif; ?>
<!-- END HEADER -->


<!-- breadcrumbs__ -->
<?php if ( !is_front_page() ) { ?>

  <div class="breadcrumbs__">
    <div class="container">
      <div class="row">
        <div class="col m12 s12 l12 xl12">

              <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>

        </div>
      </div>
    </div>
  </div>

<?php } ?>
<!-- END breadcrumbs__ -->


<!-- section 1 -->
  <?php if( get_field('chek_1') == 'enable_sidebar' ) { ?>

      <?php if( have_rows('__section_1', $page_id) ):

           // loop through the rows of data
          while ( have_rows('__section_1', $page_id) ) : the_row();  ?>

            <?php
              if( get_row_layout() == '__section_1' ): ?>

                   <section class="home_section_1 section__ oh-y">
                         <div class="container">
                          <div class="row">
                            <div class="col m12 s12 l12 xl12">

                                <?php if( get_sub_field('title', $page_id)): ?><!-- if under__the -->
                                  <h2><?php the_sub_field('title', $page_id); ?></h2>
                                <?php endif; ?>

                                 <?php if( get_sub_field('content', $page_id)): ?><!-- if under__the -->
                                  <p class="subtitle"><?php the_sub_field('content', $page_id); ?></p>
                                <?php endif; ?>
                            </div>

                          </div>

                          <div class="row">

                            <?php if( have_rows('box_list', $page_id) ): ?>

                                <?php while( have_rows('box_list', $page_id) ): the_row(); 
                                    // vars
                                    $images = get_sub_field('images', $page_id); 
                                    //$title = get_sub_field('title'); 
                                    $paragraph = get_sub_field('paragraph', $page_id); ?> 

                                  <div class="col m6 s6 l4 xl3">
                                    <div class="box__info">

                                     <?php if( !empty( $images ) ): ?>
                                        <img class="img" src="<?php echo esc_url($images['url']); ?>" alt="<?php echo esc_attr($images['alt']); ?>" />
                                    <?php endif; ?>

                                    <?php if( $paragraph ): ?><!-- if under__the -->
                                        <p><?php echo $paragraph ?></p>
                                   <?php endif; ?>

                                    </div>
                                  </div>

                                <?php endwhile; ?> 
                            <?php endif; ?> 

                          </div>
                        </div>

                    </section> 

            <?php endif;

          endwhile;

      endif; ?>

  <?php } ?>
  
  
  
<?php if( have_rows('__section_1') ):

     // loop through the rows of data
    while ( have_rows('__section_1') ) : the_row();  ?>

      <?php
        if( get_row_layout() == '__section_1' ): ?>

             <section class="home_section_1 section__ oh-y">
                   <div class="container">
                    <div class="row">
                      <div class="col m12 s12 l12 xl12">

                          <?php if( get_sub_field('title')): ?><!-- if under__the -->
                            <h2><?php the_sub_field('title'); ?></h2>
                          <?php endif; ?>

                           <?php if( get_sub_field('content')): ?><!-- if under__the -->
                            <p class="subtitle"><?php the_sub_field('content'); ?></p>
                          <?php endif; ?>
                      </div>

                    </div>

                    <div class="row">

                      <?php if( have_rows('box_list') ): ?>

                          <?php while( have_rows('box_list') ): the_row(); 
                              // vars
                              $images = get_sub_field('images'); 
                              //$title = get_sub_field('title'); 
                              $paragraph = get_sub_field('paragraph'); ?> 

                            <div class="col m6 s6 l4 xl3">
                              <div class="box__info">

                               <?php if( !empty( $images ) ): ?>
                                  <img class="img" src="<?php echo esc_url($images['url']); ?>" alt="<?php echo esc_attr($images['alt']); ?>" />
                              <?php endif; ?>

                              <?php if( $paragraph ): ?><!-- if under__the -->
                                  <p><?php echo $paragraph ?></p>
                             <?php endif; ?>

                              </div>
                            </div>

                          <?php endwhile; ?> 
                      <?php endif; ?> 

                    </div>
                  </div>

              </section> 

      <?php endif;

    endwhile;

endif; ?>

<!-- END section 1 -->





<!-- section 3 -->
<?php if( get_field('chek_3') == 'enable_sidebar' ) { ?>
  

    <?php if( have_rows('__section_3', $page_id) ):

       // loop through the rows of data
      while ( have_rows('__section_3', $page_id) ) : the_row();  ?>

        <?php  if( get_row_layout() == '__section_3' ): ?>


      <section class="home_section_4 section__ oh-y">
             <div class="container">

              <div class="row">
                <div class="col m12 s12 l12 xl12">

                    <?php if( get_sub_field('title', $page_id)): ?><!-- if under__the -->
                      <h2><?php the_sub_field('title', $page_id); ?></h2>
                    <?php endif; ?>

                     <?php if( get_sub_field('content', $page_id)): ?><!-- if under__the -->
                      <p><?php the_sub_field('content', $page_id); ?></p>
                    <?php endif; ?>
                </div>
               </div>

              <div class="row">
                <div class="col m12 s12 l6 xl6">
                  <!--Start Edu-Profit.com code-->
                  <script type="text/javascript">
                  var partner_id = 19627;
                  var sub_id = "";
                  (function() {
                  var sc = document.createElement('script'); sc.type = 'text/javascript'; sc.async = true;
                  sc.src = 'https://www.edu-profit.com/orderformph-new2.js';
                  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(sc, s);
                  })();
                  </script>
                  <div id="orderformph-new-2"></div>
                  <!--End Edu-Profit.com code-->

                </div>

                <div class="col m12 s12 l6 xl6">


                    <?php if( get_sub_field('title_h3', $page_id)): ?><!-- if under__the -->
                      <h3><?php the_sub_field('title_h3', $page_id); ?></h3>
                    <?php endif; ?>

                    <?php if( get_sub_field('text_in_block', $page_id)): ?><!-- if under__the -->
                      <?php the_sub_field('text_in_block', $page_id); ?>
                    <?php endif; ?>


                </div>

              </div>
            </div>

          </section>



        <?php endif;

      endwhile;

  endif; ?>

<?php } ?>

<?php if( have_rows('__section_3') ):

     // loop through the rows of data
    while ( have_rows('__section_3') ) : the_row();  ?>



      <?php  if( get_row_layout() == '__section_3' ): ?>
        
        
    <section class="home_section_4 section__ oh-y">
           <div class="container">
           
            <div class="row">
              <div class="col m12 s12 l12 xl12">

                  <?php if( get_sub_field('title')): ?><!-- if under__the -->
                    <h2><?php the_sub_field('title'); ?></h2>
                  <?php endif; ?>

                   <?php if( get_sub_field('content')): ?><!-- if under__the -->
                    <p><?php the_sub_field('content'); ?></p>
                  <?php endif; ?>
              </div>
             </div>
           
            <div class="row">
              <div class="col m12 s12 l6 xl6">
                <!--Start Edu-Profit.com code-->
                <script type="text/javascript">
                var partner_id = 19627;
                var sub_id = "";
                (function() {
                var sc = document.createElement('script'); sc.type = 'text/javascript'; sc.async = true;
                sc.src = 'https://www.edu-profit.com/orderformph-new2.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(sc, s);
                })();
                </script>
                <div id="orderformph-new-2"></div>
                <!--End Edu-Profit.com code-->
            
              </div>
              
              <div class="col m12 s12 l6 xl6">

              
                  <?php if( get_sub_field('title_h3')): ?><!-- if under__the -->
                    <h3><?php the_sub_field('title_h3'); ?></h3>
                  <?php endif; ?>
                  
                  <?php if( get_sub_field('text_in_block')): ?><!-- if under__the -->
                    <?php the_sub_field('text_in_block'); ?>
                  <?php endif; ?>

              
              </div>

            </div>
          </div>
                     
        </section>
         

     
      <?php endif;

    endwhile;

endif; ?>

<!-- END section 3 -->



<!-- section 2 -->
<?php if( get_field('chek_2') == 'enable_sidebar' ) { ?>


    <?php if( have_rows('__section_2', $page_id) ):

       // loop through the rows of data
      while ( have_rows('__section_2', $page_id) ) : the_row();  ?>



        <?php  if( get_row_layout() == '__section_2' ): ?>


           <section class="home_section_5 section__ oh-y">

               <div class="container">

                <div class="row">
                  <div class="col m12 s12 l12 xl12">

                      <?php if( get_sub_field('title', $page_id)): ?><!-- if under__the -->
                        <h2><?php the_sub_field('title', $page_id); ?></h2>
                      <?php endif; ?>

                       <?php if( get_sub_field('content', $page_id)): ?><!-- if under__the -->
                        <p><?php the_sub_field('content', $page_id); ?></p>
                      <?php endif; ?>
                  </div>
                 </div>

                <div class="row">

                  <?php if( have_rows('box_list', $page_id) ): ?>

                      <?php while( have_rows('box_list', $page_id) ): the_row(); 
                          // vars
    //                      $images = get_sub_field('images'); 
                          $title = get_sub_field('title', $page_id); 
                          $paragraph = get_sub_field('paragraph', $page_id); ?> 

                          <div class="col m6 s12 l3 xl3 digits inner">

                                <div class="block">

                                <?php if( $title ): ?><!-- if under__the -->
                                    <span <?php if(get_row_index() == '1'){ 
                                    echo 'id="years"'; }elseif(get_row_index() == '2'){ echo 'id="orders"'; }elseif(get_row_index() == '3'){ echo 'id="experts"'; }elseif(get_row_index() == '4'){ echo 'id="customers"'; }?>><?php echo $title ?></span>
                               <?php endif; ?>

                                 <?php if( $paragraph ): ?><!-- if under__the -->
                                      <p class="descr"><?php echo $paragraph ?></p>
                                 <?php endif; ?>

                              </div>

                        </div>

                      <?php endwhile; ?> 
                  <?php endif; ?>   


                </div>
              </div>

            </section>



        <?php endif;

      endwhile;

  endif; ?>


<?php } ?>
  
  
<?php if( have_rows('__section_2') ):

     // loop through the rows of data
    while ( have_rows('__section_2') ) : the_row();  ?>



      <?php  if( get_row_layout() == '__section_2' ): ?>
        
        
         <section class="home_section_5 section__ oh-y">
            
             <div class="container">

              <div class="row">
                <div class="col m12 s12 l12 xl12">

                    <?php if( get_sub_field('title')): ?><!-- if under__the -->
                      <h2><?php the_sub_field('title'); ?></h2>
                    <?php endif; ?>

                     <?php if( get_sub_field('content')): ?><!-- if under__the -->
                      <p><?php the_sub_field('content'); ?></p>
                    <?php endif; ?>
                </div>
               </div>

              <div class="row">

                <?php if( have_rows('box_list') ): ?>

                    <?php while( have_rows('box_list') ): the_row(); 
                        // vars
  //                      $images = get_sub_field('images'); 
                        $title = get_sub_field('title'); 
                        $paragraph = get_sub_field('paragraph'); ?> 

                        <div class="col m6 s12 l3 xl3 digits inner">

                           <div class="block">

                               <?php if( $title ): ?><!-- if under__the -->
                                    <span <?php if(get_row_index() == '1'){ 
                                    echo 'id="years"'; }elseif(get_row_index() == '2'){ echo 'id="orders"'; }elseif(get_row_index() == '3'){ echo 'id="experts"'; }elseif(get_row_index() == '4'){ echo 'id="customers"'; }?>><?php echo $title ?></span>
                               <?php endif; ?>

                               <?php if( $paragraph ): ?><!-- if under__the -->
                                    <p class="descr"><?php echo $paragraph ?></p>
                               <?php endif; ?>

                            </div>

                      </div>

                    <?php endwhile; ?> 
                <?php endif; ?>   




              </div>
            </div>

          </section>
 

     
      <?php endif;

    endwhile;

endif; ?>

<!-- END section 2 -->




<!-- section 4 -->
<?php if( get_field('chek_4') == 'enable_sidebar' ) { ?>
  

    <?php if( have_rows('__section_4', $page_id) ):

       // loop through the rows of data
      while ( have_rows('__section_4', $page_id) ) : the_row();  ?>

        <?php  if( get_row_layout() == '__section_4' ): ?>


         <section class="home_section_2 section__ oh-y">
           <div class="container">
           
            <div class="row">
              <div class="col m12 s12 l12 xl12">

                  <?php if( get_sub_field('title', $page_id)): ?><!-- if under__the -->
                    <h2><?php the_sub_field('title', $page_id); ?></h2>
                  <?php endif; ?>

                   <?php if( get_sub_field('content', $page_id)): ?><!-- if under__the -->
                    <p><?php the_sub_field('content', $page_id); ?></p>
                  <?php endif; ?>
              </div>
             </div>
             
            <div class="row">
              <div class="col m12 s12 l12 xl12">
              
              
              <div class="slid">
               
              <?php if( have_rows('box_list', $page_id) ): ?>

                  <?php while( have_rows('box_list', $page_id) ): the_row(); 
                      // vars
//                      $images = get_sub_field('images'); 
                      $title = get_sub_field('title', $page_id); 
                      $paragraph = get_sub_field('paragraph', $page_id); ?> 

                        <div>
                            <div class="block">

                              <?php if( $title ): ?><!-- if under__the -->
                                  <h3><?php echo $title ?></h3>
                             <?php endif; ?>


                            <?php if( $paragraph ): ?><!-- if under__the -->
                              <p class="title"><?php echo $paragraph; ?></p>
                            <?php endif; ?>


                            </div>
                        </div>


                  <?php endwhile; ?> 
              <?php endif; ?>  
              
               </div>

                
              </div>
              
            </div>
          </div>
                    
        </section>
         


        <?php endif;

      endwhile;

  endif; ?>

<?php } ?>

<?php if( have_rows('__section_4') ):

     // loop through the rows of data
    while ( have_rows('__section_4') ) : the_row();  ?>



      <?php  if( get_row_layout() == '__section_4' ): ?>
        
       <section class="home_section_2 section__ oh-y">
           <div class="container">
           
            <div class="row">
              <div class="col m12 s12 l12 xl12">

                  <?php if( get_sub_field('title')): ?><!-- if under__the -->
                    <h2><?php the_sub_field('title'); ?></h2>
                  <?php endif; ?>

                   <?php if( get_sub_field('content')): ?><!-- if under__the -->
                    <p><?php the_sub_field('content'); ?></p>
                  <?php endif; ?>
              </div>
             </div>
             
            <div class="row">
              <div class="col m12 s12 l12 xl12">
              
              
              <div class="slid">
               
              <?php if( have_rows('box_list') ): ?>

                  <?php while( have_rows('box_list') ): the_row(); 
                      // vars
//                      $images = get_sub_field('images'); 
                      $title = get_sub_field('title'); 
                      $paragraph = get_sub_field('paragraph'); ?> 

                        <div>
                            <div class="block">

                              <?php if( $title ): ?><!-- if under__the -->
                                  <h3><?php echo $title ?></h3>
                             <?php endif; ?>


                            <?php if( $paragraph ): ?><!-- if under__the -->
                              <p class="title"><?php echo $paragraph; ?></p>
                            <?php endif; ?>


                            </div>
                        </div>


                  <?php endwhile; ?> 
              <?php endif; ?>  
              
               </div>

                
              </div>
              
            </div>
          </div>
                    
        </section>
         

     
      <?php endif;

    endwhile;

endif; ?>

<!-- END section 4 -->







<!-- section 5 -->
<?php if( get_field('chek_5') == 'enable_sidebar' ) { ?>
  

    <?php if( have_rows('__section_5', $page_id) ):

       // loop through the rows of data
      while ( have_rows('__section_5', $page_id) ) : the_row();  ?>

        <?php  if( get_row_layout() == '__section_5' ): ?>


           <section class="home_section_3 section__ oh-y">
           <div class="container">
           
           
           
            <div class="row">
              <div class="col m12 s12 l12 xl12">

                  <?php if( get_sub_field('title', $page_id)): ?><!-- if under__the -->
                    <h2><?php the_sub_field('title', $page_id); ?></h2>
                  <?php endif; ?>

                   <?php if( get_sub_field('content', $page_id)): ?><!-- if under__the -->
                    <p><?php the_sub_field('content', $page_id); ?></p>
                  <?php endif; ?>
              </div>
             </div>
           
           
            <div class="row">
              <div class="col m12 s12 l12 xl12">

                <div class="tab__menu">

                <?php if( have_rows('box_list', $page_id) ): ?>

                    <?php while( have_rows('box_list', $page_id) ): the_row(); 
                        // vars
  //                      $images = get_sub_field('images'); 
                        $menu_name = get_sub_field('menu_name', $page_id); 
                       // $title = get_sub_field('title'); 
                       // $paragraph = get_sub_field('paragraph'); ?> 

                       <a data-tab="<?php echo get_row_index(); ?>" class="<?php if(get_row_index() == '1'){ ?>active<?php }; ?>"><?php echo $menu_name ?></a>

                    <?php endwhile; ?> 
                <?php endif; ?>   

             </div>

          </div>
       <div class="col m12 s12 l12 xl12">
       
        <div class="tab__content">
           
           
              <?php if( have_rows('box_list', $page_id) ): ?>

                  <?php while( have_rows('box_list', $page_id) ): the_row(); 
                      // vars
                      // $images = get_sub_field('images'); 
                
                      $title = get_sub_field('title', $page_id); 
                      $paragraph = get_sub_field('paragraph', $page_id); ?> 

                     <div data-tab="<?php echo get_row_index(); ?>" class="<?php if(get_row_index() == '1'){ ?>active<?php }; ?> tab__block<?php echo get_row_index(); ?>">
                     
                        <?php if( $title ): ?><!-- if under__the -->
                          <h2><?php echo $title; ?></h2>
                        <?php endif; ?>   
                                          
                        <?php if( $paragraph ): ?><!-- if under__the -->
                          <?php echo $paragraph; ?>
                        <?php endif; ?>

                     
                     </div>
                    
              

                  <?php endwhile; ?> 
              <?php endif; ?>   

        </div>


  
                  
                     
                        
                              
                  
              </div>
              
            </div>
          </div>
                     
        </section>
        


        <?php endif;

      endwhile;

  endif; ?>

<?php } ?>

<?php if( have_rows('__section_5') ):

     // loop through the rows of data
    while ( have_rows('__section_5') ) : the_row();  ?>



      <?php  if( get_row_layout() == '__section_5' ): ?>
       
        
     <section class="home_section_3 section__ oh-y">
           <div class="container">
           
           
           
            <div class="row">
              <div class="col m12 s12 l12 xl12">

                  <?php if( get_sub_field('title')): ?><!-- if under__the -->
                    <h2><?php the_sub_field('title'); ?></h2>
                  <?php endif; ?>

                   <?php if( get_sub_field('content')): ?><!-- if under__the -->
                    <p><?php the_sub_field('content'); ?></p>
                  <?php endif; ?>
              </div>
             </div>
           
           
           
            <div class="row">
              <div class="col m12 s12 l12 xl12">

                <div class="tab__menu">

                <?php if( have_rows('box_list') ): ?>

                    <?php while( have_rows('box_list') ): the_row(); 
                        // vars
  //                      $images = get_sub_field('images'); 
                        $menu_name = get_sub_field('menu_name'); 
                       // $title = get_sub_field('title'); 
                       // $paragraph = get_sub_field('paragraph'); ?> 

                       <a data-tab="<?php echo get_row_index(); ?>" class="<?php if(get_row_index() == '1'){ ?>active<?php }; ?>"><?php echo $menu_name ?></a>

                    <?php endwhile; ?> 
                <?php endif; ?>   

             </div>

          </div>
       <div class="col m12 s12 l12 xl12">
       
        <div class="tab__content">
           
           
              <?php if( have_rows('box_list') ): ?>

                  <?php while( have_rows('box_list') ): the_row(); 
                      // vars
                      // $images = get_sub_field('images'); 
                
                      $title = get_sub_field('title'); 
                      $paragraph = get_sub_field('paragraph'); ?> 

                     <div data-tab="<?php echo get_row_index(); ?>" class="<?php if(get_row_index() == '1'){ ?>active<?php }; ?> tab__block<?php echo get_row_index(); ?>">
                     
                        <?php if( $title ): ?><!-- if under__the -->
                          <h2><?php echo $title; ?></h2>
                        <?php endif; ?>   
                                          
                        <?php if( $paragraph ): ?><!-- if under__the -->
                          <?php echo $paragraph; ?>
                        <?php endif; ?>

                     
                     </div>
                    
              

                  <?php endwhile; ?> 
              <?php endif; ?>   

        </div>


  
                  
                     
                        
                              
                  
              </div>
              
            </div>
          </div>
                     
        </section>
        

     
      <?php endif;

    endwhile;

endif; ?>

<!-- END section 5 -->


<?php
//get_sidebar();
get_footer(); ?>

