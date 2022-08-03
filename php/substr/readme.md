## substr

## mb_substr  russian
<!--![](../../img/three-column-flexbox.png)-->


#### php

```php
$rtitlett = get_the_title(); 
               
$tmt = substr($rtitlett, 0, 85 );
echo $tmt;

```

```php

// 300 символов обрезает 

echo substr( strip_tags($ejson['content']['rendered']), 0, 300);

$t = html_entity_decode($ejson['title']['rendered']);
$tm = substr($t, 0, 29);
echo $tm;
echo (strlen($tm)<strlen($t))?'...':''; 
                               
```

in WordPress
```php                          
                               
$substr = get_the_title(); 
$echotitle = substr($substr, 0, 30 ); echo $echotitle; echo (strlen($echotitle)<strlen($substr))?'...':'';
                                                                                                  
```
