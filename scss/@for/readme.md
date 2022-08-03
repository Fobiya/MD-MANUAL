## @for SCSS

![](../../img/@for.png)


#### Scss Style

```scss

    @for $i from 1 through 20 {
      li:nth-child(#{$i}) {
        margin-left: calc(#{$i}px*25);
      }
    }


```
https://sass-lang.com/documentation/at-rules/control/for [Links](https://sass-lang.com/documentation/at-rules/control/for)
