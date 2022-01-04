## ajax JavaScript send

<!--![](../../img/media.png)-->

#### HTML

```html
<a class="" href="javascript:;" data-rand="<?php  echo $randomnem;?>" data-img="<?php  echo $value;?>" data-info="images" onclick="deleteImagesUp(this)">
 
```

#### JavaScript

```javascript

      
function deleteImagesUp(em) {
 
//  console.log('deleteImagesUp');

  let randomnum = em.getAttribute("data-rand");
 
    jQuery.ajax({
        url: php_vars.ajax_url,
        type: "POST", //SEND
            data: {
                action : 'delete_img',
                object: em.getAttribute("data-info"),
                url: em.getAttribute("data-img"),
            },
        success: function(response) { //DONE success
          document.getElementById(randomnum).remove();
        },
        error: function(response) { // ERRROR
            document.getElementById(result_form).innerHTML = "error";
        }
    });
 
}

      

```





```javascript

var xhr = new XMLHttpRequest();
xhr.open('GET', 'myservice/username?id=some-unique-id');
xhr.onload = function() {
    if (xhr.status === 200) {
        alert('User\'s name is ' + xhr.responseText);
    }
    else {
        alert('Request failed.  Returned status of ' + xhr.status);
    }
};
xhr.send();
 

```



#### HTML

```html

<!-- beforebegin -->
<p>
<!-- afterbegin -->
foo
<!-- beforeend -->
</p>
<!-- afterend -->

```

атрибута data-* [Links](https://coderoad.ru/20030162/%D0%9F%D0%BE%D0%BB%D1%83%D1%87%D0%B5%D0%BD%D0%B8%D0%B5-%D0%B0%D1%82%D1%80%D0%B8%D0%B1%D1%83%D1%82%D0%B0-data-%D0%B4%D0%BB%D1%8F-%D1%81%D0%BE%D0%B1%D1%8B%D1%82%D0%B8%D1%8F-onclick-%D0%B4%D0%BB%D1%8F-%D1%8D%D0%BB%D0%B5%D0%BC%D0%B5%D0%BD%D1%82%D0%B0-html)
schoolsw3 [Links](https://schoolsw3.com/js/tryit.php?filename=tryjs_ajax_first)
JavaScript code [Links](https://stackoverflow.com/questions/33760520/how-can-i-get-the-values-of-data-attributes-in-javascript-code)
wp_send_json [Links](https://wp-kama.ru/function/wp_send_json)
