## text-transform Rotate(-90deg)


```html

    <ul class="list">
        <li>
            <p class="title"><span>FTD</span>0-5</p>
            <span class="box">Raveshare 25%</span>
        </li>
        <li>
           <p class="title"><span>FTD</span>6-10</p>
            <span class="box">Raveshare 30%</span>
        </li>
        <li>
           <p class="title"><span>FTD</span>11-20</p>
            <span class="box">Raveshare 35%</span>    
        </li>
        <li>
           <p class="title"><span>FTD</span>21-40</p>
            <span class="box">Raveshare 40%</span>    
        </li>
        <li>
           <p class="title"><span>FTD</span>41-∞</p>
            <span class="box">Raveshare 45%</span>    
        </li>
    </ul>

```

#### Css Style

```css

@media screen and (max-width:991px) {
    .id_raveshare ul.list>li{
        position: relative;
    }
    
    
    .id_raveshare ul.list>li .title{
        margin-top: 0 !important;
      
        letter-spacing: 3px;
        -webkit-transform: rotate(270deg);
        -moz-transform: rotate(270deg);
        -ms-transform: rotate(270deg);
        -o-transform: rotate(270deg);
        transform: rotate(270deg);
        -webkit-transform-origin: 0 0;
        -moz-transform-origin: 0 0;
        -ms-transform-origin: 0 0;
        -o-transform-origin: 0 0;
        transform-origin: 0 0;
        bottom: 0;
        position: absolute;
        font-size: 12px;
        left: 5px;
        width: 100px;
    }
    .id_raveshare ul.list>li .box{
        -webkit-transform-origin: 0 0;
        -moz-transform-origin: 0 0;
        -ms-transform-origin: 0 0;
        -o-transform-origin: 0 0;
        transform-origin: 0 0;
        text-transform: uppercase;
        transform: rotate(-90deg);
        position: absolute;
        width: 146px !important;
        height: 30px !important;
        left: 45%;
        bottom: -30px;
    }
}

```
