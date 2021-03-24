## Form Select last

<!--![](../../img/media.png)-->

#### JavaScript

```javascript


$('select.fanumber').on("change",function(){
    var dataid = $("select.fanumber option:selected").attr('data-num');
    var datawork = $("select.faworking option:selected").attr('data-work');
	var sumnow =  datawork * dataid;

    $('.box__price').text(sumnow);
	$(':selected', $(this)).data('num');
	console.log(sumnow);
});


      

```


#### HTML

```html

<form method="POST" action="javascript:void(null);">
    <!-- Hidden Required Fields-->
    <input type="hidden" name="name_pack" value="Family">
    <div class="form_input"><span class="field">
        <input class="name" type="text" name="firstname" required="" value="" placeholder="First name"></span></div>
  
    <div class="form_input"><span class="field">
        <input class="name" type="text" name="lastname" required="" value="" placeholder="Last name"></span></div>
  
    <div class="form_select"><span class="field">
        <select class="fanumber" name="number-of-keys">
          <option value="-" selected="true" disabled="disabled">Number of keys</option>
          <option value="1" data-num="1">1</option>
          <option value="2" data-num="2">2</option>
          <option value="3" data-num="3">3</option>
          <option value="4" data-num="4">4</option>
          <option value="5" data-num="5">5</option>
          <option value="6" data-num="6">6</option>
          <option value="7" data-num="7">7</option>
          <option value="8" data-num="8">8</option>
          <option value="9" data-num="9">9</option>
          <option value="10" data-num="10">10</option>
        </select></span></div>
  
    <div class="form_select"><span class="field">
        <select class="faworking" name="working">
          <option value="1" data-work="1" selected="true" disabled="disabled">Working hours</option>
          <option value="1" data-work="1">1 month</option>
          <option value="2" data-work="2">2 month</option>
          <option value="3" data-work="3">3 month</option>
          <option value="4" data-work="4">4 month</option>
          <option value="5" data-work="5">5 month</option>
          <option value="6" data-work="6">6 month</option>
          <option value="7" data-work="7">7 month</option>
          <option value="8" data-work="8">8 month</option>
          <option value="9" data-work="9">9 month</option>
          <option value="10" data-work="10">10 month</option>
          <option value="11" data-work="11">11 month</option>
          <option value="12" data-work="12">12 month</option>
        </select></span></div>
  
    <div class="form_input"><span class="field">
        <input class="mail" type="email" name="email" required="" value="" placeholder="Your Email"></span></div>
  
    <div class="box__price">10</div>
  
    <button class="send" type="submit" name="send">SEND</button>
  
  </form>

```

Codepen [Links](https://codepen.io/fobiya/pen/GRrJdBV)