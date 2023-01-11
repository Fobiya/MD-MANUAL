## WP Comment

<!--![](../../img/)-->

```php

      <div id="respond" class="comment-respond">
         <form action="http://DOMEN/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate="">
            <div class="h4 brandcolor mb-4">Оставить отзыв</div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="review-stars">Рейтинг</label>
                    <select id="comment_approved" name="comment_approved" class="form-control">
                        <option value="5" selected="selected">5</option>
                        <option value="4">4</option>
                        <option value="3">3</option>
                        <option value="2">2</option>
                        <option value="1">1</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="review-author">Ваше имя</label>
                    <input  class="form-control form-control_valid"  id="author" name="author" type="text" value="" size="30" maxlength="245" required="required">
                </div>
                <div class="form-group col-md-4">
                    <label for="review-email">Email</label>
                    <input type="text" class="form-control form-control_valid"  id="email" name="email" type="email" value="" size="30" maxlength="100" aria-describedby="email-notes" required="required">
                </div>
            </div>
            <div class="form-group">
                <label for="review-text">Ваш отзыв</label>
                <textarea class="form-control form-control_valid"  id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea>
                <input type="hidden" name="elem_id" value="1">
            </div>
            <div class="form-group mb-0 mt-4">

            <p class="form-submit"><input class="btn btn-primary" name="submit" type="submit" id="submit" class="submit" value="Отправить"> <input type="hidden" name="comment_post_ID" value="<?= get_the_ID(); ?>" id="comment_post_ID">
               <input type="hidden" name="comment_parent" id="comment_parent" value="0">
            </p>
            </div>


        </form>                                                                                                      
      </div>   

```


```php


                          <?php 

                          //  
                          //$args = array(
                          //    'post_id' => 174,   // Use post_id, not post_ID
                          //        'count'   => true // Return only the count
                          //);
                          //$comments_count = get_comments( $args );
                          //echo $comments_count;


                          $args = array(
                          //    'status'  => 'hold',
//                              'number'  => '5',
                              'post_id' => get_the_ID(), // use post_id, not post_ID
                          );
                          $comments = get_comments( $args );

                          foreach ( $comments as $comment ) : ?>

                               <div class="rait_content d-flex order-2" itemprop="review" itemscope="" itemtype="https://schema.org/Review">
                                  <div class="row">
                                     <div class="col-12 col-sm-6 mb-3">
                                        <div itemprop="author" itemscope="" itemtype="https://schema.org/Person">
                                           <p class="font-weight-bold h5 mb-0" itemprop="name"><?= $comment->comment_author; ?></p>
                                        </div>
                                        <small class="text-muted">
                                           <meta itemprop="datePublished" content="<?= $comment->comment_date; ?>"><?= $comment->comment_date; ?>                      
                                        </small>
                                     </div>
                                     <div class="col-12 col-sm-6 mb-3">
                                        <ul class="rait_stars mb-0 p-0 text-sm-right">
                                           <li class="active">
                                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-star fa-w-18 fa-2x">
                                                 <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" class=""></path>
                                              </svg>
                                           </li>
                                           <li class="active">
                                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-star fa-w-18 fa-2x">
                                                 <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" class=""></path>
                                              </svg>
                                           </li>
                                           <li class="active">
                                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-star fa-w-18 fa-2x">
                                                 <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" class=""></path>
                                              </svg>
                                           </li>
                                           <li class="active">
                                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-star fa-w-18 fa-2x">
                                                 <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" class=""></path>
                                              </svg>
                                           </li>
                                           <li class="active">
                                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-star fa-w-18 fa-2x">
                                                 <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" class=""></path>
                                              </svg>
                                           </li>
                                        </ul>
                                        <span itemprop="reviewRating" itemscope="" itemtype="https://schema.org/Rating" class="d-none">
                                           <span itemprop="ratingValue">5</span>
                                           <meta itemprop="worstRating" content="1">
                                           <meta itemprop="bestRating" content="5">
                                        </span>
                                        <span itemprop="name" class="d-none">Ринопластика</span>
                                     </div>
                                     <div class="col-12">
                                        <p class="mb-0" itemprop="reviewBody"> <?php echo  $comment->comment_content; ?></p>
                                     </div>
                                     <div class="col-12">
                                        <hr class="">
                                     </div>
                                  </div>
                               </div>


                          <?php endforeach;
                              print_r($comments);  ?>

```






