
## htaccess

<!--![](../../img/three-column-flexbox.png)-->


#### php

```php


// REDIRECT IN DOMEN 

RewriteBase /
RewriteCond %{HTTP_HOST} ^demo.com$ [NC]
RewriteRule ^(.*)$ / [R=301,L]

---------------------------------------------------------------------------

RewriteEngine On
RewriteCond %{HTTP_HOST} ^demo.com$ [NC]
RewriteRule ^(.*)$ http://demo.com/$1 [R=301,L]


# all link on site
RewriteEngine On
RewriteRule ^(.*)$ http://demo.com/ [R=301,L]

```

#### In htaccess link

htaccess-primery-redirektov/ [Links](https://www.imbf.org/seo-vebmaster/htaccess-primery-redirektov.html)
3-redirects/ [Links](https://misha.blog/htaccess/3-redirects.html)




