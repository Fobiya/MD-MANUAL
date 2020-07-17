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




<!--MD-MANUAL/css/media/ [Links](https://github.com/Fobiya/MD-MANUAL/tree/master/css/media)-->