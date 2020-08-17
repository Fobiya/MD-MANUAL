
## htaccess

<!--![](../../img/three-column-flexbox.png)-->


#### php

```php

RewriteEngine On
RewriteCond %{HTTP_HOST} ^demo.com$ [NC]
RewriteRule ^(.*)$ http://demo.com/$1 [R=301,L]


# all link on site
RewriteEngine On
RewriteRule ^(.*)$ http://demo.com/ [R=301,L]

```



