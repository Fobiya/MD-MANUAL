## wp_trim_words - обрезать контент 

<!--![](../../img/)-->


```php

$content = get_the_content();
$trimmed_content = wp_trim_words( $content, 40, '<a href="'. get_permalink() .'"> ...Read More</a>' );
echo $trimmed_content;
    
    
$text = "«Познер» — еженедельная авторская программа Владимира Познера, которая выходит с ноября 2008 года в ночном эфире Первого канала.";

echo wp_trim_words( $text, 5, ' ...' );
     
      
```

wp_trim_words [Links](https://wp-kama.ru/function/wp_trim_words)


     
      
```


```php



```

<!--vue-and-the-wordpress-rest-api [Links](http://bionicteaching.com/vue-and-the-wordpress-rest-api/)-->
