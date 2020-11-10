## New Send mail 

<!--![](../../img/)-->

#### Send to Email


```html


    <form method="POST" action="javascript:void(null);">

         <!-- Hidden Required Fields -->
      <input type="hidden" name="project_name" value="project_name"> 
      <input type="hidden" name="form_subject" value="form_subject">


        <div class="form_input form-group">
            <span class="field">
                <input type="text" name="name" id="name" placeholder="Name*" required> 
            </span>
        </div>


        <div class="form_input form-group">
            <span class="field">
              <input type="email" id="email" placeholder="Email*" name="email" required>
            </span>
        </div>


        <div class="form-group">
            <!-- Message Field -->
            <textarea id="message" name="message" placeholder="Message*" required></textarea>
            <!-- Submit Button -->
            <button class="send button" type="submit" name="send">SEND MESSAGE</button>
            <!-- Success Message -->

        </div>
    </form>

```


```JavaScript


    $(document).ready(function() {

      function validateForm($form) {
        // TODO PLACE VALIDATOR HERE

        //$form.find('input, textarea');
          return true;
      }      
        
      $("[name=send]").click(function() { 

            $(":input.error").removeClass('error');
            $(".allert").remove();
            var error;
            var btn = $(this);
            var ref = btn.closest('form').find('[required]');
            var msg = btn.closest('form').find('input, textarea');
            var send_btn = btn.closest('form').find('.send[name=send]');
          
            $(ref).each(function() {
                if ($(this).val() == '') {
                    var errorfield = $(this);
                    $(this).addClass('error').parent('.field')/*.append('<div class="allert"><span>Fill this field1</span><i class="ion-android-warning"></i></div>')*/;
                    error = 1;
                    $(":input.error:first").focus();
                    return;
                } else {
                    var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{1,20}\.)?[a-z]{1,20}$/i;
                    if ($(this).attr("type") == 'email') {
                        if (!pattern.test($(this).val())) {
                            $("[name=email]").val('');
                            $(this).addClass('error').parent('.field')/*.append('<div class="allert"><span> Need sign "@"</span><i class="ion-android-warning"></i></div>')*/;
                            error = 1;
                            $(":input.error:first").focus();
                        }
                    }
                    var patterntel = /^()[+0-9]{7,30}/i;
                    if ($(this).attr("type") == 'tel') {
                        if (!patterntel.test($(this).val())) {
                            $("[name=phone]").val('');
                            $(this).addClass('error').parent('.field')/*.append('<div class="allert"><span>РќРµРєРѕСЂРµРєС‚РЅС‹Р№ РЅРѕРјРµСЂ С‚РµР»РµС„РѕРЅР°</span><i class="ion-android-warning"></i></div>')*/;
                            error = 1;
                            $(":input.error:first").focus();
                        }
                    }
                }
            });
        
        
          if (!(error == 1)) {

            $("#sendform").submit(function(e){
              e.preventDefault();

              if (validateForm($(this)))  {
                // TODO BLOCK FORM

                $.ajax({
                  url: 'mail.php',
                  method: 'post',
                  dataType:'json',
                  data:$(this).serialize(),
                  success: function(data) {
                    // TODO OUTPUT MODAL, UNBLOCK FORM
                    // console.log(data);
                      
                      $.fancybox.open({
                        src  : '#modal',
                        type : 'inline',
                        'autoScale' : false,
                        'padding' :0,
                         opts : {
                            afterShow : function( instance, current ) {
                                console.info( 'done!' );
                            }
                        },
                        'width' : 800,
                        'height' : 355,
                       });
                      
                       $('[name=send]').prop('disabled', 'false');
                      
                       $('form').trigger("reset");
                      
                  },
                  error: function(err) {
                    // TODO UNBLOCK FORM
                    // console.error(err);
                  }

                });  

              }
            });

         }

    });  

});

```
<!--vue-and-the-wordpress-rest-api [Links](http://bionicteaching.com/vue-and-the-wordpress-rest-api/)-->