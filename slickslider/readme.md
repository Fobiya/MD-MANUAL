## Slick Slider

https://kenwheeler.github.io/slick/


##### slick slider 

```JavaScript



  $('.next__section').click(function() { 
    $box__slider__5.slick('slickNext');
  });
 
  $('.prev__section').click(function() {
    $box__slider__5.slick('slickPrev');
  });

  var $box__slider__5 = $('.box__slider__5');

  $box__slider__5.slick({
        arrows: false,
        dots: true,
        autoplay: true,
        speed: 500,
//        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        customPaging: function(slider, i) {
          // this example would render "tabs" with titles
          return '<span class="dot"></span>';
        },
        responsive: [{
           breakpoint: 9999999,
          settings: "unslick"
            },{
                breakpoint: 991,
                settings: {
                    arrows: false,
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
            {
                breakpoint: 950, 
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                }
            }
        ]
  //                customPaging: function(slider, i) {
  //      // this example would render "tabs" with titles
  //      return '<span class="dot"></span>';
  //    },
  });




    var slideCount = null;

    $box__slider__5.on('init', function(event, slick){
      slideCount = slick.slideCount;
      setSlideCount();
      setCurrentSlideNumber(slick.currentSlide);
    });

    $box__slider__5.on('beforeChange', function(event, slick, currentSlide, nextSlide){
      setCurrentSlideNumber(nextSlide);
    });

    function setSlideCount() {
      var $el = $('.slide-count-wrap').find('.gototal');
      $el.text(slideCount);
    }

    function setCurrentSlideNumber(currentSlide) {
      var $el = $('.slide-count-wrap').find('.current');
      $el.text(currentSlide + 1);
    } 






    $('.slider').on('afterChange', function(event, slick, currentSlide){
  		if (currentSlide == 1) {
	 		$('.anotherClass').addClass('addedClass');
  		}else {
  			$('.anotherClass').removeClass('addedClass');
  		};
	});



```





##### slick slider current  total


```html
   
  .slide-count-wrap
    span.current
    span.total

```

##### slick slider   REINIT

```JavaScript

   $('.box__slider__8').slick('refresh');

```




#####  slick slider  afterChange

```JavaScript

 $('.box__slider').on('afterChange', function(event, slick, currentSlide){
  		if (currentSlide == 0) {

  		}else if (currentSlide == 1) { 

  		}else if (currentSlide == 2) { 
	 		$('.overlay__box__news').removeClass('slider_1 slider_2 slider_3 slider_4 slider_5 slider_6');          
  			$('.overlay__box__news').addClass('slider_3');
  		};
	});
  
```



#####  slick slider  colback

```JavaScript

    .slick({
        slidesToShow: 1, // толкьо 1 слайд показывать одновременно
        slidesToScroll: 1, // по 1-му слайду проскролливать
        speed: 8000, // медленная смена слайдов - скорость бегущей строки
        autoplay: true, // устанавливаем автозапуск слайдера
        autoplaySpeed: 0, //делаем запуск мгновенный с загрузкой страницы
        cssEase: 'linear', // делаем анимацию однотонной при смене слайда
    });
  
```


##### slick slider click beforeChange click breakpoint

```JavaScript

$('.your-element').on('beforeChange', function(event, slick, currentSlide, nextSlide){
  console.log(nextSlide);
});


    $('#full__tuch').on('beforeChange',  function(event, slick) {

       $('ul.mobile li a').on('click', function() {



           var $mobile_data = $(this).data("mobile");

  //       console.log($mobile_data);

          $('ul.mobile li ').removeClass('select');


          $('ul.mobile').removeClass('select1 select2 select3 select4 select5 select6');

          $(this).parent().addClass('select'); 
          $(this).parent().parent().addClass('select'+ $mobile_data); 


            $(this).addClass('select'); 

        });  


  //    $('.my-gallery-image').on('click', function() {
  //        $(this).addClass('active');
  //    });
  });  

```

##### search    /?slick=17

```JavaScript

     if (window.location.search.indexOf("slick") > -1) {

          var getUrlParameter = function getUrlParameter(sParam) {
            var sPageURL = decodeURIComponent(window.location.search.substring(1)),
                sURLVariables = sPageURL.split('&'),
                sParameterName,
                i;

            for (i = 0; i < sURLVariables.length; i++) {
                sParameterName = sURLVariables[i].split('=');

                if (sParameterName[0] === sParam) {
                    return sParameterName[1] === undefined ? true : sParameterName[1];
                }
            }
        };
       
       var tech = getUrlParameter('slick');

       $('#full__tuch').slick('slickGoTo', tech);

       
     }


```