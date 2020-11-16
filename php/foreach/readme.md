## foreach

#### php

```php

    <?php $count = 1; ?>              
    <!-- Some markup -->
    <?php foreach($our_privileges_list as $single):?>

        <div class="grid-col__2-12">
            <div class="privileges-icon pi__<?=$count?> wow rotateIn" data-wow-delay="<?=$count*0.25?>s" data-wow-duration=".5s"></div>
            <div class="privileges-title wow fadeInLeft" data-wow-delay="<?=$count*0.25?>s" data-wow-duration=".75s"><?=$single['text'] ?></div>
        </div>

    <?php $count++; endforeach;?>

```
