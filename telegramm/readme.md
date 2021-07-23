
## telegram chat canal



#### Как получить chat id из канала telegram

```php

Подразумевается что у вас уже есть бот и вы получили его токен, а так же установлена утилита curl

Делаем канал публичным (можно после сделать приватным) и выполняем, изменив выделенное на своё:

curl https://api.telegram.org/botBOT:TOKEN/getChat?chat_id=@mychannelname

В ответ получите что-то типа:

{«ok»:true,»result»:{«id»:-100ХХХХХХХХХ8,»title»:………

Вот и искомый ID, использовать со знаком —

Проверить отправку сообщений в чат:

curl --header 'Content-Type: application/json' --request 'POST' --data '{"chat_id":"-100ХХХХХХХХХ8","text":"Проверка"}' "https://api.telegram.org/botBOT:TOKEN/sendMessage"



```


#### HTML

```html

  <form class="form" method="post" action="/send.php">
      <div class="form__item">
          <input class="form__input" type="text" name="name" required>
          <label class="form__label">Ваше имя</label>
      </div>
      <div class="form__item">
          <input class="form__input" type="text" name="phone" required>
          <label class="form__label">Номер телефона</label>
      </div>
      <input class="form__input btn" type="submit" value="Отправить">
      <input type="hidden" name="act" value="order">
  </form>

```


```php

<?php

//В переменную $token нужно вставить токен, который нам прислал @botFather
$token = "1947496480:AAFD7OA8DJ6o0kLns12CEzFUC9tz0x3RRps";

//Сюда вставляем chat_id
$chat_id = "-1001266090936";

//Определяем переменные для передачи данных из нашей формы
if ($_POST['act'] == 'order') {
    $name = ($_POST['name']);
    $phone = ($_POST['phone']);

//Собираем в массив то, что будет передаваться боту
    $arr = array(
        'Имя:' => $name,
        'Телефон:' => $phone
    );

//Настраиваем внешний вид сообщения в телеграме
    foreach($arr as $key => $value) {
        $txt .= "<b>".$key."</b> ".$value."%0A";
    };

//Передаем данные боту
    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

//Выводим сообщение об успешной отправке
    if ($sendToTelegram) {
        alert('Спасибо! Ваша заявка принята. Мы свяжемся с вами в ближайшее время.');
    }

//А здесь сообщение об ошибке при отправке
    else {
        alert('Что-то пошло не так. ПОпробуйте отправить форму ещё раз.');
    }
}

// https://api.telegram.org/bot1947412480:AAFD7OA8DJ56o0kLns12CEzFUC9tz0x3RRps/getChat?chat_id=@demkakanalle
//https://t.me/joinchat/TMITVr9SoAM3ZmMy
//You can use this token to access HTTP API:
//1947412480:AAFD7OA8DJ56o0kLns12CEzFUC9tz0x3RRps

//For a description of the Bot API, see this page: https://core.telegram.org/bots/api


```


#### JavaScript

```javascript

// jQuery(document).ready(function($) { 
//   
//  $('.add__cookie').click(function(){
//      document.cookie = "cookie=1; max-age=3600";
//      location.reload();
//  });
//   
//  $('.remove__cookie').click(function(){
//      document.cookie = "cookie=1; max-age=0";
//      location.reload();
//  });
//                                     
//});


```


https://vc.ru/dev/158136-kak-otpravlyat-zayavki-s-lendinga-pryamo-v-telegram
