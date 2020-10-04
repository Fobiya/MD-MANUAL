## Send Meil

<!--![](../../img/media.png)-->

#### JavaScript

```javascript


$(function () {
    $("[name=send]").click(function () {

        $(":input.error").removeClass('error');
        $(".allert").remove();
        var error;
        var btn = $(this);
        var ref = btn.closest('form').find('[required]');
        var msg = btn.closest('form').find('input, textarea');
        var send_btn = btn.closest('form').find('[name=send]');

         $(ref).each(function() {
            if ($(this).val() == '') {
                var errorfield = $(this);
                $(this).addClass('error').parent('.field').append('<div class="allert none"><span>Заполните это поле</span><i class="fa fa-exclamation-circle" aria-hidden="true"></i></div>');
                error = 1;
                $(":input.error:first").focus();
                return;
            } else {
               var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{1,20}\.)?[a-z]{1,20}$/i;
                if ($(this).attr("type") == 'email') {
                    if(!pattern.test($(this).val())) {
                        $("[name=email]").val('');
                        $(this).addClass('error').parent('.field').append('<div class="allert none"><span>Укажите коректный e-mail</span><i class="fa fa-exclamation-circle" aria-hidden="true"></i></div>');
                        error = 1;
                        $(":input.error:first").focus();
                    }
                }
                var patterntel = /^()[0-9+]{12,12}$/i;
                if ( $(this).attr("type") == 'tel') {
                    if(!patterntel.test($(this).val())) {
                        $("[name=phone]").val('');
                        $(this).addClass('error').parent('.field').append('<div class="allert none"><span>Укажите коректный номер телефона</span><i class="fa fa-exclamation-circle" aria-hidden="true"></i></div>');
                        error = 1;
                        $(":input.error:first").focus();
                    }
                }
            }
        })


        if (!(error == 1)) {
            $(send_btn).each(function () {
                $(this).attr('disabled', true);
            });
            $(function () {
                var form = $(this).closest('form'),
					name = form.find('.name').val();
                if ($(this).val() == '') {
                    $.ajax({
                        type: 'POST',
						url: '<?php echo get_site_url();?>/send__mail.php',
						data: msg, success: function () {

                      $('form').trigger("reset");
                          
                          $.fancybox.close();
                          
                            setTimeout(function () {
                                $.fancybox.open({
                                src  : '#thenk_you',
                                type : 'inline',
                                opts : {
                                  afterShow : function( instance, current ) {
                                    console.info('done!');
                                  }
                                }
                              });

                            }, 1000);
              
//      
              $(this).disabled = 'disabled';
//              $.fancybox({ href: "#thenk_you" });

// 							  setTimeout(function () {
// 							 $(".fancybox-close-small").click();

// 								      }, 1500);



                        }, error: function (xhr, str) {
                            alert('Возникла ошибка: ' + xhr.responseCode);
                        }
                    });

//		-------------------------------------------------------------------					

                } else {
					
                    $.ajax({
                        type: 'POST',
                     	url: '<?php echo get_site_url();?>/send__mail.php',
                        data: msg,
                        success: $.ajax({
                            type: 'POST',

                            data: msg,


                            statusCode: {
                                0: function () {
                                  


                                    $('form').trigger("reset");
                                   $.fancybox.close();
                        
                                    setTimeout(function () {

                                   $.fancybox.open({
                                        src  : '#thenk_you',
                                        type : 'inline',
                                        opts : {
                                          afterShow : function( instance, current ) {
                                            console.info('done!');
                                          }
                                        }
                                      });
                                      
                                    }, 1000);
//                                  
//                                  
                                      $(this).disabled = 'disabled';
//                                  
//                                  $.fancybox({ href: "#thenk_you" });

                                }
                            }
                        }),
                        error: function (xhr, str) {
                            alert('Возникла ошибка: ' + xhr.responseCode);
                        }
                    });
		
//		-------------------------------------------------------------------

		

//		-------------------------------------------------------------------

                }
            });
        } ;


        return false;
    })
});
      

```


#### HTML

```html

  <form method="POST" action="javascript:void(null);">
    <!-- Hidden Required Fields-->

      <input type="hidden" name="project_name" value="PROJECT BEST">
      <input type="hidden" name="admin_email" value="ADMIN EMAIL">
      <input type="hidden" name="form_subject" value="TEM subject">

      <input hidden type="hidden" type="url" name="url" required="" value="<?php echo $actual_link; ?>"> 

      <div class="form_input"><span class="field">
      <input class="name" type="text" name="name" required="" value="" placeholder="Name"></span></div>

      <div class="form_input"><span class="field">
      <input class="mail" type="tel" name="tel" required="" value="" placeholder="Phone"></span></div>

      <button class="purpur-back b-mod" type="submit" name="send">SEND</button>

   </form>

```


#### PHP

```php

    $method = $_SERVER['REQUEST_METHOD'];

    //Script Foreach
    $c = true;
    if ( $method === 'POST' ) {

      $project_name = trim($_POST["project_name"]);
      $admin_email  = trim($_POST["admin_email"]);
      $form_subject = trim($_POST["form_subject"]);

      $server_email = ' DOMEN EMAIL ';

      $NAME = $_POST['name'];
      $PHONE = $_POST['phone'];
      $email = $_POST['email'];




      foreach ( $_POST as $key => $value ) {

        if ( $value != "" && $key != "project_name" && $key != "admin_email" && $key != "form_subject" && $key != "start_day" && $key != "campaign_token" ) {
          $message .= "
          " . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
          <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
          <td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
        </tr>
        ";

      }
    }
    } else if ( $method === 'GET' ) {



      $project_name = trim($_GET["project_name"]);
      $admin_email  = trim($_GET["admin_email"]);
      $form_subject = trim($_GET["form_subject"]);


      foreach ( $_GET as $key => $value ) {
        if ( $value != "" && $key != "project_name" && $key != "admin_email" && $key != "form_subject" ) {
          $message .= "
          " . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
          <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
          <td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
        </tr>
        ";

      }
    }
    }

    $message = "<table style='width: 100%;'>$message</table>";



    function adopt($text) {
      return '=?UTF-8?B?'.base64_encode($text).'?=';
    }

    $headers = "MIME-Version: 1.0" . PHP_EOL .
    "Content-Type: text/html; charset=utf-8" . PHP_EOL .

    'From:  <'.$server_email.'> '.adopt($project_name).'' . PHP_EOL .
    'Reply-To: '.$server_email . PHP_EOL;



    mail($admin_email, adopt($form_subject), $message, $headers );

```



<!--codepen.io  [Links](https://codepen.io/fobiya/pen/xBwgeQ)-->