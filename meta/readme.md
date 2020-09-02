## Tab Click JavaScript

<!--![](../../img/media.png)-->

#### JavaScript

```javascript

      
      "use strict";

        $("a[class*='tab_']").click(function(){
         $("[class*='tab_']").removeClass('menu_open');
        $(this).addClass('menu_open');
        });
        $("a.tab_1").click(function(){
         $("[class*='box_']").removeClass('open');
        $(".box_1").addClass('open');
        });

        $("a.tab_2").click(function(){
         $("[class*='box_']").removeClass('open');
        $(".box_2").addClass('open');
        });

        $("a.tab_3").click(function(){
         $("[class*='box_']").removeClass('open');
        $(".box_3").addClass('open');
        });

        $("a.tab_4").click(function(){
         $("[class*='box_']").removeClass('open');
        $(".box_4").addClass('open');
        });

        $("a.tab_5").click(function(){
         $("[class*='box_']").removeClass('open');
        $(".box_5").addClass('open');
        });




        $("[class*='calculators__tab__menu'] a").click(function(){
         $("[class*='calculators__tab__menu'] a").removeClass('active');
         $(this).addClass('active');

        //   $("[class*='calculators__tab__menu'] a span").removeClass('active');
          $(this).find("span").addClass('active');

          var activeAdd = $(this).data('minactive');
          $("[class*='calculators__tab__block']").removeClass('active');

          $("[class*='calculators__tab__block" + activeAdd + "']").addClass('active'); 

        });

      

```


#### HTML

```html

<div class="container calculators__tab__content">
        <div class="row calculators__tab__block1 active">
            <div class="col-xl-6 col-md-12 col-sm-12">
            <h2>Deal Size Calculator</h2>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, tempore.</p>
            </div>
            <div class="col-xl-6 col-md-12 col-sm-12">
                <div class="box__content">

                </div>
            </div>
        </div>

        <div class="row calculators__tab__block2">
            <div class="col-xl-6 col-md-12 col-sm-12">
            <h2>Pivot Calculator</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, tempore.</p>
            </div>
            <div class="col-xl-6 col-md-12 col-sm-12">
                <div class="box__content">

                </div>
            </div>
        </div>

        <div class="row calculators__tab__block3">
            <div class="col-xl-6 col-md-12 col-sm-12">
            <h2>Deal Size Calculator</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, tempore.</p>
            </div>
            <div class="col-xl-6 col-md-12 col-sm-12">
                <div class="box__content">

                </div>
            </div>
    </div>
</div>
</div>

```

codepen.io  [Links](https://codepen.io/fobiya/pen/xBwgeQ)