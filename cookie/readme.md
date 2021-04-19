
## Cookie javascript



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
