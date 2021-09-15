## Slick Slider

https://kenwheeler.github.io/slick/


##### JavaScript

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



```

##### HTML


```html
   
  .slide-count-wrap
    span.current
    span.total

```

##### slick REINIT

```JavaScript

   $('.box__slider__8').slick('refresh');

```