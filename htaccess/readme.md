
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


```php


// delete HTML 

RewriteBase /
RewriteRule (.*)\.html$ $1 [R=301,L]

---------------------------------------------------------------------------

  RewriteEngine On
  RewriteCond %{HTTP_HOST} ^heelsspain.com$ [OR]
  RewriteCond %{HTTP_HOST} ^heelsspain.com$
  RewriteRule (.*)$ http://demo/$1 [R=301,L]





RewriteBase /
RewriteCond %{HTTP_HOST} ^demo\.org$ [NC]
RewriteRule ^(.*)$ http://demo.org/ [L,R=301]



redirect in HTTPS ---------------------------------------------------------------------------


RewriteCond %{HTTPS} off
RewriteCond %{HTTP:X-Forwarded-Proto} !https
RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [R=301,L]


# Redirect 301 https://link.com  https://link1.com 

```

#### In htaccess link

htaccess-primery-redirektov/ [Links](https://www.imbf.org/seo-vebmaster/htaccess-primery-redirektov.html)
3-redirects/ [Links](https://misha.blog/htaccess/3-redirects.html)
15-vozmozhnostej-htaccess/ [Links](https://blog.promopult.ru/seo/15-vozmozhnostej-htaccess.html)




