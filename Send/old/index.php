

          <form class="row" method="POST" action="javascript:void(null);">
             <!-- Hidden Required Fields -->
          <input type="hidden" name="project_name" value="Project Site">
          <input type="hidden" name="admin_email" value="demo@gmail.com">
          <input type="hidden" name="form_subject" value="Subject">

              <div class="col m12 s12 l6 xl6">
                <h5>name</h5>
                <div class="form_input"><span class="field">
                    <input class="name" type="text" name="name" required="" value="" placeholder=""></span></div>
              </div>
              <div class="col m12 s12 l6 xl6">
                <h5>phone</h5>
                <div class="form_input"><span class="field">
                    <input class="phone" type="tel" name="phone" required="" value="" placeholder=""></span></div>
              </div>
              <div class="col m12 s12 l6 xl6">
                <h5>email</h5>
                <div class="form_input"><span class="field">
                    <input class="mail" type="email" name="email" required="" value="" placeholder=""></span></div>
              </div>

              <div class="col m12 s12 l12 xl12">
                <button class="partnerrr" type="submit" name="send">Send</button>
              </div>
        </form>



<script>
$(document).ready(function() {
    $(function() {
        $(".partnerrr[name=send]").click(function() {
            $(":input.error").removeClass('error');
            $(".allert").remove();
            var error;
            var btn = $(this);
            var ref = btn.closest('form').find('[required]');
            var msg = btn.closest('form').find('input, textarea');
            var send_btn = btn.closest('form').find('.partnerrr[name=send]');


            $(ref).each(function() {
                if ($(this).val() == '') {
                    var errorfield = $(this);
                    $(this).addClass('error').parent('.field').append('<div class="allert"><span>Fill this field</span><i class="ion-android-warning"></i></div>');
                    error = 1;
                    $(":input.error:first").focus();
                    return;
                } else {
                    var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{1,20}\.)?[a-z]{1,20}$/i;
                    if ($(this).attr("type") == 'email') {
                        if (!pattern.test($(this).val())) {
                            $("[name=email]").val('');
                            $(this).addClass('error error_email').parent('.field').append('<div class="allert"><span> Need sign "@"</span><i class="ion-android-warning"></i></div>');
                            error = 1;
                            $(":input.error:first").focus();
                        }
                    }
                    var patterntel = /^()[+0-9]{7,30}/i;
                    if ($(this).attr("type") == 'tel') {
                        if (!patterntel.test($(this).val())) {
                            $("[name=phone]").val('');
                            $(this).addClass('error error_tel').parent('.field').append('<div class="allert"><span>РќРµРєРѕСЂРµРєС‚РЅС‹Р№ РЅРѕРјРµСЂ С‚РµР»РµС„РѕРЅР°</span><i class="ion-android-warning"></i></div>');
                            error = 1;
                            $(":input.error:first").focus();
                        }
                    }
                }
            });

            if (!(error == 1)) {
                $(send_btn).each(function() {
                    $(this).attr('disabled', true);
                });
                $(document).each(function() {
                    var form = $(this).closest('form'),
                        name = form.find('.name').val();
                    if ($(this).val() == '') {
                        $.ajax({
                            type: 'POST',
                            url: '/send__mail.php',
                            data: msg,



                            success: function() {


                                console.log(success);


                            },
                            response: status(response) {


                                  if (response.status >= 200 && response.status < 300) {
                                return Promise.resolve(response)
                              } else {
                                return Promise.reject(new Error(response.statusText))
                              }



                            },
                            error: function(xhr, str) {
                                alert('Р’РѕР·РЅРёРєР»Р° РѕС€РёР±РєР°: ' + xhr.responseCode);
                            }
                        })
                    } else {
                        $.ajax({
                            type: 'POST',
                             url: '/send__mail.php',
                            data: msg,
                            success: $.ajax({
                                type: 'POST',
                                data: msg,
                                statusCode: {
                                    0: function() {

                                     console.log(success);

                                    }
                                }
                            }),

               response: status(response) {


                                  if (response.status >= 200 && response.status < 300) {
                                return Promise.resolve(response)
                              } else {
                                return Promise.reject(new Error(response.statusText))
                              }



                            },
                            error: function(xhr, str) {
                                alert('Р’РѕР·РЅРёРєР»Р° РѕС€РёР±РєР°: ' + xhr.responseCode);
                            }
                        });
                    }
                });
            }
            return false;
        })
    });
});
</script>
