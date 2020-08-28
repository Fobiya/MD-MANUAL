## wp-config

![](https://kinsta.com/wp-content/uploads/2019/06/file-type-not-permitted-security-reasons-wordpress-4.png)


`` ``

### How to Fix “Sorry, This File Type Is Not Permitted for Security Reasons” Error in WordPress


##### In file wp-config.php

Then, while editing the wp-config.php file, add the following code snippet above the /* That’s all, stop editing! Happy blogging. */ line:

```php


define('ALLOW_UNFILTERED_UPLOADS', true);


```


“Sorry, This File Type Is Not Permitted for Security Reasons” [Links](https://kinsta.com/knowledgebase/sorry-this-file-type-is-not-permitted-for-security-reasons//)