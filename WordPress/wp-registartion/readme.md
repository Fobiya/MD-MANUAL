## Registration

<!--![](../../img/)-->



// - ajax

```php


  function registration_chang(){
      if ( empty($_POST) || ! wp_verify_nonce( $_POST['registration_nonce'], 'registration') ){
          print 'Sorry, the verification data does not match 1111.';
          exit;
      }else{
        
        $user_login = sanitize_text_field($_POST['username']);
        $user_pass  = sanitize_text_field($_POST['password']);
        $user_email = sanitize_text_field($_POST['email']);
        
        $user_url   = sanitize_text_field($_POST['url']);
        
//        $user_first = sanitize_text_field($_POST['first_name']);
//        $user_last  = sanitize_text_field($_POST['last_name']);

            $role = 'subscriber';

        if (email_exists($user_email)) {     
              echo '<p>Email уже зарегистрирован: '. $user_email .'</p><br>';
        } elseif (username_exists($user_login)) {
              echo '<p>Имя логин уже зарегистрировано: '. $user_login .'</p>';

        } else {

            $user_data = array(
              'ID' => '',
              'user_pass' => $user_pass,
              'user_login' => $user_login,
              'user_nicename' => $user_login,
              'user_url' => $_POST['url'],
              'user_email' => $user_email,

              'nickname' => $user_login,
              'first_name' => $_POST['first_name'],
              'last_name' => $_POST['last_name'],
              'role' => $role // Use default role or another role, e.g. 'editor'
            );
           wp_insert_user( $user_data );

            echo 'Done';
        }
          
if(0){     
$user_login = sanitize_text_field( $_POST['user_login'] );
$user_email = sanitize_email( $_POST['user_email'] );
$user = register_new_user( $user_login, $user_email );
$user = register_new_user( array( 'user_email' => $user_email,
                                'user_login' => $user_login,
                                'first_name' => $user_first,
                                'last_name' => $user_last,
                                'user_pass'   =>  $user_pass,
                                'role' => $user_role
                                ));
        
        
if ( ! is_wp_error( $user ) ) {
    $redirect_to = ! empty( $_POST['redirect_to'] ) ? $_POST['redirect_to'] : 'wp-login.php?checkemail=registered';
    wp_safe_redirect( $redirect_to );
    exit();
}
        

$userdata = array(
    'user_email'            => $user_email,   
    'first_name'            => $user_first,  
    'last_name'             => $user_last,  
    'role'                  => $role,
//    'user_url'              => $user_url,
    'nickname'              => $user_login,

);


        
wp_insert_user($userdata);
wp_update_user( array( 'ID' => $user_id, 'user_url' => $website ) );
$user_id = wp_create_user( array( 'user_email' => $user_email, 'user_url' => $user_url, 'first_name' => $user_first, 'last_name' => $user_last )) ;

        $user_id = wp_create_user($user_login, $user_pass, $user_email);
//        $user_id = wp_create_user( $userdata );

        if (is_wp_error($user_id)) {
          echo 'Error '. $user_id->get_error_code() .': '. $user_id->get_error_message();
        }

        if (email_exists($user_email)) {

            echo '<p>Email уже зарегистрирован: '. $user_email .'</p><br>';
          
          
          

          
//          $current_user = wp_get_current_user();
          
          
//  $author_id = get_the_author_meta('ID');
//$author_field = get_field('tokin', $author_id );
//          
//            $user = new WP_User(get_current_user_id());
//            echo $user->ID;
//            $user_id = $user->ID;
//          
//        $user_login = sanitize_text_field($_POST['username']);
//        $user_pass  = md5( sanitize_text_field($_POST['password']) );
//        $user_email = sanitize_text_field($_POST['email']);
//        
//        $user_url   = sanitize_text_field($_POST['url']);
//        
//        $user_first = sanitize_text_field($_POST['first_name']);
//        $user_last  = sanitize_text_field($_POST['last_name']);
//          
//          
//  update_field( 'first_name', $user_first , 'user_'.$user_id );
//  update_field( 'last_name', $user_last , 'user_'.$user_id );

//        $role = 'subscriber';
//          
//          $user_id = wp_update_user(
//            array(
//              'user_email' => $user_email,
//              'user_login' => $user_login,
//              'user_pass'  => $user_pass,
//              'user_url'   => $user_url,
//              'first_name' => $user_first,
//              'last_name'  => $user_last,
//              'role'       => $role,
//            )
//          );
          

         
         


//if( is_wp_error($user_id) ) {
//    echo $user_id->get_error_message();
//} else {
//    //add into custom table
//    echo $user_id;
//}

        } elseif (username_exists($user_login)) {

          echo '<p>Имя пользователя уже зарегистрировано: '. $user_login .'</p>';

        } else {

          $user_pass = wp_generate_password(16, false);
          

          $user_id = wp_insert_user(
            array(
              'user_email' => $user_email,
              'user_login' => $user_login,
              'user_pass'  => $user_pass,
              'user_url'   => $user_url,
              'first_name' => $user_first,
              'last_name'  => $user_last,
              'role'       => $role,
            )
          );
          
             echo 'готово1';
       
        }
        
        
        if(0){
          if(sanitize_text_field($_POST['s']) !== ''){

              $options = array(
                  'posts_per_page' => -1,
                  'suppress_filters' => false, // important!
                  'post_type' => 'post',
                  'post_status' => 'publish',
                  'orderby'     => 'title', 
                  'order'       => 'ASC'  
              );
              $keyword = sanitize_text_field($_POST['s']);

              add_filter( 'posts_where', function ($where) use ($keyword) {
                  global $wpdb;
                  $where .= ' AND ' . $wpdb->posts . '.post_title LIKE \'%' . esc_sql( like_escape( $keyword ) ) . '%\'';
                  return $where;
              });
              $posts = get_posts( $options );

                echo '<ul class="list open">';
                foreach( $posts as $post ){   ?>
                    <li><a href="<?php echo the_permalink($post); ?>"><?php echo get_the_title($post); ?></a></li>
                    <?php
                }
                echo '</ul>';
            }
        }
    
      }
        
      }
      die;
  }

add_action( 'wp_ajax_registration', 'registration_chang' );
add_action( 'wp_ajax_nopriv_registration', 'registration_chang' );

```

