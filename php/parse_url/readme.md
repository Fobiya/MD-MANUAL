## parse_url

#### parse_url
parse_url [link](https://www.php.net/manual/ru/function.parse-url.php)

```php

$url = 'http://username:password@hostname:9090/path?arg=value#anchor';

var_dump(parse_url($url));
var_dump(parse_url($url, PHP_URL_SCHEME));
var_dump(parse_url($url, PHP_URL_USER));
var_dump(parse_url($url, PHP_URL_PASS));
var_dump(parse_url($url, PHP_URL_HOST));
var_dump(parse_url($url, PHP_URL_PORT));
var_dump(parse_url($url, PHP_URL_PATH));
var_dump(parse_url($url, PHP_URL_QUERY));
var_dump(parse_url($url, PHP_URL_FRAGMENT));




$url = '//www.example.com/path?googleguy=googley';

// До 5.4.7 в path выводилось "//www.example.com/path"
var_dump(parse_url($url));

```

