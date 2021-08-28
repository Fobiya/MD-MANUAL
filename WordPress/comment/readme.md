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

<!--vue-and-the-wordpress-rest-api [Links](http://bionicteaching.com/vue-and-the-wordpress-rest-api/)-->