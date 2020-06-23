## @mixin @media responsive  

![](../../img/media.png)

```scss

// ===========================================================
// Media
// ===========================================================

    @mixin wid($size) {
      @if $size == 1200 {
        @media (min-width: 1200px) { @content; }
      } @else if $size == 992-1199 {
        @media (min-width: 992px) and (max-width: 1199px) { @content; }
      } @else if $size == 992{
        @media (min-width: 992px) { @content; }
      } @else if $size == 991 {
        @media (max-width: 991px) { @content; }
      } @else if $size == 601-991 {
        @media (min-width: 601px) and (max-width: 991px) { @content; }
      } @else if $size == 600 {
        @media (max-width: 600px) { @content; }
      }@else if $size == 500 {
        @media (max-width: 500px) { @content; }
      }@else if $size == 450 {
        @media (max-width: 450px) { @content; }
      }@else if $size == 400 {
        @media (max-width: 400px) { @content; }
      }@else if $size == 350 {
        @media (max-width: 350px) { @content; }
      }
    }

    //@include wid(1200) {   }
    //@include wid(992-1199) {   }
    //@include wid(601-991) {   }
    //@include wid(600) {   }

// ===========================================================
// END Media
// ===========================================================

```


#### In CSS

MD-MANUAL/css/media/ [Links](https://github.com/Fobiya/MD-MANUAL/tree/master/css/media)