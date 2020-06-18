## three column flexbox

![](../../img/three-column-flexbox.png)


#### Css Style

```css

// ===========================================================
// three column flexbox
// ===========================================================

    ul {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        width: 100%;
        position: relative;
    }

    ul li {
        padding-left: 30px;
        display: flex;
        flex-direction: column;
        flex-basis: 33.33333333%;
        width: 30%;
        position: relative;
    }

// ===========================================================
// END three column flexbox
// ===========================================================

```
