## Menu JavaScript

<!--![](../../img/media.png)-->

#### JavaScript

```javascript


    $(function() {
        $('.anim-button').click(function() {
            $('.box__menu').addClass('open');
        });
    });

    $(document).mouseup(function(e) { // web document click event
        var div = $(".box__menu"); // here we specify the ID of the element
        if (!div.is(e.target) // if the click was not on our block
            &&
            div.has(e.target).length === 0) { // and not by its children
            $(".box__menu").removeClass("open");
        }
    });

      

```


#### HTML

```html

<a href="#" class="anim-button">OPEN<a>



<div class="box__menu">
      <a href="">
             logo
      </a>
      <div class="site-navigation__menu">
                <nav class="site-menu"><ul id="menu-global-menu" class="menu"><li><a>ABOUT</a>
<ul class="sub-menu">
	<li ><a href="#">Meet Us</a></li>
	<li ><a href="#">Customer Care</a></li>
	<li ><a href="#">FAQ</a></li>
	<li ><a href="#">Contact Us</a></li>
</ul>
<i class="icone ion-plus"></i></li>
<li ><a href="#"><a>TRADE</a>
<ul class="sub-menu">
	<li ><a href="#">Trading Accounts</a></li>
	<li ><a href="#">Deposit Methods</a></li>
</ul>
<i class="icone ion-plus"></i></li>
<li ><a href="#"><a>PLATFORMS</a>
<ul class="sub-menu">
	<li ><a href="#">MT4</a></li>
	<li ><a href="#">Margin Elite Trader</a></li>
</ul>
<i class="icone ion-plus"></i></li>
<li ><a href="#"><a>EDUCATION</a>
<ul class="sub-menu">
<li ><a href="#">eBook</a></li>
	<li ><a href="#">Trading Videos</a></li>
<li ><a href="#">Trading Webinars</a></li>
</ul>
<i class="icone ion-plus"></i></li>
<li ><a href="#"><a>TRADING ANALYSIS</a>
<ul class="sub-menu">
	<li ><a href="#">Trading Calculators</a></li>
<li ><a href="#">Market News</a></li>
	<li ><a href="#">Economic Calendar</a></li>
 <li ><a href="#">Chart Analysis</a></li>
</ul>
<i class="icone ion-plus"></i></li>
<li ><a href="#">AFFILIATES</a></li>
<li ><a href="#">LEGAL</a></li>
<li ><a href="#">LICENSE</a></li>
</ul></nav>      </div>
    </div>

```


```css


/* ===========================================================Â  BOX MENU  */
.box__menu {
  background: #fff;
  position: fixed;
  left: 100%;
  width: 100%;
  max-width: 300px;
  height: 100%;
  z-index: 999;
  -webkit-transition: 0.4s;
  -o-transition: 0.4s;
  transition: 0.4s;
  display: block;
  will-change: transform;
  overflow-y: auto;
}
.box__menu.open {
  -webkit-transform: translateX(-100%);
  -ms-transform: translateX(-100%);
  transform: translateX(-100%);
  -webkit-box-shadow: 10px 0 15px 0 rgba(0, 0, 0, 0.15);
  box-shadow: 10px 0 15px 0 rgba(0, 0, 0, 0.15);
}
.box__menu a {
  color: #000;
  padding: 15px 30px;
  display: block;
  /*white-space: nowrap;*/
  border-bottom: 1px solid #e8e8e8;
}
.box__menu a img {
  max-width: 50px;
}
.box__menu .current-menu-item > a:after {
  /* color: white; */
}
.box__menu .current-menu-parent > a, .box__menu .current-menu-item > a {
  position: relative;
  background: #e0e0e0;
}
.box__menu #menu-global-menu li {
  position: relative;
}
.box__menu #menu-global-menu .ion-plus:before, .box__menu #menu-global-menu .ion-minus:before {
  position: absolute;
  right: 20px;
  top: 24px;
  font-size: 16px;
}
.box__menu #menu-global-menu > li > .sub-menu {
  overflow: hidden;
  opacity: 0;
  height: 0;
  padding-left: 0px;
}
.box__menu #menu-global-menu > li > .sub-menu.open {
  overflow: visible;
  opacity: 1;
  height: auto;
}
.box__menu #menu-global-menu > li > .sub-menu.open > li {
  padding-left: 20px;
  transition: all 1.1s ease;
}
.box__menu #menu-global-menu > li > .sub-menu > li {
  padding-left: 0px;
  transition: all 1.1s ease;
}

/* END ===========================================================Â  BOX MENU  */


```

```scss


.box__menu {
  background: #fff;
  position: fixed;
  left: 100%;
  width: 100%;
  max-width: 300px;
  height: 100%;
  z-index: 999;
  -webkit-transition: .4s;
  -o-transition: .4s;
  transition: .4s;
  display: block;
  will-change: transform;
  overflow-y: auto;

  &.open {
    -webkit-transform: translateX(-100%);
    -ms-transform: translateX(-100%);
    transform: translateX(-100%);
    -webkit-box-shadow: 10px 0 15px 0 rgba(0, 0, 0, 0.15);
    box-shadow: 10px 0 15px 0 rgba(0, 0, 0, 0.15);
  }

  a {
    color: #000;
    padding: 15px 30px;
    display: block;

    /*white-space: nowrap;*/
    border-bottom: 1px solid #e8e8e8;

    img {
      max-width: 50px;
    }
  }

  .current-menu-item > a:after {
    /* color: white; */
  }

  .current-menu-parent > a, .current-menu-item > a {
    position: relative;
    background: #e0e0e0;
  }

  #menu-global-menu {
    li {
      position: relative;
    }

    .ion-plus:before, .ion-minus:before {
      position: absolute;
      right: 20px;
      top: 24px;
      font-size: 16px;
    }

    > li > .sub-menu {
      overflow: hidden;
      opacity: 0;
      height: 0;
      padding-left: 0px;

      &.open {
        overflow: visible;
        opacity: 1;
        height: auto;

        > li {
          padding-left: 20px;
          transition: all 1.1s ease;
        }
      }

      > li {
        padding-left: 0px;
        transition: all 1.1s ease;
      }
    }
  }
}


```


codepen.io Menu [Links](https://codepen.io/fobiya/pen/jOEbMeM)