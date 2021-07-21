## register_post_type

<!--![](../../img/)-->


##### create_blog

```php

function create_doctors(){
	register_post_type('doctors', array(
		'labels' => array(
			'name'				=> __('Doctors', 'doctors-admin'),
			'singular_name'   	=> __('doctors', 'doctors-admin'),
			'add_new'		 	=> __('Add post doctors', 'doctors-admin'),
			'add_new_item'		=> __('Add post doctors', 'doctors-admin'),
			'edit'				=> __('Edit post doctors', 'doctors-admin'),
			'edit_item'	   		=> __('Edit post doctors', 'doctors-admin'),
			'new_item'			=> __('New post doctors', 'doctors-admin'),
			'all_items'	   		=> __('All post doctors', 'doctors-admin'),
			'view'				=> __('View post doctors', 'doctors-admin'),
			'view_item'	   		=> __('View post doctors', 'doctors-admin'),
			'search_items'		=> __('Search post doctors', 'doctors-admin'),
			'not_found'	   		=> __('Doctors not found', 'doctors-admin'),
		),
		'public' => true, // show in admin panel?
		'menu_position' => 22,
		'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'page-attributes'),
//		'taxonomies' => array('category_doctors'),
		'has_archive' => true,
		'capability_type' => 'post',
		'menu_icon'   => 'dashicons-businessperson',
		'rewrite' => array('slug' => 'doctors', 'with_front' => false ),
	));
}
add_action('init', 'create_doctors');



```




```php

function video_person(){
	register_post_type('person', array(
		'labels' => array(
			'name'				=> __('Video person', 'person-admin'),
			'singular_name'   	=> __('Video person', 'person-admin'),
			'add_new'		 	=> __('Add post person', 'person-admin'),
			'add_new_item'		=> __('Add post person', 'person-admin'),
			'edit'				=> __('Edit post person', 'person-admin'),
			'edit_item'	   		=> __('Edit post person', 'person-admin'),
			'new_item'			=> __('New post person', 'person-admin'),
			'all_items'	   		=> __('All post person', 'person-admin'),
			'view'				=> __('View post person', 'person-admin'),
			'view_item'	   		=> __('View post person', 'person-admin'),
			'search_items'		=> __('Search post person', 'person-admin'),
			'not_found'	   		=> __('Presentation not found', 'person-admin'),
		),
		'public' => true, // show in admin panel?
		'menu_position' => 37,
		'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'page-attributes'),
		'taxonomies' => array('category-person'),
		'has_archive' => false,
		'capability_type' => 'post',
		'menu_icon'   => 'dashicons-format-video',
		'rewrite' => array('slug' => 'person'),
	));
}
add_action('init', 'video_person');



function taxonomy_link( $link, $term, $taxonomy ) {
    if ( $taxonomy !== 'person' )
        return $link;
    return str_replace( 'person/person/', '', $link );
}
add_filter( 'term_link', 'taxonomy_link', 10, 3 );


```




##### // Registering Custom Post Type Themes

```php

// Registering Custom Post Type Themes
add_action( 'init', 'register_themepost', 20 );
function register_themepost() {
    $labels = array(
        'name' => _x( 'our-news', 'my_custom_post','custom' ),
        'singular_name' => _x( 'Theme', 'my_custom_post', 'custom' ),
        'add_new' => _x( 'Add New', 'my_custom_post', 'custom' ),
        'add_new_item' => _x( 'Add New NewsPost', 'my_custom_post', 'custom' ),
        'edit_item' => _x( 'Edit NewsPost', 'my_custom_post', 'custom' ),
        'new_item' => _x( 'New NewsPost', 'my_custom_post', 'custom' ),
        'view_item' => _x( 'View NewsPost', 'my_custom_post', 'custom' ),
        'search_items' => _x( 'Search NewsPosts', 'my_custom_post', 'custom' ),
        'not_found' => _x( 'No NewsPosts found', 'my_custom_post', 'custom' ),
        'not_found_in_trash' => _x( 'No NewsPosts found in Trash', 'my_custom_post', 'custom' ),
        'parent_item_colon' => _x( 'Parent NewsPost:', 'my_custom_post', 'custom' ),
        'menu_name' => _x( 'Our News Posts', 'my_custom_post', 'custom' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Custom Theme Posts',
        'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'post-formats', 'custom-fields' ),
        'taxonomies' => array( 'post_tag','our-news_categories'),
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon'   => 'dashicons-text-page',
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => array( 'slug' => 'our-news' ),
        'public' => true,
        'has_archive' => 'our-news',
        'capability_type' => 'post'
    );
    register_post_type( 'our-news', $args ); // max 20 character cannot contain capital letters and spaces
}

```

##### 


```html
    
single-{post-type}.php
The single post template used when a visitor requests a single post from a custom post type. For example, single-acme_product.php would be used for displaying single posts from a custom post type named acme_product.
archive-{post-type}.php
The archive post type template is used when visitors request a custom post type archive. For example, archive-acme_product.php would be used for displaying an archive of posts from the custom post type named acme_product. The archive.php template file is used if the archive-{post-type}.php is not present.
search.php
The search results template is used to display a visitor’s search results. To include search results from your custom post type, refer to the code sample below.
index.php
The index.php is used if a specific query template (single-{post-type}.php, single.php, archive-{post-type}.php, archive.php, search.php) for the custom post type is not present.


```



add_image_size() [Links](https://wp-kama.ru/function/add_image_size/)