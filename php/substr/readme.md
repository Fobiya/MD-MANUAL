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


### substr() not working to trim the_content() in wordpress widget

```php
<div class="wpex-recent-posts-content clr">
<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a><p>
<?php
    $content = the_content();
    echo substr($content,0,100);
?>
</p>
</div>

```

```php
$content = get_the_content();
$content = strip_tags($content);
echo substr($content, 0, 100);


```

substr-not-working-to-trim-the_content-in-wordpress-widget [Links](https://wp-qa.com/substr-not-working-to-trim-the_content-in-wordpress-widget)

