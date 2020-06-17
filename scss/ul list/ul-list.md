## List Style

![](../../img/ul-list.png)


#### Scss Style

```scss

// ===========================================================
// Before and After
// ===========================================================

    %bef-aft{
      content: '';
      display: block;
      width: inherit;
      height: inherit;
      position: relative;
    }

    // @extend %bef-aft;

// ===========================================================
// END Before and After
// ===========================================================

// ===========================================================
// ul list
// ===========================================================

    ul.list {
      position: relative;
      li {
        padding-left: 30px;
        position: relative;
        p {
          color: #7d7d7d;
        }

        &:before {
          margin-top: 8px;
          @extend %bef-aft;
          position: absolute;
          width: 10px;
          height: 8px;
          background:  url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAIAgMAAAC9lIYlAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAADFBMVEX/xSf/xSf/xSf////39uGQAAAAAnRSTlMA/iyWEiMAAAABYktHRAMRDEzyAAAAKElEQVQI12NgYFBgYGBYwMDA2MDgwMrAkCDCwKAxgYGBq4GBgYmBAQA0bAM/erXIRAAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wNS0wNlQxMToxMTowMyswMDowMD66FDwAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDUtMDZUMTE6MTE6MDMrMDA6MDBP56yAAAAAAElFTkSuQmCCQg==) no-repeat top center;
          position: absolute;
          left: 0;
        }
      }
    }

// ===========================================================
// END ul list
// ===========================================================

```

#### PUG Structure

```html

  ul.list
    li
      p Lorem ipsum dolor.
    li
      p Lorem ipsum dolor.
    li
      p Lorem ipsum dolor.
    li
      p Lorem ipsum dolor.

```