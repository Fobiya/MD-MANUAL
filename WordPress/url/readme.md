## Parsing URL 

<!--![](../../img/)-->

```php



$url = 'http://example.com/subdomain2323/product/123123/variable-text-goes-here';
$urlParts = parse_url($url);
$path = $urlParts['path'];
$subdomain = explode('/', $path);
echo $subdomain[2];    //где номер[2] каталога 

/-----------------------------------------------------------------------------------------------/

echo basename($_SERVER['REQUEST_URI']);
                  echo '<br>';
echo  $_SERVER['HTTP_HOST'];
                  echo '<br>';
echo  $_SERVER['SCRIPT_NAME'];
                    echo '<br>'; 

echo  $_SERVER['REQUEST_URI'];
if( $_SERVER['REQUEST_URI'] == '/blog/' ){

}


```


<!--vue-and-the-wordpress-rest-api [Links](http://bionicteaching.com/vue-and-the-wordpress-rest-api/)-->