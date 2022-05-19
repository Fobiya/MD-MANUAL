## CSS Grid


![](../../img/grid-two-column.png)


#### Sss Style

```css

    display: grid; 
    grid-template-columns: repeat(2, 1fr);  // 2 columns
    grid-template-rows: repeat(5, 1fr);     // 5 rows
    grid-auto-flow: column;


```



![](../../img/grid-two-column1.png)

#### Sss column liniar

```css
     ul{
       

      display: grid; 
      grid-auto-flow: row dense; 
      grid-auto-rows: 1fr; 
      grid-template-columns: 1fr 1fr 1fr 1fr;   // 4 columns
      grid-template-rows: 1fr 1fr 1fr 1fr 1fr;  // 5 rows
      gap: 15px 10px; 
      grid-template-areas: 
        ". . . ."
        ". . . ."
        ". . . ."
        ". . . ."
        ". . . ."; 

      li{
        position: relative;
        display: flex;
        
        a{
            color: #FFFFFF;
          
            letter-spacing: .001em;

            font: 400 14px/1.2em var(--l);
            opacity: .4;

            &:hover{
               opacity: 1;
            }
        }
      }
    }


```

#### Sss column 

```css
     ul{
       
      grid-auto-flow: column; 
       

      display: grid; 
/*      grid-auto-flow: row dense; */
      grid-auto-rows: 1fr; 
      grid-template-columns: 1fr 1fr 1fr 1fr;   // 4 columns
      grid-template-rows: 1fr 1fr 1fr 1fr 1fr;  // 5 rows
      gap: 15px 10px; 
      grid-template-areas: 
        ". . . ."
        ". . . ."
        ". . . ."
        ". . . ."
        ". . . ."; 

    }


```