```php


<?php 
global $postid;
$postid = get_the_ID();    ?>
              
<ol class="commentlist">
    <?php    
        //Gather comments for a specific page/post 
        $comments = get_comments(array(
            'post_id' => $postid,
            'status' => 'approve' //Change this to the type of comments to be displayed
        ));

        //Display the list of comments
        wp_list_comments(array(
            'per_page' => 10, //Allow comment pagination
            'reverse_top_level' => false //Show the latest comments at the top of the list
        ), $comments);

    ?>
</ol>
             
  <?php comment_form( $args, $postid ); ?>    

```




```php
       
   $WC_Product = new WC_Product(get_the_ID());
   $product = new WC_Product(get_the_ID());
       
       
            <?php $argscountcomments = array(  'post_id' => get_the_ID(),);
                  $countcomments = get_comments( $argscountcomments );   ?>
                  <?php if($countcomments){ ?>
                   <h3 class="title">Reviews (<?php echo count($countcomments); ?>)</h3>    
                  <?php } ?>
              <div class="slick__reviews">
                  
                  <?php if($countcomments){ ?>

                  <?php   $args = array(
                       'status' => 'approve',
                      //    'number'  => '5',
                          'post_id' => get_the_ID(), // use post_id, not post_ID
                      );
                      $comments = get_comments( $args );

                      foreach ( $comments as $comment ) : ?>
                        <div>
                          <div class="comment__">
                           <p class="stars selected">
                             <span>
                               <?php
                                $results  = get_comment_meta( $comment->comment_ID);   // var_dump($results);

                                foreach($results['rating'] as $result) {
                                  $status = $result[0];
                                }      
                               ?>
                                <?php for ($i = 1; $i <= 5; $i++) : ?>
                                  <a class="star-<?php echo $i; ?><?php if($i == $status){echo ' active'; } ?> " ><?php echo esc_html( $i ); ?></a>
                                <?php endfor; ?>    
                              
                             </span>
                           </p>
                            <p><?php echo  $comment->comment_content; ?></p>
                            <p class="name"><?php echo $comment->comment_author; ?></p>
                          </div>
                        </div>
                  <?php endforeach; ?>
                  
               <?php  }else{ ?> 
               <p class="not-login">Scott has no reviews yet. Be the first.</p>
              <?php } ?>
       
       
       
       
       
       
       
       
       
       
       
       

       <?php defined( 'ABSPATH' ) || exit;

            global $product;

            if ( ! comments_open() ) {
                return;
            } ?>
            <div class="woocommerce">
        
        <?php if(0){ ?>
            <div id="comments">
                <h2 class="woocommerce-Reviews-title">
                    <?php
                    $count = $product->get_review_count();
                    if ( $count && wc_review_ratings_enabled() ) {
                        /* translators: 1: reviews count 2: product name */
                        $reviews_title = sprintf( esc_html( _n( '%1$s review for %2$s', '%1$s reviews for %2$s', $count, 'woocommerce' ) ), esc_html( $count ), '<span>' . get_the_title() . '</span>' );
                        echo apply_filters( 'woocommerce_reviews_title', $reviews_title, $count, $product ); // WPCS: XSS ok.
                    } else {
                        esc_html_e( 'Reviews', 'woocommerce' );
                    }
                    ?>
                </h2>

                <?php if ( have_comments() ) : ?>
                    <ol class="commentlist">
                        <?php wp_list_comments( apply_filters( 'woocommerce_product_review_list_args', array( 'callback' => 'woocommerce_comments' ) ) ); ?>
                    </ol>

                    <?php
                    if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
                        echo '<nav class="woocommerce-pagination">';
                        paginate_comments_links(
                            apply_filters(
                                'woocommerce_comment_pagination_args',
                                array(
                                    'prev_text' => is_rtl() ? '&rarr;' : '&larr;',
                                    'next_text' => is_rtl() ? '&larr;' : '&rarr;',
                                    'type'      => 'list',
                                )
                            )
                        );
                        echo '</nav>';
                    endif;
                    ?>
                <?php else : ?>
                    <p class="woocommerce-noreviews"><?php esc_html_e( 'There are no reviews yet.', 'woocommerce' ); ?></p>
                <?php endif; ?>
            </div>
        <?php } ?>

	    <?php if ( get_option( 'woocommerce_review_rating_verification_required' ) === 'no' || wc_customer_bought_product( '', get_current_user_id(), $product->get_id() ) ) : ?>

				<?php
				$commenter    = wp_get_current_commenter();
				$comment_form = array(
					/* translators: %s is product title */
					'title_reply'         => '',
					/* translators: %s is product title */
					'title_reply_to'      => esc_html__( 'Leave a Reply to %s', 'woocommerce' ),
					'title_reply_before'  => '<span id="reply-title" class="comment-reply-title">',
					'title_reply_after'   => '</span>',
					'comment_notes_after' => '',
					'label_submit'        => esc_html__( 'Submit', 'woocommerce' ),
					'logged_in_as'        => '',
					'comment_field'       => '',
				);

				$name_email_required = (bool) get_option( 'require_name_email', 1 );
				$fields              = array(
					'author' => array(
						'label'    => __( 'Name', 'woocommerce' ),
						'type'     => 'text',
						'value'    => $commenter['comment_author'],
//						'required' => $name_email_required,
					),
					'email'  => array(
						'label'    => __( 'Email', 'woocommerce' ),
						'type'     => 'email',
						'value'    => $commenter['comment_author_email'],
//						'required' => $name_email_required,
					),
				);

				$comment_form['fields'] = array();

				foreach ( $fields as $key => $field ) {
					$field_html  = '<p class="comment-form-' . esc_attr( $key ) . '">';
					$field_html .= '<label for="' . esc_attr( $key ) . '">' . esc_html( $field['label'] );

					if ( $field['required'] ) {
						$field_html .= '&nbsp;<span class="required">*</span>';
					}

					$field_html .= '</label><input id="' . esc_attr( $key ) . '" name="' . esc_attr( $key ) . '" type="' . esc_attr( $field['type'] ) . '" value="' . esc_attr( $field['value'] ) . '" size="30" ' . ( $field['required'] ? 'required' : '' ) . ' /></p>';

					$comment_form['fields'][ $key ] = $field_html;
				}

				$account_page_url = wc_get_page_permalink( 'myaccount' );
				if ( $account_page_url ) {
					/* translators: %s opening and closing link tags respectively */
					$comment_form['must_log_in'] = '<p class="must-log-in">' . sprintf( esc_html__( 'You must be %1$slogged in%2$s to post a review.', 'woocommerce' ), '<a href="' . esc_url( $account_page_url ) . '">', '</a>' ) . '</p>';
				}

				if ( wc_review_ratings_enabled() ) {
					$comment_form['comment_field'] = '<div class="comment-form-rating"><div class="raiting">Set your rating: <select name="rating" id="rating" required>
						<option value="">' . esc_html__( 'Rate&hellip;', 'woocommerce' ) . '</option>
						<option value="5">' . esc_html__( 'Perfect', 'woocommerce' ) . '</option>
						<option value="4">' . esc_html__( 'Good', 'woocommerce' ) . '</option>
						<option value="3">' . esc_html__( 'Average', 'woocommerce' ) . '</option>
						<option value="2">' . esc_html__( 'Not that bad', 'woocommerce' ) . '</option>
						<option value="1">' . esc_html__( 'Very poor', 'woocommerce' ) . '</option>
					</select></div></div>';
				}

				$comment_form['comment_field'] .= '<p class="comment-form-comment"><textarea id="comment" name="comment" cols="45" rows="8" required></textarea></p>';

				comment_form( apply_filters( 'woocommerce_product_review_comment_form_args', $comment_form ) );
				?>

                <?php else : ?>
                    <p class="woocommerce-verification-required"><?php esc_html_e( 'Only logged in customers who have purchased this product may leave a review.', 'woocommerce' ); ?></p>
                <?php endif; ?>

                <div class="clear"></div>
            </div>
          


```



