## fancybox modal 


##### HTML


```html
   
   data-width="640" data-height="360" // this is width="640"px in modal and height="360"px
   
    <a data-fancybox="" data-src="#modal" href="javascript:;" class="bot_modal" data-fancybox data-width="640" data-height="360">Open Modal</a>
    <!-- //// MODAL //// --> 
    <div class="modal"  id="modal" style="display: none;">
        <div class="content_modal" >
            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui dicta minus molestiae vel beatae natus eveniet ratione temporibus aperiam harum alias officiis assumenda officia quibusdam deleniti eos cupiditate dolore doloribus!</h3> 
        </div>
    </div>

```


```JavaScript

document.addEventListener('DOMContentLoaded', function(){
    jQuery(document).ready( function($){

  $('[data-fancybox-close]').click();

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
    'height' : 575,

    'onComplete' : function(){
        $('#fancybox-content').css({height:'800px',width:'675px'});
    }
   });

  });
                                                         
});

// AutoFocus offf

  $('[data-fancybox]').fancybox({
    touch: false,
    autoFocus: false
  });


```

# add in wp

```php

  	wp_enqueue_style('fancybox', get_template_directory_uri() . '/css/jquery.fancybox.css');
	wp_enqueue_script('fansy-box', get_template_directory_uri() . '/js/jquery.fancybox.js', array('jquery'), null, true);

```


#### In CSS

fancybox docs [Links](https://fancyapps.com/fancybox/3/docs/#introduction)