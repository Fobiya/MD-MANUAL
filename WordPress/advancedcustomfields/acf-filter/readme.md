# ACF FILLTER

<!--![](../../../img/taxonomy.png)-->


https://metabox.io/filter-posts-custom-fields-custom-taxonomies-archive-pages/

https://www.advancedcustomfields.com/resources/creating-wp-archive-custom-field-filter/

https://www.advancedcustomfields.com/resources/query-posts-custom-fields/

https://www.advancedcustomfields.com/resources/checkbox/


#IN WP_Query

```php

    $args = array(
        'post_status' => 'publish',
        'post_type' => 'product',
        'paged' => get_query_var('paged') ?: 1,
        'posts_per_page' => 20,

          'meta_query' => array(
            array(
                'key'     => 'name-fild',
                'value'   => $_GET['name-fild'],
                'compare' => 'LIKE'
            )
        )

    );


```

#IN output


```php

      
<div id="archive-filters" class="box__filter_block product_grid">
 
  <div class="filter" data-filter="weapon">
  
      <h3> <?php echo $_GET['weapon']; ?></h3> 
  </div>
        
<?php foreach( $GLOBALS['my_query_filters'] as $key => $name ): 
	
	// get the field's settings without attempting to load a value
    $key = "field_615d876187b3e";
	$field = get_field_object($key, false, false);
	
	
	// set value if available
	if( isset($_GET[ $name ]) ) {
		
		$field['value'] = explode(',', $_GET[ $name ]);
		
	}
	
	
	// create filter
	?>
	<div class="filter" data-filter="<?php echo $name; ?>">
		<?php create_field( $field ); ?>
	</div>
	
<?php endforeach; ?>
</div>

<script type="text/javascript">
(function($) {
	
	// change
	$('#archive-filters').on('change', 'input[type="checkbox"]', function(e){
      
      e.preventDefault();

		// vars
		var url = '<?php echo home_url('product-category/csgo/'); ?>';
			args = {};
			
		
		// loop over filters
		$('#archive-filters .filter').each(function(){
			
			// vars
			var filter = $(this).data('filter'),
				vals = [];
			
			
			// find checked inputs
			$(this).find('input:checked').each(function(){
	
				vals.push( $(this).val() );
	
			});
			
			
			// append to args
			args[ filter ] = vals.join(',');
			
		});
		
		
		// update url
		url += '?';
		
		
		// loop over args
		$.each(args, function( name, value ){
			
			url += name + '=' + value + '&';
			
		});
		
		
		// remove last &
		url = url.slice(0, -1);
		
		
		// reload page
		window.location.replace( url );
		

	});

})(jQuery);
</script> 
  

```


#IN Function.php


```php

  // array of filters (field key => field name)
$GLOBALS['my_query_filters'] = array( 
	'field_1'	=> 'name-fild', 
    // 'field_2' => 'bedrooms'
);


// action
add_action('pre_get_posts', 'my_pre_get_posts', 10, 1);

function my_pre_get_posts( $query ) {
	
	// bail early if is in admin
	if( is_admin() ) return;
	
	
	// bail early if not main query
	// - allows custom code / plugins to continue working
	if( !$query->is_main_query() ) return;
	
	
	// get meta query
	$meta_query = $query->get('meta_query');

	
	// loop over filters
	foreach( $GLOBALS['my_query_filters'] as $key => $name ) {
		
		// continue if not found in url
		if( empty($_GET[ $name ]) ) {
			
			continue;
			
		}
		
		
		// get the value for this filter
		// eg: http://www.website.com/events?city=melbourne,sydney
		$value = explode(',', $_GET[ $name ]);
		
		
		// append meta query
    	$meta_query[] = array(
            'key'		=> $name,
            'value'		=> $value,
            'compare'	=> 'IN',
        );
        
	} 
	
	
	// update meta query
	$query->set('meta_query', $meta_query);

}


```



#### INFO

INFO [Links](https://www.advancedcustomfields.com/blog/a-closer-look-at-applying-filter-variations-in-acf/)

MD-MANUAL get_field_object [Links](https://github.com/Fobiya/MD-MANUAL/tree/master/WordPress/advancedcustomfields/get_field_object)

<!--MD-MANUAL/scss/media/ [Links](https://github.com/Fobiya/MD-MANUAL/tree/master/scss/media)-->