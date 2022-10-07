## mousewheel

<!--![](../../img/media.png)-->

#### jQuery

```javascript



$(document).ready(function(){
    $('#foo').bind('mousewheel', function(e){
        if(e.originalEvent.wheelDelta /120 > 0) {
            console.log('scrolling up !');
        }
        else{
            console.log('scrolling down !');
        }
    });
});
      

$(window).bind('mousewheel DOMMouseScroll', function(event){
    if (event.originalEvent.wheelDelta > 0 || event.originalEvent.detail < 0) {
        // scroll up
    }
    else {
        // scroll down
    }
});



$(window).on('wheel', function(event){

  // deltaY obviously records vertical scroll, deltaX and deltaZ exist too.
  // this condition makes sure it's vertical scrolling that happened
  if(event.originalEvent.deltaY !== 0){

    if(event.originalEvent.deltaY < 0){
      // wheeled up
    }
    else {
      // wheeled down
    }
  }
});




var wheel = document.getElementById('wheel');

function report(ammout) {
    wheel.innerHTML = 'wheel ammout: ' + ammout;
}

function callback(event) {
    var normalized;
    if (event.wheelDelta) {
        normalized = (event.wheelDelta % 120 - 0) == -0 ? event.wheelDelta / 120 : event.wheelDelta / 12;
    } else {
        var rawAmmount = event.deltaY ? event.deltaY : event.detail;
        normalized = -(rawAmmount % 3 ? rawAmmount * 10 : rawAmmount / 3);
    }
    report(normalized);
}

var event = 'onwheel' in document ? 'wheel' : 'onmousewheel' in document ? 'mousewheel' : 'DOMMouseScroll';
window.addEventListener(event, callback);






knob.bind('mousewheel', function(e){  
 if(e.originalEvent.wheelDelta < 0) {
    moveKnob('down');
  } else {
    moveKnob('up');
 }
  return false;
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