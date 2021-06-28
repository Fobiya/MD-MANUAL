## .SVG


### CSS


```css
        
      &>svg{
        margin-left: 5px;
        position: relative;
        margin-bottom: -2px;
        transition: all 1.7s ease;
        path{
        fill:#FF4848; 

        }
      }
        
      &:before{
         z-index: 1;
         @extend %bef-aft;
         content: url('data:image/svg+xml;charset=UTF-8,<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="1" y="1" width="62" height="62" rx="12" stroke="url(#paint0_diamond)" stroke-width="2" stroke-linecap="round"/><defs><radialGradient id="paint0_diamond" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(13.77 -11.9785) rotate(60.3924) scale(89.1301 290.305)"><stop stop-color="#FEDA75"/><stop offset="0.239583" stop-color="#FA7E1E"/><stop offset="0.494792" stop-color="#D62976"/><stop offset="0.765625" stop-color="#962FBF"/><stop offset="1" stop-color="#4F5BD5"/></radialGradient></defs></svg>');
         height: 64px;
         width: 64px;
      }


```





#### In CSS

fancybox docs [Links](https://fancyapps.com/fancybox/3/docs/#introduction)