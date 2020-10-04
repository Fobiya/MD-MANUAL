## Template Color

<!--![](../../img/)-->



`` get_field('name','option') ``


```php



<?php 
  
  $colorfff = get_field('--color-fff','option');
  $backgroundblack = get_field('--background-black','option');
  $backgroundblackcolor = get_field('--background-black-color','option');
  $footer = get_field('--footer','option');
  $cope = get_field('--copy','option');
  $menu = get_field('--menu','option');
  $info = get_field('--info','option');
  $grey = get_field('--grey','option');
  $widt = get_field('--widt','option');
  $blackcolor = get_field('--black-color','option');

?>

<style>
  
  :root {

    <?php if ( $colorfff ) { ?>
      --color-fff: <?php echo $colorfff; ?> !important;
    <?php } ?>
    <?php if ( $backgroundblack ) { ?>
      --background-black: <?php echo $backgroundblack; ?> !important;
    <?php } ?>
    <?php if ( $backgroundblackcolor ) { ?>
      --background-black-color: <?php echo $backgroundblackcolor; ?> !important;
    <?php } ?>
    <?php if ( $footer ) { ?>
      --footer: <?php echo $footer; ?> !important;
    <?php } ?>
    <?php if ( $cope ) { ?>
      --copy: <?php echo $cope; ?> !important;
    <?php } ?>
    <?php if ( $menu ) { ?>
      --menu: <?php echo $menu; ?> !important;
    <?php } ?>
    <?php if ( $info ) { ?>
      --info: <?php echo $info; ?> !important;
    <?php } ?>
    <?php if ( $grey ) { ?>
      --grey: <?php echo $grey; ?> !important;
    <?php } ?>
    <?php if ( $widt ) { ?>
      --widt: <?php echo $widt; ?> !important;
    <?php } ?>
    <?php if ( $blackcolor ) { ?>
      --black-color: <?php echo $blackcolor; ?> !important;
    <?php } ?>

  }
  
</style>


```

<!--#### In SCSS-->

<!--MD-MANUAL/scss/media/ [Links](https://github.com/Fobiya/MD-MANUAL/tree/master/scss/media)-->