## wp-json

<!--![](../../img/)-->


`` ``

 ``?_embed``  - // echo list img and list topic


```php

/wp-json/wp/v2/blog/33393?&_embed

wp-json/wp/v2/blog/?_embed&per_page=24&page=1




http://domennn/wp-json/wp/v2/blog?_embed&categories=16


blog?_embed=true


https://bionicteaching.com/vue-and-the-wordpress-rest-api/
https://codepen.io/twwoodward/pen/KNJgep


https://www.taniarascia.com/how-to-use-json-data-with-php-or-javascript/



$url = 'data.json'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data); // decode the JSON feed

echo $characters[0]->name;

foreach ($characters as $character) {
	echo $character->name . '<br>';
}




$json=file_get_contents('wp-json/wp/v2/blog/');
// header('Content-Type: application/json');

$json=json_decode($json,true);
//print_r($json[0]['title']['rendered']);
echo "<br>";
print_r($json[0]['link']);
echo "<br>";



```


vue-and-the-wordpress-rest-api [Links](http://bionicteaching.com/vue-and-the-wordpress-rest-api/)