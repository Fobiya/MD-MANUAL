## date();

<!--![](../../img/three-column-flexbox.png)-->


#### php

```php

// Предположим, что текущая дата March 10th, 2001, 5:16:18 pm

$today = date("F j, Y, g:i a");                 // March 10, 2001, 5:16 pm
$today = date("m.d.y");                         // 03.10.01
$today = date("j, n, Y");                       // 10, 3, 2001
$today = date("Ymd");                           // 20010310
$today = date('h-i-s, j-m-y, it is w Day z ');  // 05-16-17, 10-03-01, 1631 1618 6 Fripm01
$today = date('\i\t \i\s \t\h\e jS \d\a\y.');   // It is the 10th day.
$today = date("D M j G:i:s T Y");               // Sat Mar 10 15:16:08 MST 2001
$today = date('H:m:s \m \i\s\ \m\o\n\t\h');     // 17:03:17 m is month
$today = date("H:i:s");                         // 17:16:17


// вывод дня недели, например Wednesday
echo date("l");

// вывод даты в формате: Wednesday 15th of January 2003 05:51:38 AM
echo date("l dS of F Y h:i:s A");

// вывод: July 1, 2000 is on a Saturday
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));


echo date('d.m.Y'):
// 01.03.2015



/--------------------------------------------------------------------------------------/

add date +1
// +1 month
 // +1 day
 
  $clock = date("H:i");
  if( $clock > '1:45' || $clock < '13:45') {

      $one = date("d");
         $two = date("d",strtotime('+1 day'));
         $three = date("d",strtotime('+2 day'));
  }else{

         $one = date("d",strtotime('+1 day'));
         $two = date("d",strtotime('+2 day'));
         $three = date("d",strtotime('+3 day'));
  }


 echo $one,','; echo $two,','; echo $three; 

/--------------------------------------------------------------------------------------/

$arr = [
  'январь',
  'февраль',
  'март',
  'апрель',
  'май',
  'июнь',
  'июль',
  'август',
  'сентябрь',
  'октябрь',
  'ноябрь',
  'декабрь'
];

// Поскольку от 1 до 12, а в массиве, как мы знаем, отсчет идет от нуля (0 до 11),
// то вычитаем 1 чтоб правильно выбрать уже из нашего массива.

$month = date('n')-1;
echo $arr[$month].' '.date('d, Y');


```