#### javascript

```javascript
document.addEventListener('DOMContentLoaded', function(){
    jQuery(document).ready( function($){
        let ajax_url = php_vars.ajax_url;
        let ajax_nonce = php_vars.nonce;

//        console.log('13');
      
      
        $(".form_submit").click(function(){
//
//         let username = $("input[name='username']").val();
//         let first_name = $("input[name='first_name']").val();
//         let last_name = $("input[name='last_name']").val();
//         let email = $("input[name='email']").val();
//         let password = $("input[name='password']").val();

            var error;
            var btn = $(this);
//            var ref = btn.closest('form').find('[required]');
            var msg = btn.closest('form').find('input, textarea');

              $.ajax({
                
//                action: 'registration_chang',
//                registration_nonce: ajax_nonce,

                  url : ajax_url,
                  type: 'POST',
                
                  data: msg,

//                  data: $("form").serialize(),

                  success: function(data) { //DONE success
                    console.log(data);
//                    document.getElementById(deletepostid).remove();
                  },
                  error: function(response) { // ERRROR
//                      document.getElementById(deletepostid).innerHTML = "error";
                  }
              });

          }); 
      

    })
})


```



```php
    <form method='POST' action='javascript:void(null);'>

     <input type="text" name="username" value="" placeholder="User Name">
     <input type="text" name="first_name" value="" placeholder="First name">
     <input type="text" name="last_name" value="" placeholder="Last name">
     <input type="mail" name="email" value="" placeholder="Email">
     <input type="password" name="password" value="" placeholder="Password">

     
     <input type="url" name="url"  value="" placeholder="url">
     
<!--     <input type="file" name="upload" accept="image/gif, image/jpeg, image/png, image/webp">-->
     
     <!-- delete_post_nonce -->
     <?php wp_nonce_field( 'registration', 'registration_nonce' ); ?>

     <input type="hidden" name="action" value="registration">
      
     <input type="submit" class="form_submit" value="Save">
    </form>
    
    

```

wp-ajax-nonce [Links](https://github.com/Fobiya/MD-MANUAL/tree/master/WordPress/wp-ajax-nonce/)