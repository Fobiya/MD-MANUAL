
##Syntax MD

* https://pandao.github.io/editor.md/en.html

* Last commit -  ``git commit -m '17.06.2020 14:30'``




### Table
```
section.name__1.section__
  .container
    .row
      .col.m4.s12.l5.xl6
```
### Link and Script
```
link(rel='stylesheet', href='css/style.css')

script(src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js')
```
### Picture
```
picture
  source(srcset='img/', media='(min-width: 801px)')
  source(srcset='img/', media='(max-width: 800px)')
  img.images(srcset='img/', alt='images_1')
  
```

### Fobiya WebPack build [Source code](https://github.com/Fobiya/coursecode) ![npm](https://badgen.net/npm/v/@babel/core) 

https://devhints.io/

#### Configuration Webpack
* compress css not url in file ``build/webpack.base.conf.js``  -  `` options: { sourceMap: true  /* , url: false  */ } ``


#### Plugins
* Slick-carousel  [Open link](https://github.com/kenwheeler/slick/)   
* Fancybox [Open link](https://github.com/fancyapps/fancybox)  
* Ionicons Framework [Open link](https://ionicons.com/v2/)  


##### SCSS @media table

*  `` @include wid(1200) { }``
*  `` @include wid(992-1199) { } ``
*  `` @include wid(991) { } ``
*  `` @include wid(601-991) { }``
*  `` @include wid(600) { }``

##### Copyright (c) 2020