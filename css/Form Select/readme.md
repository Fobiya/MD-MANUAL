## Form Select last


<!--![](../../img/)-->

#### SCSS Style

```scss

// ===========================================================
// ALL INFORMATION
// ===========================================================

html {
  scroll-behavior: smooth;
}

* {
  &:active, &:focus {
    outline: 0;
    outline-offset: 0;
  }

  &::-webkit-input-placeholder, &:-moz-placeholder, &::-moz-placeholder, &:-ms-input-placeholder {
    opacity: 1;
  }

  box-sizing: border-box;

  &:before, &:after {
    box-sizing: border-box;
  }
}

* {
  &:before, &:after {
    pointer-events: none;
  }
}


input {
  &::-ms-clear, &::-ms-reveal {
    display: none;
    width: 0;
    height: 0;
  }
}

h1, h2, h3, h4, h5, h6 {
  margin: 0;
}

a {
  text-decoration: none;
}

ul, li {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

img {
  pointer-events: none;
}


img {
  max-width: 100%;
}

span {
  display: block;
  position: relative;
}

.overflow {
  overflow: hidden !important;
}

.cursor {
  cursor: pointer;
}

[class*="see"] {
  display: block;
}

.none {
  display: none !important;
}

a, button, select {
  outline: none !important;
}

.clearfix {
  &:after, &:before {
    display: table;
    content: " ";
  }

  &:after {
    clear: both;
  }
}

input {
  box-sizing: border-box;
}

textarea {
  box-sizing: border-box;
  resize: none;
}

button:hover {
  cursor: pointer;
}

a, button, input, textarea, i {
  text-decoration: none;
  outline: 0;
  border: 0;
  transition: all .4s ease !important;
}

a, button {
  cursor: pointer;
}

a:focus, button:focus, input:focus, textarea:focus {
  outline: 0;
}


// ===========================================================
// END ALL INFORMATION
// ===========================================================


.massage__form {
  z-index: 2147483000;
  margin-bottom: 50px;
  max-width: 300px;
  width: 100%;
  box-shadow: rgba(0, 0, 0, 0.16) 0px 5px 40px;
  border-radius: 8px;
  transition: all 0.3s ease;
  padding: 30px 25px;
  background: linear-gradient(#16054a 25%, #c8a6b4);
}

form {
  max-width: 100%;
  width: 100%;
  margin: 0;
}



[type=checkbox] {
  border-radius: 2px;
  box-shadow: 0px 0px 0px 1px rgba(70, 36, 159, 0.6);

  &.errore {
    box-shadow: 0px 0px 0px 1px red;
  }
}


input[type=checkbox] {
  cursor: pointer;

  &:checked {
    ~ label > .label {
      display: block;
    }

    + label:before {
      width: 20px;
      height: 20px;
      font-size: 35px;
      color: #000;
      position: absolute;
      left: 3px;
      top: -6px;
      cursor: pointer;
      width: 20px;
      height: 20px;
      font-size: 35px;
      color: #000;
      position: absolute;
      left: 3px;
      top: -6px;
      cursor: pointer;
      z-index: 11;
    }
  }
}


[type=checkbox] {
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
}

.form_input, .form_select {
  display: block;
  position: relative;
}

.form_input span.allert, form_select span.allert {
  text-align: right;
  top: -22px;
  position: absolute;
  float: right;
  right: 0;
  color: #ff0000;
  background: rgba(255, 255, 255, 0.9);
  padding: 1px 5px;
  margin-right: 1px;
}


[type=checkbox], [type=radio] {
  width: 20px;
  height: 20px;
  padding: 0 15px 0;
  background: #e3e3e3;
  font-size: 18px;
  margin-bottom: 0px;
  color: #7f7f7f;
  border: none;
  float: left;
  margin-right: 10px;
  margin-top: 2px;
}


.error, [type=checkbox].error ~ .checkbox-on:after, option.error {
  border: 1px solid #d70606 !important;
  box-shadow: inset 0 0 15px rgba(255, 0, 0, 0.24);
}

[type=checkbox].error ~ .allert {
  display: none;
}

// LABEL ===========================================================

label {
  &.margin-bottom {
    margin-bottom: 5px !important;
  }

  &.checkbox-on {
    cursor: pointer;
  }
}

label {
  position: relative;
  display: block;

  &:after {
    content: "";
    display: block;
    float: left;
    margin-right: 10px;
    margin-top: 1px;
    width: 20px;
    height: 20px;
    cursor: pointer;
    background: #fff;
    position: absolute;
    top: 0;
    left: 0;
    border: 1px solid rgba(70, 36, 159, 0.6);
    box-shadow: inset 4px 4px 20px rgba(0, 0, 0, 0.08);
    border-radius: 3px;
  }

  &.errore:after {
    content: "";
    display: block;
    float: left;
    margin-right: 10px;
    margin-top: 1px;
    width: 20px;
    height: 20px;
    cursor: pointer;
    background: #fff;
    position: absolute;
    top: 0;
    left: 0;
    border: 1px solid #ff0000;
    border-radius: 3px;
  }
}


// INPUT ===========================================================

input {
  margin-bottom: 20px;
  color: #000 !important;
  font-weight: 400;
	
  font-size: 16px;


  &::placeholder {
    text-shadow: 0 0 15px rgba(22, 5, 74, 0.51);
    transition: opacity 0.3s ease;
  }

  &:focus::placeholder {
    text-shadow: 0 0;
    color: #000 !important;
    transition: opacity 0.3s ease;
  }
}





input {
  border: none;
  border: 1px solid transparent;
  border-radius: 4px;
  display: block;
  width: 100%;
  height: 100%;
  max-height: 35px;
  padding: 11px 15px;
  background-color: #fff;
  background-image: transparent;
  transition: border-color ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;
  transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
  transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;
  box-sizing: border-box;
  outline: none;
}


// TEXTAREA ===========================================================

textarea {
  margin-bottom: 20px;
  width: 100%;
  margin: inline;
  height: 150px;
  padding: 16px 15px;
  background: #ffffff;
  border: 0px solid transparent;
  box-sizing: border-box;
  border-radius: 4px;
	
  font-size: 16px;
	

  &::placeholder {
    text-shadow: 0 0 15px rgba(22, 5, 74, 0.51);
    opacity: 1;
    transition: opacity 0.3s ease;
    vertical-align: bottom;
  }

  &:focus::placeholder {
    text-shadow: 0 0;
    color: #303030 !important;
    transition: opacity 0.3s ease;
  }
}


// SELECT ===========================================================

select {
  &::-ms-expand {
    /* for IE 11 */
    display: none;
  }
	
	  margin-bottom: 20px;
	  padding: 11px 15px;


		appearance: none;
		border: none;
		border: 0px solid transparent;


		border: none;
		border: 1px solid transparent;
		border-radius: 4px;
		display: block;
		width: 100%;
		height: 100%;


		background-color: #fff;
		background-image: transparent;
		transition: border-color ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;
		transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
		transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;
		box-sizing: border-box;
		outline: none;

  &:focus {
			border-radius: 4px 4px 0 0 ;
		border-bottom: 0px
			
			option{
				  background: #fff;
				}

  }
	
	&:active {

	}
	
	&:hover {
		color: #000;
		box-shadow: 0 0 10px #000;

	}


	& option {
  border: none;

  // width: 100%;
  // height: 100%;
  // max-height: 35px;
 
  // background-color: #c0c0c0;

  box-sizing: border-box;
  outline: none;



		box-sizing:border-box;
		overflow:hidden;
		white-space:nowrap;
  
	}

	& option:hover {
	
	}

	&:focus option {
		position:relative;
		// pointer-events:all;
		

	}
}



.box__price{
	    position: relative;
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
    color: #fff;
    font: 600 20px/1.3em Arial;
}

.box__price:after{
    content: "$";
    display: flex;
    margin-left: 5px;
}

```

#### In SCSS

Codepen [Links](https://codepen.io/fobiya/pen/GRrJdBV)