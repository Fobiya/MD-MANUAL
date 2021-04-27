
## Email Send Html

https://sendpulse.com/ru/blog/html-coding-for-email

https://developers.google.com/gmail/design/css

https://www.sitepoint.com/tricks-building-responsive-email/

https://habr.com/ru/company/pechkin/blog/273677/

https://tedgoas.github.io/Cerberus/
https://tedgoas.github.io/Cerberus/
https://tedgoas.github.io/Cerberus/


https://webdesign.tutsplus.com/ru/articles/build-an-html-email-template-from-scratch--webdesign-12770


---

https://www.dyspatch.io/resources/templates/
https://playground.dyspatch.io/#/oxygen/new

#### php

```php
ss
<?php echo $_COOKIE['cookie']; ?>
    
<?php if (isset($_COOKIE['cookie'])){ ?> 

  <div class="avada-row box__alert">

      <div class="box__cocke" id="gdpr-modal-container">
          <p>Um die Webseite optimal gestalten und fortlaufend verbessern zu können, verwenden wir so genannte Cookies. Durch die weitere Nutzung der Webseite stimmen Sie der Verwendung von Cookies zu. <span>Weitere Informationen finden Sie in unseren Datenschutzbestimmungen.</span></p>
      </div>

  </div>
  
     <a href="#" id="intdsdsdsdsd" target="_blank" class="remove__cookie">remove__cookie</a>

<?php }else{ ?>
  
   <a href="#" id="intdsdsdsdsd" target="_blank" class="add__cookie">add__cookie</a>
  
<?php } ?>

```


#### HTML

```html



```



#### JavaScript

```javascript

 jQuery(document).ready(function($) { 
   
  $('.add__cookie').click(function(){
      document.cookie = "cookie=1; max-age=3600";
      location.reload();
  });
   
  $('.remove__cookie').click(function(){
      document.cookie = "cookie=1; max-age=0";
      location.reload();
  });
                                     
});


```
