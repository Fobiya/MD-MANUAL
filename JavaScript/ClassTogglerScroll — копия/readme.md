## cssClassTogglerScroll

<!--![](../../img/media.png)-->

#### JavaScript

```javascript

      
      "use strict";
          class cssClassTogglerScroll{
            constructor(elements, cssClass){
              let elementBounding;
              let elementHeight;
              const target = window;
              let targetHeight = window.innerHeight;
              
              for(let element of elements){
                target.addEventListener('scroll', function(){
                  targetHeight = window.innerHeight;
                  elementBounding = {
                    top:element.getBoundingClientRect().top,
                    bottom:element.getBoundingClientRect().bottom
                  };
                  elementHeight = element.offsetHeight;
                  if(elementBounding.top < targetHeight - (targetHeight - (targetHeight - 100)) && elementBounding.bottom > elementHeight - (elementHeight - 100)){
                    element.classList.add(cssClass);
                  }
                  else{
                    element.classList.remove(cssClass);
                  }
                });
              }
              
              for(let element of elements){
                elementBounding = {top:element.getBoundingClientRect().top, bottom:element.getBoundingClientRect().bottom};
                elementHeight = element.offsetHeight;
                if(elementBounding.top < targetHeight - (targetHeight - (targetHeight - 100)) && elementBounding.bottom > elementHeight - (elementHeight - 100)){
                  element.classList.add(cssClass);
                }
                else{
                  element.classList.remove(cssClass);
                }
              }
            }
          }

//      new cssClassTogglerScroll(document.querySelectorAll('h4'), 'typing');
      new cssClassTogglerScroll(document.querySelectorAll('.section_one h1 span'), 'bg-span');

      

```





```javascript

      
// =========================================================== 
// END cssClassTogglerScroll
// =========================================================== 

  class cssClassTogglerScroll{
  constructor(data){
    this.options = {
      root: null,
      rootMargin: "0px",
      threshold: data.threshold
    };

    this.observer = new IntersectionObserver((entries, observer)=>{
      entries.forEach((entry) => {
      if(entry.isIntersecting){
        if(data.cssClass){
          entry.target.classList.add(data.cssClass);
        }
        if(data.onVisible){
          data.onVisible();
        }
      }
      else{
        if(data.cssClass){
          entry.target.classList.remove(data.cssClass);
        }
        if(data.onHidden){
          data.onHidden();
        }
      }
    });

  }, this.options);
    this.observer.observe(data.element);

  }
}
//      let elementdiv = document.querySelector(".section__commissions");
//      
//        elementdiv.classList.add('my-class');
  
//  let i = 0;
for(let div of document.querySelectorAll('section.section__commissions')){
//  i++;
//  div.classList.add('div' + i);

  new cssClassTogglerScroll({
    element: div,
    cssClass: 'See',
    threshold: 0.1,
    onVisible: () => {
//      console.log('.div is visible');
//      
//        let elNum = document.querySelector('section.section__commissions');
//            elNum.classList.add('SEE');
      
          let savelin_4  = $('ul.list>li:nth-child(4)>.back').data('prosent');
      
       $('ul.list>li:nth-child(4)>.back').css('width', savelin_4+'%');
      
          let savelin_1  = $('ul.list>li:nth-child(1)>.back').data('prosent');
      
       $('ul.list>li:nth-child(1)>.back').css('width', savelin_1+'%');
      
      
          let savelin_2  = $('ul.list>li:nth-child(2)>.back').data('prosent');
      
       $('ul.list>li:nth-child(2)>.back').css('width', savelin_2+'%');
      
      
          let savelin_3  = $('ul.list>li:nth-child(3)>.back').data('prosent');
      
       $('ul.list>li:nth-child(3)>.back').css('width', savelin_3+'%');
      
          let savelin_5  = $('ul.list>li:nth-child(5)>.back').data('prosent');
      
       $('ul.list>li:nth-child(5)>.back').css('width', savelin_5+'%');
      
          let savelin_6  = $('ul.list>li:nth-child(6)>.back').data('prosent');
      
       $('ul.list>li:nth-child(6)>.back').css('width', savelin_6+'%');
      

      
      
    },
    onHidden: () => {
      console.log('.div is hidden');
      
        $('ul.list>li>.back').css('width','0%');
    }
  });

}

// =========================================================== 
// END cssClassTogglerScroll
// =========================================================== 

      

```



#### HTML

```html

    <section class="section__commissions">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l6 xl6">
            <ul class="list">
              <li><span class="back" data-prosent="25" style="width: 25%;"></span><span class="prsent">25%</span><span class="ftd">0-5</span></li>
              <li><span class="back" data-prosent="30" style="width: 30%;"></span><span class="prsent">30%</span><span class="ftd">6-10</span></li>
              <li><span class="back" data-prosent="35" style="width: 35%;"></span><span class="prsent">35%</span><span class="ftd">11-20</span></li>
              <li><span class="back" data-prosent="40" style="width: 40%;"></span><span class="prsent">40%</span><span class="ftd">21-40</span></li>
              <li><span class="back" data-prosent="45" style="width: 45%;"></span><span class="prsent">45%</span><span class="ftd">41-∞</span></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

```

cssClassToglerScroll [Links](https://github.com/Fobiya/cssClassToglerScroll)
codepen [Links](https://codepen.io/VladKvaskov/pen/YzKepBb)
codepen me [Links](https://codepen.io/fobiya/pen/ExgVNvY)
