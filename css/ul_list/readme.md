## List Style

![](../../img/ul-list.png)

#### Css Style

```css
ul.list {
    position: relative
}

ul.list li {
    padding-left: 30px
}

ul.list li p {
    color: #7d7d7d;
}

ul.list li:before {
    margin-top: 8px;
    width: 10px;
    height: 8px;
    background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAIAgMAAAC9lIYlAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAADFBMVEX/xSf/xSf/xSf////39uGQAAAAAnRSTlMA/iyWEiMAAAABYktHRAMRDEzyAAAAKElEQVQI12NgYFBgYGBYwMDA2MDgwMrAkCDCwKAxgYGBq4GBgYmBAQA0bAM/erXIRAAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wNS0wNlQxMToxMTowMyswMDowMD66FDwAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDUtMDZUMTE6MTE6MDMrMDA6MDBP56yAAAAAAElFTkSuQmCCQg==) no-repeat top;
    position: absolute;
    left: 0
}
```

#### Html Structure


```html

<ul class='list'>
  <li><p>Lorem ipsum dolor.</p></li>
  <li><p>Lorem ipsum dolor.</p></li>
  <li><p>Lorem ipsum dolor.</p></li>
  <li><p>Lorem ipsum dolor.</p></li>
</ul>

```

#### ol list


![](../../img/ol-list.png)

#### Css Style

```css


li {
  position: relative;
  list-style-type: none;
  padding-left: 20px;

  color: #484848;
  color: #484848;
  font-weight: 100;

  font-family: Roboto;
  font-size: 16px;
}

/* Убираем исходную нумерацию у списка */
ol {
  counter-reset: list1;
}
ol li:before {
    color: #0b98cd;
  font-weight: 100;
  
  position: absolute;
  left:0;
  
  text-align: center;
  counter-increment: list1;
  /* Увеличиваем значение счетчика */
  content: counter(list1) " ";
  /* Выводим число */
}
ol ol {
  counter-reset: list2;
}
ol ol li {
   padding-left: 30px; 
}
ol ol li:before {
    color: #0b98cd;
  font-weight: 100;
  
  counter-increment: list2;
  /* Увеличиваем значение счетчика вложенного списка */
  content: counter(list1) "." counter(list2) ". ";
  /* Выводим число */
}

.back_border ol li a{
   color: #0b98cd;
  border-bottom: 1px solid #0b98cd;
  
}
.back_border ol li a{
    color: #484848;
                            
        font-family: Roboto;
font-size: 16px;
}

/* Инициируем счетчик */
/* Инициируем счетчик вложенного списка */

```




```html

  <ol>
   <li>Lorem ipsum dolor sit amet.
    <ol>
     <li>Lorem ipsum dolor sit amet.</li>
     <li>Lorem ipsum dolor sit amet.</li>
     <li>Lorem ipsum dolor sit amet.</li>
    </ol>
   </li>
   <li>Lorem ipsum dolor sit amet.
    <ol>
     <li>Lorem ipsum dolor sit amet.</li>
     <li>Lorem ipsum dolor sit amet.</li>
    </ol>
   </li>
  </ol>

```