```php


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

global $product;

if ( ! wc_review_ratings_enabled() ) {
	return;
}


// function get_total_reviews_count_test()
// {
//   return get_comments(array(
//     'status'   => 'approve',
//     'post_status' => 'publish',
//     'post_type'   => 'product',
//     'count' => true
//   ));
// }


$rating_count = $product->get_rating_count();
$review_count = get_comments_number($product->get_id());
$average      = $product->get_average_rating();

if ( $rating_count > 0 ) : ?>

	<div class="woocommerce-product-rating">
		<?php echo wc_get_rating_html( $average, $rating_count ); // WPCS: XSS ok. ?>
		<?php if ( comments_open() ) : ?>
			<?php //phpcs:disable ?>
			<a inst-plug href="<?php echo get_post_permalink(get_the_ID());?>#tab-reviews" class="woocommerce-review-link" rel="nofollow">(<?php printf( _n( '%s customer review', '%s customer reviews', $review_count, 'woocommerce' ), '<span class="count">' . esc_html( $review_count ) . '</span>' ); ?>)</a>
			<?php // phpcs:enable ?>
		<?php endif ?>
	</div>

<?php endif; ?>


```

<!--vue-and-the-wordpress-rest-api [Links](http://bionicteaching.com/vue-and-the-wordpress-rest-api/)-->